
<?php
require_once(PATH_SRC."modeles".DIRECTORY_SEPARATOR."user.model.php");

// require_once(ROOT."config".DIRECTORY_SEPARATOR."validator");

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_REQUEST['action'])){
        if($_REQUEST['action']=='connexion'){
            $login = $_POST["login"];
            $password = $_POST["password"];
            connexion($login,$password) ;  
        }

    }
}
if($_SERVER["REQUEST_METHOD"]=="GET"){
    if(isset($_REQUEST['action'])){
        if($_REQUEST['action']=="connexion"){
       require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php");
          
        }
    }
    else{
        require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php");

    }
} 


function connexion(string $login,string $password):void{
    $errors=[];
    champ_obligatoire('login',$login,$errors,"mes");
    champ_obligatoire('password',$password,$errors,"mot de pass vide");
    valid_email('log',$login,$errors,"email invalid");
    if(count($errors)==0){
        //$users =verifie_password_login($login,$password);
        //verifie_password_login($login,$password);
        //var_dump(json_to_array("users"));
        /* echo verifie_password_login($login,$password);
        die();
        verifie_password_login($login,$password); */
        $user = verifie_password_login($login,$password);
        if(count($user)!=0){
            $_SESSION["connect-user"]=$user;
            header("location".WEB_ROOT."?controller=user&action=accueil");
            exit();
        }
        else{
            $errors['connexion']="mot de passe ou login incorrect";
            $_SESSION[KEY_ERRORS]=$errors;
            header("location".WEB_ROOT);
    
            exit();
        }

    } 

    else{
        $_SESSION[KEY_ERRORS]=$errors;
        header("location".WEB_ROOT);
        exit();
    }

}