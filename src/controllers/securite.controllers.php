
<?php
require_once(PATH_SRC."modeles".DIRECTORY_SEPARATOR."user.model.php");

// require_once(ROOT."config".DIRECTORY_SEPARATOR."validator");

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_REQUEST['action'])){
        if($_REQUEST['action']=='connexion'){
            $login = $_POST["login"];
            $password = $_POST["password"];
            // var_dump($_POST);
            // die;
            connexion($login,$password) ;  
           
            
        }

    }
}
if($_SERVER["REQUEST_METHOD"]=="GET"){
    if(isset($_REQUEST['action'])){
        if($_REQUEST['action']=="connexion"){
        require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php");
          
        }
        elseif($_REQUEST['action']=="deconnexion"){
            logout();

        }
    }
    else{
        require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php");

    }
} 


function connexion(string $login,string $password):void{
    $errors=[];
    champ_obligatoire('login',$login,$errors,"login obligatoire");
    //champ_obligatoire('password',$password,$errors,"mot de pass vide");
    if(count($errors)==0){
        valid_email('login',$login,$errors,"login invalid");
        //$errors['connexion']="login incorrect";
    }

    if(count($errors) ==0){      
        $user = verifie_password_login($login,$password);  
        if(count($user)!=0){ 
            // die("ok");
            $_SESSION["connect-user"]=$user;
            header("location:".WEB_ROOT."?controller=user&action=accueil");
            exit();

        }
        else{
            $errors['connexion']="mot de passe ou login incorrect";
            $_SESSION[KEY_ERRORS]=$errors;
            header("location:".WEB_ROOT);
            exit();
        }

    } 
    else{
       
        $_SESSION[KEY_ERRORS]=$errors;
        header("location:".WEB_ROOT);
        exit();
    }

}
function logout(){
    session_destroy();
    // unset($_SESSION["connect-user"]);
    header("location:".WEB_ROOT);
    exit();

}