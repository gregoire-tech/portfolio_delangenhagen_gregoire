<?php 
     //me connecte à la base de donnée 
    //crée notre variable $pdo 
    include("db.php");


    //pour débugguer les données envoyées du formulaire
    //var_dump($_POST);
    //par défaut, on dit que le formulaire est entièrement valide
    //si on trouve ne serait-ce qu'une seule erreur, on 
    //passera cette variable à false
    if(!empty($_POST)){
    
        $formIsValid = true;   
        $lastname = strip_tags($_POST['lastname']);
        $firstname = strip_tags($_POST['firstname']);
        $email = strip_tags($_POST['email']);
        $fonction = strip_tags($_POST['fonction']);
        $entreprise  = strip_tags($_POST['entreprise']);
        $localisation  = strip_tags($_POST['localisation']);
        $comment  = strip_tags($_POST['comment']);
         
    //tableau qui stocke nos éventuels messages d'erreur
    $errors = [];

    //si le lastname est vide...
    if(empty($lastname) ){
        //on note qu'on a trouvé une erreur ! 
        $errors[] = "Veuillez renseigner votre nom de famille !";
    }
    //mb_strlen calcule la longueur d'une chaîne
    elseif(mb_strlen($lastname) <= 1){
        $errors[] = "Votre nom de famille est court, très court. Veuillez le rallonger !";
    }
    elseif(mb_strlen($lastname) > 30){
        $errors[] = "Votre nom de famille est trop long !";
    }
    //si le firstname est vide...
    if(empty($firstname) ){
        //on note qu'on a trouvé une erreur ! 
        $errors[] = "Veuillez renseigner votre prénom !";
    }
    //mb_strlen calcule la longueur d'une chaîne
    elseif(mb_strlen($firstname) <= 1){
        $errors[] = "Votre prénom est court, très court. Veuillez le rallonger !";
    }
    elseif(mb_strlen($firstname) > 30){
        $errors[] = "Votre prénom est trop long !";
    }
    //validation de l'email
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors[] = "Votre email n'est pas valide !";
    }
    //si le poste est vide...
    if(empty($fonction) ){
        //on note qu'on a trouvé une erreur ! 
        $errors[] = "Veuillez renseigner votre fonction !";
    }
    //mb_strlen calcule la longueur d'une chaîne
    elseif(mb_strlen($fonction) <= 1){
        $errors[] = "Votre nom de poste est court, très court. Veuillez le rallonger !";
    }
    elseif(mb_strlen($fonction) > 30){
        $errors[] = "Votre nom de poste est trop long !";
    }
    //si l'entreprise est vide...
    if(empty($entreprise) ){
        //on note qu'on a trouvé une erreur ! 
        $errors[] = "Veuillez renseigner votre entreprise !";
    }
    //mb_strlen calcule la longueur d'une chaîne
    elseif(mb_strlen($entreprise) <= 1){
        $errors[] = "Votre entreprise est court, très court. Veuillez le rallonger !";
    }
    elseif(mb_strlen($entreprise) > 30){
        $errors[] = "Votre entreprise est trop long !";
    }
    //si l'adresse est vide...
    if(empty($localisation) ){
        //on note qu'on a trouvé une erreur ! 
        $errors[] = "Veuillez renseigner votre adresse !";
    }
    //mb_strlen calcule la longueur d'une chaîne
    elseif(mb_strlen($localisation) <= 1){
        $errors[] = "Votre adresse est court, très court. Veuillez le rallonger !";
    }
    elseif(mb_strlen($localisation) > 50){
        $errors[] = "Votre adresse est trop long !";
    }
    //si le commentaire est vide...
    if(empty($comment) ){
        //on note qu'on a trouvé une erreur ! 
        $errors[] = "Veuillez renseigner votre commentaire !";
    }
    //mb_strlen calcule la longueur d'une chaîne
    elseif(mb_strlen($comment) <= 1){
        $errors[] = "Votre commentaire est court, très court. Veuillez le rallonger !";
    }
    elseif(mb_strlen($comment) > 250){
        $errors[] = "Votre commentaire est trop long !";
    }

    //affiche les éventuelles erreurs de validations
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo '<div>' . $error . '</div>'    ;
        }
    }
    //si le formulaire est toujours valide... 
    if (empty($errors)) {
    //on écrit tout d'abord notre requête SQL, dans une variable
    $sql = "INSERT INTO users 
            (firstname, lastname, email, fonction, entreprise, localisation, comment, date_created)
            VALUES 
            (:firstname, :lastname, :email, :fonction, :entreprise, :localisation, :comment, NOW())";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ":firstname" => $firstname,
        ":lastname" => $lastname, 
        ":email" => $email,
        ":fonction" => $fonction, 
        ":entreprise" => $entreprise,
        ":localisation" => $localisation, 
        ":comment" => $comment,
    ]);

    //renvoie sur la page d'accueil
    header("Location: index.php");
        
    }
}
                        
?>