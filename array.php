<!doctype html>
<html lang="en">
    <head>
        <title>array</title>
    </head>
    <body>
        <?php
        $numbers = array("hammad","allauddin",array("pakistan","zindabad"));
        $numbers[2][] = "aaaa"; 
        $numbers[2][] = "bbbbb"; 
        $numbers[] = "hammad again"; 

        print_r( $numbers);
        
        $new_one = [1,2,3,4];
        
        echo '<br>';
        print_r($new_one);
        ?>
        
    </body>
</html>