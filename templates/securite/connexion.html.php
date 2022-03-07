<?php 
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."header.html.php")
?>
    <div class="parent">
        <div class="main">
            <form action="<?= WEB_ROOT ;?>" method="POST">
                <div class="forme1">
                    <input type="hidden" name="controller" value="securite">
                    <input type="hidden" name="action" value="connexion">
                    <div class="header">
                        <p>Login Form</p>
                        <p>x</p>

                    </div>

                    <div class="midle">
                        <div class="affiche_error">
                            <?php  if(isset($_SESSION[KEY_ERRORS]['connexion'])):?>
                            <small style="color:red"><?= $_SESSION[KEY_ERRORS]['connexion'];?> </small>
                            <?php endif ?>
                        </div> 
                        <div class="input1">
                            <input type="text" name="login" id="login" placeholder="login" value="">
                            <small style="color:red" id="loginerror"></small>
                            <?php  if(isset($_SESSION[KEY_ERRORS]['login'])):?>
                            <small style="color:red"><?= $_SESSION[KEY_ERRORS]['login'];?> </small>
                            <?php endif ?>
                        </div>
                        <div class="input1">
                            <input type="password" name="password" id="password"  placeholder="password" value="">
                            <small style="color:red" id="passworderror"></small>
                        </div>
                        
                    </div>
                    <div class="end">
                        <button type="submit" id="connexion">connexion</button>
                        <a href="<?=WEB_ROOT."?controller=securite&action=inscription"?>"> s'inscrire pour jouer</a>


                    </div>
                
                </div>
            

            </form>  
        

        </div>
    </div>

<?php

if(isset($_SESSION[KEY_ERRORS])){
    unset($_SESSION[KEY_ERRORS]);
}

?>
<?php 
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."footer.html.php")
?>