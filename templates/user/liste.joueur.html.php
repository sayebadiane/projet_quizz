<?php 
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."user.model.php")
?>
<ul>
    <li><a class="active" href="#home">Home</a></li>
    <?php if(is_admin()): ?>
    <li><a href="<?=WEB_ROOT."?controller=securite&action=liste.joueur"?>">Liste de joueur</a></li>  
     <?php endif; ?> 
    <li><a href="<?=WEB_ROOT."?controller=securite&action=deconnexion"?>">Deconnexion</a></li>
    
</ul>
<div style="margin:50px 70px">
    <table>
         <tr>
             <th>nom</th>
             <th>prenom</th>
             <th>score</th>
         </tr>
         <?php foreach($data as $value) ?>
         <tr>
             <td><?=$value['nom']?></td>
             <td><?=$value['prenom']?></td>
             <td><?=$value['score']?></td>
         </tr>
         <?phpendif;?>
    </table>

</div>


<?php 
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."footer.html.php")
?>