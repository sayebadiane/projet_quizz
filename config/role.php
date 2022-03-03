<?php
define("role_admin","role_admin");
define("role_joueur","role_joueur");

function is_connect():bool{
    return (isset($_SESSION["connect-user"]));

}
function is_joueur():bool{

    return (is_connect() && ($_SESSION["connect-user"])['role']==role_joueur);
}
function is_admin(){
    return (is_connect() && ($_SESSION["connect-user"])['role']==role_admin);

}