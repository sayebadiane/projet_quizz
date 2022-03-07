


<div style="margin:90px 90px" >
    <h1>Liste des joueur par score</h1>
    <table>
         <tr>
             <th>nom</th>
             <th>prenom</th>
             <th>score</th>
         </tr>
         <?php foreach($data as $value): ?>
         <tr>
             <td><?=$value['nom']?></td>
             <td><?=$value['prenom']?></td>
             <td><?=$value['score']?></td>
         </tr>
         <?php endforeach;?>
    </table>

</div>


