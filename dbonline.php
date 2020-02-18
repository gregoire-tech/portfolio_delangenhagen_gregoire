<?php
 
    //paramètres de connexion en constantes
    //soit localhost, soit l'IP du serveur
    define("DBHOST", "gregoirekaportfo.mysql.db");
    //utilisateur de la base (différent de PHPmyAdmin)  
    define("DBUSER", "gregoirekaportfo");
    //mot de passe
    define("DBPASS", "Greggreg13");           
    //nom de la base de données
    define("DBNAME", "gregoirekaportfo");  
 
    try {
        //connexion à la base avec la classe PDO et le dsn
        $pdo = new PDO('mysql:host='.DBHOST.';dbname='.DBNAME.';charset=UTF8', DBUSER, DBPASS, array(
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //on récupère nos données en array associatif par défaut
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING         //on affiche les erreurs. À modifier en prod. 
        ));
       
    } catch (PDOException $e) { //attrappe les éventuelles erreurs de connexion
        echo 'Erreur de connexion : ' . $e->getMessage();
    }

    