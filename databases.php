<?php 
    $dbhost = "localhost";
    $dbuser = "ad";
    $dbpass = "123";
    $dbname = "app_droid";

    $connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

    if(mysqli_connect_errno()){
        die("Database connection failed ".mysqli_connect_errno()."(".mysqli_connect_errno().")");
    }
?>


<?php 
    $query = "SELECT * FROM subjects";
    $result = mysqli_query($connect,$query);
    if(!$result)
    {
        die("database query failed");
    }
?>


<!doctype html>
<html lang="en">
    <head>
        <title>databases</title>
    </head>
    <body>

        <?php
            while($row = mysqli_fetch_assoc($result))
            {
                echo $row["menu_name"]."<br>";
            }
        ?>
        
    </body>
</html>

<?php
    mysqli_free_result($result);
?>