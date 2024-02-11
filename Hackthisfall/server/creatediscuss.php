<?php

include "conn.php";
$name = $_POST['msg'];
$pid = $_GET['Pid'];
$uid = $_COOKIE['id'];
$sql = "INSERT into post_discussion(`Pid`,`Uid`,`msg`,`times`) values('$pid','$uid','$name','$date, $time')";
if(mysqli_query($conn, $sql)) {
    // echo $sus;
    echo '<script>location.replace('."'../discuss-screen.php?Pid=$pid'".')</script>';
}else{
    echo $fail;
}
mysqli_close($conn);
?>