<?php
include "server/conn.php";
$pid = $_GET["Pid"];
$sql = "SELECT `Uid`,`msg`,`times` from post_discussion where Pid='$pid'";
$result = mysqli_query($conn,$sql);
$n = mysqli_num_rows($result);
$str = "";
for( $i = 0; $i < $n; $i++ ){
    $row = mysqli_fetch_assoc($result);
    $uid = $row['Uid'];
    $msg = $row['msg'];
    $time = $row['times'];
   
    $str = $str. "$time - a : $msg"."\n";
}
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php include "navcss.php"?>
    </style>
</head>
<body>
    <?php include 'navbar.php';?>
    <div id="content"></div>
    <script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>

  <script>
    let message = `<?php echo $str;?>`;
    $.ajax({
        url: 'http://localhost:5000/repo',
        type: 'POST',
        data: JSON.stringify({data:message,type:'lon'}),
        contentType: 'application/json',
        success: function(data) {
            // Handle the response
            console.log(data)
            // addMessage(data.response, 'AI Bot', new Date().toLocaleTimeString())
        }
    });
  </script>
</body>
</html>