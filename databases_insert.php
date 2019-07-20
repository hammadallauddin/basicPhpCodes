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
    $menu_name = $_POST["menu_name"];
    $visible = $_POST["visible"];
    $position = $_POST["position"];
    $menu_name = mysqli_real_escape_string($connect,$menu_name);//useful for escape sequence
    $query = "INSERT INTO subjects (";
    $query .= "menu_name ,position, visible) ";
    $query .= "VALUE ( '{$menu_name}' , {$position} , {$visible})";

    $result = mysqli_query($connect,$query);

    if($result)
    {
        echo "success";
    }
    else{
        die("error occured".mysqli_error($connect));
    }
   
?>


<!doctype html>
<html lang="en">
    <head>
        <title>databases insert</title>
    </head>
    <body>


        
    </body>
</html>

<?php 
    mysqli_close($connect);
?>