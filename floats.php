<!doctype html>
<html lang="en">
    <head>
        <title>floats</title>
    </head>
    <body>
        <?php
        echo $v1 = 3.15;
        echo '<br>';
        echo floor(4.4);
        echo '<br>';
        echo ceil(4.4);
        echo '<br>';
        echo round(4.4);

        $integer = 10;
        $float = 10.1;

        echo '<br>';
        echo is_integer($integer);

        echo '<br>';
        echo is_integer($float);

        echo '<br>';
        echo is_float($integer);

        echo '<br>';
        echo is_float($float);

        echo '<br>';
        echo is_numeric($integer);
        
        echo '<br>';
        echo is_numeric($float);

        ?>
        
    </body>
</html>