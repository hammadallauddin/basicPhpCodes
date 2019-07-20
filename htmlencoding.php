<!doctype html>
<html lang="en">
    <head>
        <title>html encode</title>
    </head>
    <body>
        <?php 
            $html = "<click> & LEARN";
            ?>
        <a href="#"><?php echo htmlspecialchars($html) //it covert only four characters < > & " ?>   </a>

        <br>
         <?php 
            $html = "<click> & LEARN";
            ?>
        <a href="#"><?php echo htmlentities($html) // it convert all html characters?>   </a>
    </body>
</html>