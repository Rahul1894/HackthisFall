<?php
include "conn.php";
$qid = $_POST['qid'];
$uid = $_POST['uid'];
$ans = $_POST['ans'];
try{

    $sql = "INSERT into `survey_ans`(`Qid`, `ans`, `Uid`) values('$qid','$ans','$uid')";
    $result = mysqli_query($conn,$sql);
}catch(mysqli_sql_exception $e){
    echo "".$e->getMessage()."";
}
if($result){
    echo $sus;
}else{
    echo $fail;
}
mysqli_close($conn);
?>