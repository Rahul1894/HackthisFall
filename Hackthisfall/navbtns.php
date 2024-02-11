<button onclick="location.href='communities.php'">Communities</button>
<?php
    if (!isset($_COOKIE['user'])){
?>
<button onclick="location.href='login.php'">Login</button>
<button onclick="location.href='signup.php'">Create Account</button>
<?php
    }else{
        if($_COOKIE['code']=="client"){
            echo "<button onclick=\"location.href='admin.php'\">Dashboard</button>";
        }
        ?>

        
        <button onclick="location.href='server/logout.php'">Log out</button>

        <?php
    }

?>
