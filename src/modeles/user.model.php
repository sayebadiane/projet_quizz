<?php
function verifie_password_login($login ,$password){
    $users = json_to_array("users");
    foreach ($users as $user) {
        if($user['login']== $login && $user['password']== $password){
            return $user;
        }
       
    }
    return [];
}
function find_users(string  $role):array{
    $users=json_to_array("users");
    $result=[];
    foreach($users as $user){
        if($user['role']==$role){
            $result[]=$user;
        }

    }
    return $result;


}