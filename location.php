<?php
    header("location: ".loc("array"));
    exit;
?>

<!doctype html>
<html lang="en">
    <head>
        <title>location</title>
    </head>
    <body>
        <?php
           function loc($loc){
              if ($loc == "array")
              return "array.php";
              else return "null.php";
          }
        ?>
    </body>
</html>