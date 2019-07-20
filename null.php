<!doctype html>
<html lang="en">
    <head>
        <title>null</title>
    </head>
    <body>
        <?php
        $var1=null;
        $var2="";

        echo is_null($var1);
        echo "<br>";
        echo is_null($var2);
        echo "<br>";
        echo is_null($var3);
        echo "<br>";

        echo isset($var1);
        echo "<br>";
        echo isset($var2);
        echo "<br>";
        echo isset($var3);
        echo "<br>";

        echo empty($var1);
        echo "<br>";
        echo empty($var2);
        echo "<br>";
        echo empty("0");
        echo "<br>";

        ?>
        
    </body>
</html>