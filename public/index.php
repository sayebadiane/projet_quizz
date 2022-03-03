<?php
if(session_status()==PHP_SESSION_NONE){
    session_start();
}
require_once dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR."constantes.php";
require_once dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR."role.php";
require_once dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR."validator.php";
require_once dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR."orm.php";
//require_once dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR."public".DIRECTORY_SEPARATOR."css".DIRECTORY_SEPARATOR."style.connexion.css";

require_once dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR."router.php";
