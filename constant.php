<!doctype html>
<html lang="en">
    <head>
        <title>Variables</title>
    </head>
    <body>
        <?php
        $max_width  = 980;

        define("MAX_WIDTH",980);

        echo $max_width;
        echo '<br>';
        echo MAX_WIDTH;


      /*  echo '<br>';
        MAX_WIDTH=MAX_WIDTH+1;
        echo MAX_WIDTH;

        cant change or redefine the constant dont know why....$_COOKIE

        */

        echo "<br>";

        define("MY_CONSTANT",1000);
        echo MY_CONSTANT;

        ?>
    </body>
</html>