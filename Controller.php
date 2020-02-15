<?php 

class Controller 
{
    public function home()
    {
        //requête à la bdd pour aller chercher les derniers articles

        include("templates/home.php");
    }

    public function recommandation()
    {
        include("templates/Recommandation.php");
    }

    public function mentions_legales()
    {
        include("templates/Mentions_legales.php");
    }

    public function a_propos()
    {
        include("templates/A_propos.php");
    }

    public function competence()
    {
        include("templates/Competence.php");
    }

    public function fourofour()
    {
        include("templates/404.php");
    }
    
}