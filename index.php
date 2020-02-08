<?php 

//on est dans le contrôleur frontal \o/
//ce fichier reçoit toutes les requêtes au site

//on instancie notre contrôleur où sont toutes nos méthodes
//pour chaque page
//on inclue d'abord la définition de la classe
include("Controller.php");


$controller = new Controller();

//si on n'a pas de paramètre dans l'URL... c'est l'accueil
if (empty($_GET['page']) || $_GET['page'] == "home")
{
    $controller->home();
}

//si on a le paramètre page qui vaut mentions_legales... c'est la page mentions_legales
elseif($_GET['page'] == 'mentions_legales')
{
    $controller-> mentions_legales();
}


elseif($_GET['page'] == 'recommandation')
{
    $controller->recommandation();
}

elseif($_GET['page'] == 'competence')
{
    $controller->competence();
}

elseif($_GET['page'] == 'a_propos')
{
    $controller-> a_propos();
}

//si on n'a pas trouvé la page, alors c'est une erreur 404 ! 
else 
{
    $controller->fourofour();
}

?>