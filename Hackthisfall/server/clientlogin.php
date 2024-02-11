<?php
include "conn.php";
$email = $_POST['email'];
$password = $_POST['password'];
date_default_timezone_set('Asia/Kolkata');
$date = date('d/m/y');
$token = bin2hex(random_bytes(64));
$sql = "SELECT * FROM clients WHERE (name='$email' or email='$email') and passcode= '".md5($password)."'";
$result = mysqli_query($conn,$sql);
$rows = mysqli_num_rows($result);
if ($rows > 0){
    setcookie("code","client", time() + (84600 * 60),"/");
    $acc = mysqli_fetch_assoc($result);
    setcookie("id",$acc['Cid'], time() + (84600*60),"/");
    setcookie("user",$acc['name'], time() + (84600 * 60),"/");
        echo $acc['Cid'];
        echo '<script>location.replace("../")</script>';
    }else{
        echo '<script>alert("Invalid");location.replace("../clientlogin.php")</script>';
   
    echo "error";
    
}
mysqli_close($conn);
?>