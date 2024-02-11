<?php
include "conn.php";
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
date_default_timezone_set('Asia/Kolkata');
$date = date('d/m/y');
$token = bin2hex(random_bytes(64));
$sql = "SELECT * FROM clients WHERE `name`='$name' or `email`='$email'";
$result = mysqli_query($conn,$sql);
$rows = mysqli_num_rows($result);
if ($rows > 0){
    echo "<script>alert('User already exists');location.replace(\"../clientsignup.php\");</script>";
}else{
    $sql = "INSERT into clients (`name`,`email`,`passcode`,`created_at`,`token`)
    values('$name','$email','".md5($password)."','$date','$token')";
     if (mysqli_query($conn,$sql)) {
        echo "success";
        setcookie("user",$name, time() + (84600 * 60),"/");
        setcookie("code","client", time() + (84600 * 60),"/");
        $sql = "select Cid from clients where `name`='$name'";
        $result = mysqli_query($conn,$sql);
        $acc = mysqli_fetch_assoc($result);
        setcookie("id",$acc['Cid'], time() + (84600*60),"/");
        echo "<script>location.replace(\"../\");</script>";
    }else {
        echo "<script>laert(\"sorry but an expected error occur you have to sign up again :( \");location.replace(\"../clientsignup.php\");</script>";
        echo "error";
    } 
}
mysqli_close($conn);
?>