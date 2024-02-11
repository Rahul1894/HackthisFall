<?php
include "conn.php";
$name = $_POST['name'];
$type = $_POST['type'];
$sid = $_POST['sid'];
$ans = $_POST['ans'];

$sql = "INSERT into survey_ques(`name`, `type`, `ans`, `Sid`) values('$name','$type','$ans','$sid')";
$result = mysqli_query($conn,$sql);
if($result){
    echo $sus;
}else{
    echo $fail;
}
mysqli_close($conn);
?>