<?php 
include "server/conn.php";
include "auth.php";
include "noclientauth.php";
$pid = $_GET['Pid'];
$sql = "SELECT * from posts where `Pid`='$pid'";
$result = mysqli_query($conn,$sql);
$chatname = mysqli_fetch_array($result);
$chatname = $chatname['name'];
$sql = "SELECT * from post_discussion left join users on post_discussion.Uid = users.Uid where Pid='$pid'";
$result = mysqli_query($conn,$sql);
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Discuss Section</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        * {
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

a {
  color: #03658c;
  text-decoration: none;
}

ul {
 list-style-type: none;
}

body {
 font-family: 'Roboto', Arial, Helvetica, Sans-serif, Verdana;
 background: #dee1e3;
}

.comments-container {
 margin: 15px auto 15px;
 width: clamp(500px,90vw,800px);
 height: 66vh;
 overflow: auto;
}

.comments-container h1 {
 font-size: 36px;
 color: #283035;
 font-weight: 400;
}

.comments-container h1 a {
 font-size: 18px;
 font-weight: 700;
}

.comments-list {
 margin-top: 30px;
 position: relative;
}



.comments-list li {
 margin-bottom: 15px;
 display: block;
 position: relative;
}


.comments-list .comment-box {
 width: 680px;
 position: relative;
 -webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.15);
 -moz-box-shadow: 0 1px 1px rgba(0,0,0,0.15);
 box-shadow: 0 1px 1px rgba(0,0,0,0.15);
}

.comments-list .comment-box:before, .comments-list .comment-box:after {
 content: '';
 height: 0;
 width: 0;
 position: absolute;
 display: block;
 border-width: 10px 12px 10px 0;
 border-style: solid;
 border-color: transparent #FCFCFC;
 top: 8px;
 left: -11px;
}

.comments-list .comment-box:before {
 border-width: 11px 13px 11px 0;
 border-color: transparent rgba(0,0,0,0.05);
 left: -12px;
}

.reply-list .comment-box {
 width: 610px;
}
.comment-box .comment-head {
 background: #FCFCFC;
 padding: 10px 12px;
 border-bottom: 1px solid #E5E5E5;
 overflow: hidden;
 -webkit-border-radius: 4px 4px 0 0;
 -moz-border-radius: 4px 4px 0 0;
 border-radius: 4px 4px 0 0;
}

.comment-box .comment-head i {
 float: right;
 margin-left: 14px;
 position: relative;
 top: 2px;
 color: #A6A6A6;
 cursor: pointer;
 -webkit-transition: color 0.3s ease;
 -o-transition: color 0.3s ease;
 transition: color 0.3s ease;
}

.comment-box .comment-head i:hover {
 color: #03658c;
}

.comment-box .comment-name {
 color: #283035;
 font-size: 14px;
 font-weight: 700;
 float: left;
 margin-right: 10px;
}

.comment-box .comment-name a {
 color: #283035;
}

.comment-box .comment-head span {
 float: left;
 color: #999;
 font-size: 13px;
 position: relative;
 top: 1px;
}

.comment-box .comment-content {
 background: #FFF;
 padding: 12px;
 font-size: 15px;
 color: #595959;
 -webkit-border-radius: 0 0 4px 4px;
 -moz-border-radius: 0 0 4px 4px;
 border-radius: 0 0 4px 4px;
}

.comment-box .comment-name.by-author, .comment-box .comment-name.by-author a {color: #03658c;}
.comment-box .comment-name.by-author:after {
 content: 'autor';
 background: #03658c;
 color: #FFF;
 font-size: 12px;
 padding: 3px 5px;
 font-weight: 700;
 margin-left: 10px;
 -webkit-border-radius: 3px;
 -moz-border-radius: 3px;
 border-radius: 3px;
}

/** =====================
* Responsive
========================*/
@media only screen and (max-width: 766px) {
 .comments-container {
   width: 480px;
 }

 .comments-list .comment-box {
   width: 390px;
 }

 .reply-list .comment-box {
   width: 320px;
 }
}
.d-flex{
    display: flex;
    flex-direction: row;
}<?php include "navcss.php";?>

.input-box,.nav-bar{
    display: flex;
    margin: 15px auto 15px;
    width: clamp(500px,90vw,800px);
}
.input-box input:first-child{
    width: 80%;
    border-top-left-radius: 22px;
    border-bottom-left-radius: 22px;
    padding: 15px;
    /* font-size: 1rem; */
}

.input-box button{
    width: 20%;
    height: 50px;
    border-top-right-radius: 22px;
    border-bottom-right-radius: 22px;
    border-left: none;
    padding: 15px;
    font-size: 22px;
    line-height: 100%;
    cursor: pointer;
    /* font-size: 1.1rem; */
}
    </style>
  </head>
  <body>
    <?php include "navbar.php";?>
    <div class="nav-bar d-flex">
        <i class="fa fa-arrow-left fa-2x" style="margin:2px 20px" onclick="goBack()"></i>
    <h1>Discussion [<?php echo $chatname;?>]</h1>
    </div>
	<div class="comments-container">


		<ul id="comments-list" class="comments-list">
            <?php 
              $n = mysqli_num_rows($result);
              for ($i=0; $i < $n; $i++) { 
                $row = mysqli_fetch_assoc($result);
                ?>
                <li>
                    <div class="comment-main-level">
                        <div class="comment-box">
                            <div class="comment-head">
                                <h6 class="comment-name"><a href="#"><?php echo $row['Uname'];?></a></h6>
                                <span><?php echo $row['times'];?></span>
                            </div>
                            <div class="comment-content">
                                <?php echo $row['msg'];?>
                            </div>
                        </div>
                    </div>			
                </li>
                <?php
              }
            ?>


		</ul>
	</div>
    <form action="server/creatediscuss.php?Pid=<?php echo $pid;?>" method="post">
        <div class="input-box">
            <input type="text" id="text" name="msg">
            <button type="submit" > <i class="fa-regular fa-paper-plane"></i>  Send</button>
            
        </div>
    </form>
    <script>
        document.getElementById("text").focus();
      function goBack() {
        window.history.back();
      }
    </script>
  </body>
</html>