<?php
    session_start();
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Sessions</title>
    </head>
    <body>
        <?php
            $_SESSION["name"] = "hammad";

            echo $_SESSION["name"];
        ?>
    </body>
</html>