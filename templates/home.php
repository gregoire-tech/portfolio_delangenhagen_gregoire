<?php 
    //connexion à la bdd 
    include("db.php");

    //ma requête sql pour récupérer les commentaires
    $sql = "SELECT * 
            FROM users 
            order by date_created desc";

    //envoie ma requête SQL au serveur MySQL
    $stmt = $pdo->prepare($sql);


    //demande à MySQL d'exécuter ma requête 
    $stmt->execute();


    //récupère les recommandation depuis le serveur MySQL
    $users = $stmt->fetchAll();


    //pour débugger,
    //var_dump($message);
?>

<!-- --head + header + nav  ---->
<?php  include("top.php"); ?>

<section class="blockcentral ">
  

            <!-- -- 1 image + carousel----> 
            <div class="row">

                <!-- -- A propos  ---->
                <div class="col-md-6 col-12 p-1">
                  <a href="index.php?page=a_propos"><img src="img/12.jpg" class="w-100" alt="A propos">
                    <div class="text-content">
                        <h2 >A propos</h2>
                    </div>
                  </a>
                </div>

                <!-- -- carousel des Recommandations ---->
                <div class="col-md-6 col-12 p-1">
                            <!-- -- image carousel avec la recuperation des informations dans la base de donnée ---->
                            <?php  include("carousel.php"); ?>
                            
            <!-- -- 2 images + 4 icones ---->      
            <div class="row">

              <!-- --  Compétence ---->  
              <div class="col-12 col-md p-1">
                <a href="index.php?page=competence"><img src="img/skill.jpg" class="w-100" alt="Compétence">
                <div class="text-content">
                    <h2>Skill & Training</h2>
                </div></a>
              </div>

              <!-- -- CV ----> 
              <div class="col-12 col-md p-1">
                <a href="CV.pdf" target="_blank"><img src="img/CV.jpg" class="w-100" alt="CV">
                  <div class="text-content" >
                      <h2>Curriculum Vitae</h2>
                  </div>
                </a>
              </div>

              <!-- -- 4 icones ---->
              <div class="col-12 col-md p-1">
                <div class="containerLogo">
                    <div class="row ">
                      <div class="col icontop"><a href="tel:+33613624726"><img src="img/telephone.png" class="w-100 icon" alt="Téléphone"></a></div>
                      <div class="col icontop"><a href="https://www.facebook.com/gregoire.degaine"><img src="img/facebook.png" class="w-100 icon" alt="Facebook"></a></div>
                      <div class="w-100"></div>
                      <div class="col iconbottom"><a href="https://www.linkedin.com/in/gr%C3%A9goire-de-langenhagen-394348197/"><img src="img/linkedin.png" class="w-100 icon " alt="Linkedin"></a></div>
                      <div class="col iconbottom"><a href="mailto:greg_degaine@hotmail.fr"><img src="img/mail.png" class="w-100 icon" alt="Email"></a></div>
                    </div>
                  </div>
              </div>
            </div> 
          </div>
        </div>
</section>   

<!-- -- le footer  ---->
<?php  include("bottom.php"); ?>
