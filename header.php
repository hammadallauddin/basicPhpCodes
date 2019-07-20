<?php
    header("HTTP 1.1/ 404 Not Found");
    header("X-Powered-By: not your business");
?>

<!doctype html>
<html lang="en">
    <head>
        <title>header </title>
    </head>
    <body>
        <?php
           // header('HTTP 1.1/ 404 Not Found'); can't work here'
           print_r(headers_list());
        ?>
    </body>
</html>