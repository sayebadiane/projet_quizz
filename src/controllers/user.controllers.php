<?php
ini_set('display_errors', 'on');
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
           if(is_admin()){
                liste_joueur();
            }
            elseif(is_joueur()){
                jeu();

            }
 
             require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php");
        }
        elseif($_GET['action']=="liste.joueur"){
            liste_joueur();

        }

    }
} 
function liste_joueur(){
    ob_start();
        $data= find_users(role_joueur); 
        require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."liste.joueur.html.php");
    $content_for_views=ob_get_clean();
    require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php");
}
function jeu(){
    ob_start();
        require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."jeu.html.php");
    $content_for_views=ob_get_clean();
    require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php");
   

}