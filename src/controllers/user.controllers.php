<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_REQUEST['action'])){
        if($_REQUEST['action']=='connexion'){
             echo "bonjour";

        }

    }
}
if($_SERVER["REQUEST_METHOD"]=="GET"){
    if(isset($_GET['action'])){
        if($_GET['action'] == "accueil"){
            echo "hello";
            // die('bonjour');
            // require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php");
        }

    }
} 