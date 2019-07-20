<!doctype html>
<html lang="en">
    <head>
        <title>associative array</title>
    </head>
    <body>
        <?php
            $arrays_a = array("hammad"=>"han","allauddin"=>"g");

        //$arrays_a = ["hammad"=>"han","allauddin"=>"g"]; it can also be used

            echo $arrays_a["hammad"];
            echo '<br>';
            echo $arrays_a["allauddin"];

            $my_array = [1,2,3,4,5];

            echo '<br>';    

            foreach($my_array as $hammad){
                echo "<br> {$hammad} is number";
            }

            $aa = array("hammad"=>"han","allauddin"=>"g","pakistan"=>"zindabad");

            echo '<br>';    

            foreach($aa as $hammad=>$allauddin){
                echo "<br> {$hammad} is {$allauddin}";
            }
        ?>
        
    </body>
</html>