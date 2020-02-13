<?php 
    session_start();
    spl_autoload_register();

    //crée une instance de la classe
    $csrfDefender = new CsrfDefender();

    
?>

<!-- --prepare et verifie le formulaire  ---->
<?php  include("templates/sendForm.php"); ?>

<!-- --head + header + nav  ---->
<?php  include("top.php"); ?>


<!-- -- block central ---->
<section class="blockcentral">
    <div class="row">
    <!-- -- carte nantes ---->
    <div class="embed-responsive embed-responsive-16by9 col-md-6 ">
        <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d86684.63842798982!2d-1.6300958013712554!3d47.23820066074608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4805ee81f0a8aead%3A0x40d37521e0ded30!2sNantes!5e0!3m2!1sfr!2sfr!4v1576868564843!5m2!1sfr!2sfr" allowfullscreen></iframe>
        </div>

    <!-- -- formulaire ---->
    <div class="col-md-5 m-3">
        <form class="needs-validation" method="POST" enctype="multipart/form-data" novalidate>
            <div class="form-row">
            <!-- -- prénoms ---->
            <div class="col-md-6 mb-3">
                <label for="firstname">Prénom</label>
                <input type="text" class="form-control" id="firstname " name="firstname" placeholder="ex: Grégoire" required value="<?php if(!empty($_POST['firstname'])){
                                        echo $_POST['firstname'];
                                        } ?>">
                <div class="invalid-feedback">
                Ajoutez un prénom valide!
                </div>
            </div>
            <!-- -- Nom ---->
            <div class="col-md-6 mb-3">
                <label for="lastname">Nom</label>
                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="ex: De langenhagen" required value="<?php if(!empty($_POST['lastname'])){
                                        echo $_POST['lastname'];
                                        } ?>">
                <div class="invalid-feedback">
                Ajoutez un nom valide!
                </div>
            </div>
            <!-- -- fonction ---->
            <div class="col-md-12 mb-3">
                <label for="Fonction">Fonction</label>
                <input type="text" class="form-control" id="fonction" name="fonction" placeholder="ex: Développeur" required value="<?php if(!empty($_POST['fonction'])){
                                        echo $_POST['fonction'];
                                        } ?>">
                <div class="invalid-feedback">
                Ajoutez une fonction valide!
                </div>
            </div>
            <!-- -- adresse mail ---->
            <div class="col-md-6 mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="exemple@gmail.com" required value="<?php if(!empty($_POST['email'])){
                                        echo $_POST['email'];
                                        } ?>">
                <div class="invalid-feedback">
                Ajoutez un email valide!
                </div>
            </div>
            <!-- -- entreprise ---->
            <div class="col-md-6 mb-3">
                <label for="enterprise">Entreprise</label>
                <input  type="text" class="form-control"  id="enterprise" name="entreprise" placeholder="ex: Space X" required value="<?php if(!empty($_POST['enterprise'])){
                                        echo $_POST['enterprise'];
                                        } ?>">
                <div class="invalid-feedback">
                Ajoutez une entreprise valide!
                </div>
            </div>
            <!-- -- adresse ---->
            <div class="form-row">
            <div class="col-md-12 mb-3">
                <label for="localisation">Adresse entreprise</label>
                <input type="text" class="form-control" id="localisation" name="localisation"  placeholder="ex: Phnom Penh, Cambodge" required value="<?php if(!empty($_POST['localisation'])){
                                        echo $_POST['localisation'];
                                        } ?>">
                <div class="invalid-feedback">
                Ajoutez une localisation valide!
                </div>
            </div>
            <!--upload fichier en attente
            <div class="form-row">
            <div class="col-md-12 mb-3">
                <label>Fichier</label>
                <input type="file" class="form-control" id="image" name="image"  placeholder="ex: Phnom Penh, Cambodge" required >
                <div class="invalid-feedback">
                Ajoutez une image valide!
                </div>
            </div>--->
            <!-- -- Commentaire ---->
            <div class="col-md-12 mb-3">
                <label for="comment">Commentaires</label>
                <textarea type="text" class="form-control" id="comment" name="comment"  placeholder="ex: Le ciel nocturne dévoile la voie lactée..." rows="5" required value="<?php if(!empty($_POST['comment'])){
                                        echo $_POST['comment'];
                                        } ?>"></textarea>
                <div class="invalid-feedback">
                Ajoutez un commentaire valide!
                </div>
            </div>
            

            <!-- appelle la méthode pour afficher le champ caché -->
            <?php $csrfDefender->showCsrfTokenField() ?>

             <!-- -- bouton ---->
            <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                J'ai lu et j'accepte les termes et conditions des<a href="Mentions_legales.php"> Mentions légales.</a>
                </label>
                <div class="invalid-feedback">
                Vous devez accepter les termes et conditions des<a href="Mentions_legales.php"> Mentions légales</a> avant de continuer!
                </div>
            
                <?php 
                    //affiche les éventuelles erreurs de validations
                    if (!empty($errors)) {
                        echo '<div class="alert alert-danger">';
                        foreach ($errors as $error) {
                            echo '<div>' . $error . '</div>'    ;
                        }
                        echo '</div>';
                    }

                    if (!empty($_POST)){
                        if (empty($errors)){
                        echo '<div class="alert alert-success">';
                        echo '<div>' . "Votre formulaire à bien été envoyé" . '</div>' ;
                        echo '</div>';
                        }
                    }
                    //si le formulaire est soumis
                    if (!empty($_POST)){

                        //s'assurer que le formulaire est protégé contre les CSRF
                        if ($csrfDefender->validateReceivedToken() === true){
                            echo '<div class="alert alert-success">';
                        echo '<div>' . "Votre Token est valide" . '</div>' ;
                        echo '</div>';
                        }
                        else {
                            echo '<div class="alert alert-danger">';
                            echo '<div>' . "Votre Token est invalide" . '</div>' ;
                            echo '</div>';
                        }
                    }
                    ?>

            </div> 
            <div class="g-recaptcha" data-sitekey="6LdmRNgUAAAAAPTLmleVGMXGkhwW_ZHCZSOqIlKA"></div>
            <br>
            <button class="btn btn-primary" type="submit">Envoyer</button>
        </form>

    </div>
      
      <script>
      // JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // 
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
      </script> 
    </div>
    
</section>   

<!-- -- le footer  ---->
<?php  include("bottom.php"); ?>