
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active ">
            <a href="index.php?page=recommandation"><img src="img/4.jpg" class="d-block w-100" alt="Recommandation Professionnel">
            <div class="carousel-caption">
                <div class="text-carousel">                                                                                                      
                    <h1 id="fontReco">Postez vos recommandation en cliquant ici!</h1>
                </div>
            </div> 
            </a>
        </div>
        <?php 
        // affiche les 3 derniers commentaires mis dans la base de donnée a lintérieur du carousel //
        for ($i=0; $i < 3 ; $i++) { 
            // met le dernier commentaire ajouté en pole position sur le carousel //
            if ($i== 0);
                echo '<div class="carousel-item">';
                    // affiche l'image mis dans la base de donnée a lintérieur du carousel //
                        echo '<a href="index.php?page=recommandation"><img src="img/'.$i.'.jpg" class="d-block w-100" alt="Recommandation Professionnel">
                                    <div class="carousel-caption">
                                        <div class="text-carousel">';
                                            // affiche le dernier commentaire mis dans la base de donnée a lintérieur de l'image //                                                                                                      
                                            echo '<h4>'.$users[$i]['entreprise'].', '.$users[$i]['localisation'].'</h4>';
                                            echo '<p>'.$users[$i]['comment'].'<br> '.$users[$i]['fonction'].', '.'<em><i>'.$users[$i]['firstname'].' '.$users[$i]['lastname'].'</i></em>';
                                            echo' 
                                        </div>
                                    </div> 
                                </a>                                 
                        </div>';
            };
        ?>
</div>
        <!-- -- bouton carousel ---->
        <a class="carousel-control-prev index" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next index" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>   
</div>
</div>