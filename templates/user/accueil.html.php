<?php 
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."header.html.php")
?>
<div class="main_accueil">
    <div class="entete_accueil">
        <h1>CRÉER ET PARAMETRER VOS QUIZZ</h1>
        <button type="text" onclick="window.location.href='<?=WEB_ROOT."?controller=securite&action=deconnexion"?>';"> Deconnexion</button>
    </div>
    <div class="midle_accueil">
        <div class="midle_guache">
            <div class="midle_guache_haut">
                <img src="" alt="">

            </div>
            <div class="midle_guache_bat">
                <?php if(is_admin()): ?>
                    <div class="midle_guache_1">
                        <a href="#">Liste Question</a>
                        <img src="<?=PATH_SRC."css".DIRECTORY_SEPARATOR."img".DIRECTORY_SEPARATOR."ic-ajout-réponse.png"?> alt="">

                    </div>
                    <div class="midle_guache_2">
                        <a href="#">Crée Admin</a>
                        <p>x</p>

                    </div>
                    <div class="midle_guache_3">
                        <a href="<?=WEB_ROOT."?controller=user&action=liste.joueur"?>">Liste Joueur</a>
                        <img src="<?=PATH_SRC."css".DIRECTORY_SEPARATOR."img".DIRECTORY_SEPARATOR."ic-ajout-réponse.png"?> alt="">

                    </div>
                    <div class="midle_guache_4">
                        <a href="#">Crée Question</a>
                        <p>x</p>

                    </div>
                <?php endif ?>   

            </div>
           

        </div>
        <div class="midle_droite">
           <?php

            echo $content_for_views ;
          
            ?>

        </div>

    </div>


</div>









<!-- 
<?php if(is_admin()): ?>
    <li><a href="<?=WEB_ROOT."?controller=user&action=liste.joueur"?>">Liste des joueur</a></li> 
    <?php endif; ?> -->


<!-- <ul>
    <li><a class="active" href="#home">Home</a></li>
    
    <li><a href="<?=WEB_ROOT."?controller=securite&action=deconnexion"?>">Deconnexion</a></li> 
    
</ul> -->
<?php 
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."footer.html.php")
?>