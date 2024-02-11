<?php
include "conn.php";
$pid = $_POST['pid'];
$uid = $_COOKIE['id'];
$chat = $_POST['chat'];
try{

    $sql = "INSERT into post_chat(`Pid`, `Uid`, `created_at`, `chat`,`reply`) values('$pid','$uid','$date','$chat','')";
    $result = mysqli_query($conn,$sql);
}catch(mysqli_sql_exception $e){
    echo "".$e->getMessage()."";
}
if ($result) {
    echo $sus;
}else{
    echo $fail;
}

mysqli_close($conn);
?>