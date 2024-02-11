<?php
include "conn.php";
$fname = $_POST['fname'];
$lname = $_POST["lname"];
$email = $_POST['email'];
$uid = $_POST['uname'];
$password = $_POST['password'];
date_default_timezone_set('Asia/Kolkata');
$date = date('d/m/y');
$token = bin2hex(random_bytes(64));
$sql = "SELECT * FROM users WHERE Uname='$uid' or email='$email'";
$result = mysqli_query($conn,$sql);
$rows = mysqli_num_rows($result);
if ($rows > 0){
    echo "<script>alert('User already exists');location.replace(\"index.php\");</script>";
}else{
    $sql = "INSERT into users (`Fname`,`Lname`,`email`,`Uname`,`passcode`,`created_at`,`token`)
    values('$fname','$lname','$email','$uid','".md5($password)."','$date','$token')";
     if (mysqli_query($conn,$sql)) {
        echo "success";
        setcookie("user",$uid, time() + (84600 * 60),"/");
        setcookie("code","normal", time() + (84600 * 60),"/");
        $sql = "select Uid from users where `name`='$name'";
        $result = mysqli_query($conn,$sql);
        $acc = mysqli_fetch_assoc($result);
        setcookie("id",$acc['Uid'], time() + (84600*60),"/");
        echo "<script>location.replace(\"../index.php\");</script>";
    }else {
        echo "<script>laert(\"sorry but an expected error occur you have to sign up again :( \");location.replace(\"../index.php\");</script>";
        echo "error";
    } 
}
mysqli_close($conn);
?>