<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Portfolio Grégoire</title>
    <link rel="icon" type="image/png" href="img/logo2.png" />
    <!-- -- ajuster a la taille d'ecran ---->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- -- bootstrap jquerry ---->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <!-- -- police ---->
    <!--link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet"-->
    <link href="https://fonts.googleapis.com/css?family=Philosopher&display=swap" rel="stylesheet">
    <!--link href="https://fonts.googleapis.com/css?family=Noticia+Text&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet"-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <!-- -- relier doc html+css ---->
    <link rel="stylesheet" media="screen" href="templates/index.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
     <script>
       function onSubmit(token) {
         document.getElementById("demo-form").submit();
       }
     </script>
</head>

<body>
<header>
<!-- -- barre de navigation ---->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">

    <!-- -- logo ---->
    <a class="navbar-brand textlogo" href="index.php?page=home"><img class="iconnav textlogo" src="img/logo2.png" alt="GDreve logo"> <h2>GDrêve</h2></a>

     <!-- -- bouton de navigation ---->
    <button class="navbar-toggler mr-4" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
     aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">

        <!-- -- menu déroulant ---->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle contactR" href="#" id="navbarDropdown" role="button" 
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu</a>

            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="index.php?page=a_propos">A propos</a>
                <a class="dropdown-item" href="index.php?page=recommandation">Recommandation</a>
                <a class="dropdown-item" href="index.php?page=competence">Compétences et Formations</a>
                <a class="dropdown-item" href="index.php?page=mentions_legales">Mentions légales</a>
            </div>
        </li>  

        <!-- -- lien Contact ---->
        <li class="nav-item active">
            <a class="nav-link" href="mailto:greg_degaine@hotmail.fr">Contact <span class="sr-only">(current)</span></a>
        </li>     
    </div>
    </nav>

</header>  
