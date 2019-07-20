<!doctype html>
<html lang="en">
    <head>
        <title>strings function</title>
    </head>
    <body>
        <?php
            $first = "HaMMAD allauddin";
            $second = "pakistan ZiNDABAD";
            $third = $first;
            $third .= " ";
            $third .= $second;
            echo $third;

            echo '<br>';
            //lower case
            echo strtolower($third);

            echo '<br>';
            //upper case
            echo strtoupper($third);

            echo '<br>';
            //first character upper 
            echo ucfirst($third);

            echo '<br>';
            //first character of each word upper 
            echo ucwords($third);

            echo '<br>';
            //length of string 
            echo strlen($third);

            echo '<br>';
            //string within a string 
            echo strstr($third,"allauddin");

            echo '<br>';
            //replace 
            echo str_replace("HaMMAD","muhammad",$third);

            echo '<br>';
            //trim whitespases from begining and end 
            echo "A". trim(" B C D ")." E";

            echo '<br>';
            //repeat 
            echo str_repeat($third,2);

            echo '<br>';
            //substring 
            echo substr($third,2,10);

            echo '<br>';
            //word position 
            echo strpos($third,"allauddin");

            echo '<br>';
            //start from given character 
            echo strchr($third,"d");
        ?>
        
    </body>
</html>