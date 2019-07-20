<!doctype html>
<html lang="en">
    <head>
        <title>pointer</title>
    </head>
    <body>
       <?php

       $fu = "hammad";
       my_function($fu); 

       function my_function($name){
           echo "hello world {$name}";
       }

       $ans = sum(199,67);

       function sum($a1,$a2)
       {
           return $a1 + $a2;
       }

       echo "<br>".$ans;
       echo "<br>";

       function sum_sub_mul($a1,$a2)
       {
           return array($a1 + $a2,$a1-$a2,$a1*$a2);
       }

       list($sum,$sub,$mul) = sum_sub_mul(121,3434);


       echo "<br>".$sum;
       echo "<br>".$sub;
       echo "<br>".$mul;


       ?>
    </body>
</html>