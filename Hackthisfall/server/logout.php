<?php

setcookie("user",'', time() + (0),"/");
setcookie("code","normal", time() + (0),"/");
setcookie("id",'', time() + (0),"/");

?>
<script>
    location.replace("../index.php");
</script>