<?php
require_once 'App/auth.php';

if($usuario && $perm){
   header('location: views/');
}else{
    header('location: login.php');
    
}


header('location: login.php');




?>
