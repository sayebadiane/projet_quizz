<?php 
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."header.html.php")
?>
<ul>
    <li><a class="active" href="#home">Home</a></li>
    <?php if(is_admin()): ?>
    <li><a href="<?=WEB_ROOT."?controller=securite&action=liste.joueur"?>">Liste des joueur</a></li> 
    <?php endif; ?>
    <li><a href="<?=WEB_ROOT."?controller=securite&action=deconnexion"?>">Deconnexion</a></li> 
    
</ul>
<?php 
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."footer.html.php")
?>