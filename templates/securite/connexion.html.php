<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?=WEB_ROOT."css".DIRECTORY_SEPARATOR."style.connexion.css"?>"
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projet</title>
</head>
<body>
    <form action="<?= WEB_ROOT ?>" method="POST">
    <input type="hidden" name="controller" value="securite">
    <input type="hidden" name="action" value="connexion">
    <div class="form1">
        <label for="">Donner votre login</label>
        <input type="text" name="login" id="login">
        <label for="">Donner votre password</label>
        <input type="text" name="password" id="password">
        <button type="submit">connexion</button>
        <!-- <button type="submit">s' inscrire</button> -->
        </div>
    
    </form>
    
</body>
</html> 
