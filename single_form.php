<?php
    if(isset($_POST["submit"])){
        $username = $_POST["username"];
        $message = "Logging in {$username}";
    }
    else{
        $username = "";
        $message = "Please login";
    }
?>

<!doctype html>
<html lang="en">
    <head>
        <title>single form</title>
    </head>
    <body>

        <?php echo $message?>
        <br>
       <form method="post" action="single_form.php"><br><br>
            name    : <input type="text" name="username" value="<?php echo $username?>"><br><br>
            Password: <input type="password" name="password" value=""><br><br>
            <input type="submit" name="submit" value="submit">
        </form>
        <br>
        <?php echo $message?>
    </body>
</html>