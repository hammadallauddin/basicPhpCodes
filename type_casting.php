<!doctype html>
<html lang="en">
    <head>
        <title>type casting</title>
    </head>
    <body>
        <?php
            $type = "2";
            echo gettype($type);
            $type1 = (int)$type;
            echo '<br>';
            echo gettype($type1);

            settype($type1,"float");
            echo '<br>';
            echo gettype($type1);
        ?>
        
    </body>
</html>