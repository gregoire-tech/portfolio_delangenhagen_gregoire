<?php 
    session_start();
    spl_autoload_register();

    //crée une instance de la classe
    $csrfDefender = new CsrfDefender();

    //si le formulaire est soumis
    if (!empty($_POST)){
        $email = $_POST['email'];

        //s'assurer que le formulaire est protégé contre les CSRF
        if ($csrfDefender->validateReceivedToken() === true){
            echo "valide !";
        }
        else {
            echo "invalide !";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulaire</title>
</head>
<body>
<?php //echo bin2hex(random_bytes(32)); ?>

	<h1>Protéger un formulaire contre les CSRF</h1>
	
	<h2>Modifier mon adresse email</h2>
	<form method="post">
        <input name="email" type="email" placeholder="Votre nouvel email">
		
		<!-- appelle la méthode pour afficher le champ caché -->
        <?php $csrfDefender->showCsrfTokenField() ?>

        <button>Modifier !</button>
    </form>
</body>
</html>

