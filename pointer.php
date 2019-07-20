<!doctype html>
<html lang="en">
    <head>
        <title>pointer</title>
    </head>
    <body>
       <?php
        $arrays = array(6,5,4,3,2,1);
        echo current($arrays);

        next($arrays);
        next($arrays);
        
        echo "<br>";
        echo current($arrays);

        prev($arrays);
        echo "<br>";
        echo current($arrays);

        end($arrays);
        echo "<br>";
        echo current($arrays);

        reset($arrays);
        echo "<br>";
        echo current($arrays);


        while($arrays = current($arrays))
        {
            echo $arrays." <br>";
            next($arrays);
        }
       ?>
    </body>
</html>