<?php 
include "ClientAuth.php";
include "server/conn.php";
$id = $_COOKIE['id'];
$sql = "SELECT * FROM posts where Cid='$id' order by Pid desc limit 15";
$result = mysqli_query($conn, $sql);
mysqli_close($conn);
?>

<!DOCTYPE html> 
<html lang="en"> 
  
<head> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible"
          content="IE=edge"> 
    <meta name="viewport" 
          content="width=device-width,  
                   initial-scale=1.0"> 
    <title>Admin | iForum</title> 
    <style>
<?php include 'admin.css';include 'navcss.php';?>
    </style>
</head> 
  
<body> 
    
    <!-- for header part -->
  <?php include 'navbar.php';?>
    <div class="main-container"> 
        <div class="navcontainer"> 
            <nav class="nav"> 
                <div class="nav-upper-options"> 
                  
  
                    <div class="option1 nav-option"> 
                        <img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/9.png"
                            class="nav-img" 
                            alt="articles"> 
                        <h3> Posts</h3> 
                    </div> 
  
                    <div class="nav-option option3" onclick="location.replace('newpost.php')"> 
                        <img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/5.png"
                            class="nav-img" 
                            alt="report"> 
                        <h3> Create new Posts</h3> 
                    </div> 
  

  
                    <div class="nav-option logout" onclick="location.replace('index.php')"> 
                        <img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/7.png"
                            class="nav-img" 
                            alt="logout"> 
                        <h3>Home</h3> 
                    </div> 
  
                </div> 
            </nav> 
        </div> 
        <div class="main"> 
  

  
          
  
            <div class="report-container"> 
                <div class="report-header"> 
                    <h1 class="recent-Articles">Recent Posts</h1> 
                    <button class="view">View All</button> 
                </div> 
  
                <div class="report-body"> 
                    <div class="report-topic-heading"> 
                        <h3 class="t-op">Post</h3> 
                        <h3 class="t-op">Created at</h3> 
                        <h3 class="t-op">opretion</h3> 
                    </div> 
  
                    <div class="items"> 

                    <?php
                        $n = mysqli_num_rows($result);
                        for ($i = 0; $i < $n; $i++) {
                            $row = mysqli_fetch_assoc($result);
                            ?>
                        <div class="item1"> 
                            <h3 class="t-op-nextlvl"><?php echo $row['name'];?></h3> 
                            <h3 class="t-op-nextlvl"><?php echo $row['created_at'];?></h3> 
                            <h3 class="t-op-nextlvl label-tag" style="padding:10px;cursor: pointer;" onclick="location.href='getreport.php?Pid=<?php echo $row['Pid'];?>'">Get Report</h3> 
                        </div> 
                            <?php
                        }

                    ?>
                       
  

  
                    </div> 
                </div> 
            </div> 
        </div> 
    </div> 
  
    <script >

let menuicn = document.querySelector(".menuicn"); 
let nav = document.querySelector(".navcontainer"); 
  
menuicn.addEventListener("click", () => { 
    nav.classList.toggle("navclose"); 
})
    </script> 
</body> 
</html>