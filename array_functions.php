<!doctype html>
<html lang="en">
    <head>
        <title>array functions</title>
    </head>
    <body>
        <?php
            $numbers = array(5,3,2,15,6,7);

            echo count($numbers);
            echo '<br>';
            
            echo max($numbers);
            echo '<br>';
            
            echo min($numbers);
            echo '<br>';
            
            sort($numbers);
            print_r($numbers);
            echo '<br>';
            
            rsort($numbers);
            print_r($numbers);
            echo '<br>';
            
            $astring = implode(" , ",$numbers);
            echo $astring;
            
            echo '<br>';
            print_r(explode(" , ",$astring));
            
            echo '<br>';
            echo  in_array(15,$numbers);

            echo '<br>';
            echo  in_array(19,$numbers);
            
        ?>
        
    </body>
</html>