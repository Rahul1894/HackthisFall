<?php 
if(!isset($_COOKIE['id']) || !($_COOKIE['code']=="client")){
    header('Location: clientlogin.php');
}
?>