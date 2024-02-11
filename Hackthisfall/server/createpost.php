<?php

include "conn.php";
$type = $_COOKIE['code'];
$cid = $_COOKIE['id'];
$name = $_POST['Pname'];
$desc= $_POST['desc'];
if ($type == 'normal') {
    echo "not allowed";
}else if ($type == "client") {
    $sql = "INSERT INTO posts(`name`,`Cid`,`description`,`created_at`) values('$name','$cid','$desc','$date')";
    if ($result = mysqli_query($conn, $sql)) {
        ?><script>location.replace("../admin.php")</script><?php
    }else{
        echo $fail;
    }
}

mysqli_close($conn);
?>