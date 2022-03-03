<?php
// session_start();
require_once(PATH_SRC."modeles".DIRECTORY_SEPARATOR."user.model.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_REQUEST['action'])){
        if($_REQUEST['action']=='connexion'){
             echo "bonjour";

        }

    }
}
if($_SERVER['REQUEST_METHOD']=='GET'){
    if(isset($_GET['action'])){
        if(!is_connect()){
            header("location:".WEB_ROOT);
            exit();
        }
        if($_GET['action'] == "accueil"){
 
             require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php");
        }
        elseif($_GET['action']=="liste.joueur"){
            liste_joueur();

        }

    }
} 
function liste_joueur(){
    $data= find_users(role_jour); 
    require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."liste.joueur.html.php");
    


}