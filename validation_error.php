<!doctype html>
<html lang="en">
    <head>
        <title>validation error</title>
    </head>
    <body>
        <?php 
            $erros = array();
            //presence
            $value = "";
            if( !isset($value) || empty($value))
            {
                $erros['value'] = "value can't be blank";
            }

            //string length
            $value ="";
            $min = 4;
            $max = 6;
            if( strlen($value) <$min || strlen($value)>$max)
            {
                echo 'validation error <br>';
            }

            //type
            $value ="";
            if(!is_string($value))
            {
                echo 'validation error <br>';
            }

            //incluseion in array
            $value ="12";
            $set = array("1","2","4","6");
            if(!in_array($value,$set))
            {
                echo 'validation error <br>';
            }

            //uniqueness
            /*
            cant be done without database
            */

            //format
            $email = "hammadlaauddingmail.com";
            if(preg_match('/@/',$email)){
                echo "match found";
            }
            else{
                echo "match not found <br>";
            }

            print_r($erros);

        ?>
    </body>
</html>