<?php
if($_COOKIE['code']=="client"){
    ?>
    <script >
        alert("only user can go here")
        location.replace("login.php");
    </Script>
    <?php
}

?>