<!doctype html>
<html lang="en">
    <head>
        <title>continue</title>
    </head>
    <body>
        <?php
        $record = ["hammad"=>"software","aaaaa"=>"electrical","bbbbb"=>"software","ccccc"=>"electrical","ddddd"=>"software","eeeee"=>"electrical"];

        foreach($record as $a=>$b){
            if($b=="software"){
                continue;
            }
            echo "{$a} <br>";
        }
        ?>
    </body>
</html>
