<?php 


// affiche les 3 derniers commentaires mis dans la base de donnée a lintérieur du carousel //
for ($i=0; $i < 3 ; $i++) { 
    // met le dernier commentaire ajouté en pole position sur le carousel //
    $active="";
    if ($i== 0) {$active='active';};
        echo '<div class="carousel-item '.$active.' ">';
            // affiche l'image mis dans la base de donnée a lintérieur du carousel //
                echo '<a href="index.php?page=recommandation"><img src="img/'.$i.'.jpg" class="d-block w-100" alt="Recommandation Professionnel">
                <div class="carousel-caption d-table">
                    <div class="text-carousel">';
                        // affiche le dernier commentaire mis dans la base de donnée a lintérieur de l'image //                                                                                                      
                        echo '<h4>'.$users[$i]['entreprise'].', '.$users[$i]['localisation'].'</h4>';
                        echo '<p>'.$users[$i]['comment'].'<br> '.$users[$i]['fonction'].', '.'<em><i>'.$users[$i]['firstname'].' '.$users[$i]['lastname'].'</i></em>';
                    echo' </div>
                </div> </a>                                 
            </div>';
    };
?>