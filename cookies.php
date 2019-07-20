<?php
        $name = "test";
        $value = "hailo";
        $expire = time()+(60*60*24*7);

        setcookie($name,$value,$expire);
        //setcookie($name,null,time()-3600);
?>

<!doctype html>
<html lang="en">
    <head>
        <title>cookies</title>
    </head>
    <body>
       <?php 
       $cookie = $_COOKIE["test"];
       echo $cookie;
       ?>
    </body>
</html>