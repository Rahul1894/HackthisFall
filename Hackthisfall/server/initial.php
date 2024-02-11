<?php
include "conn.php";
$name = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE Uname='$name' and passcode='".md5($password)."'";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) == 0) {
    echo "no found";

    echo '<script>alert("invalid try again");location.replace("../login.php");</script>';
} else {
    echo "yes";
    setcookie("user",$name, time() + (84600 * 60),"/");
        setcookie("code","normal", time() + (84600 * 60),"/");
        $acc = mysqli_fetch_assoc($result);
        setcookie("id",$acc['Uid'], time() + (84600*60),"/");
        echo '<script>location.replace("../index.php");</script>';
}
mysqli_close($conn);
?>