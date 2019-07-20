<!doctype html>
<html lang="en">
    <head>
        <title>form data</title>
    </head>
    <body>
        <?php
            if(isset($_POST['submit']))
            {
                print_r($_POST);
            }
            else 
            echo "f***";
        ?>
    </body>
</html>