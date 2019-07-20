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
    $query = "UPDATE subjects SET ";
    $query .= "menu_name = 'tera baap' , position = 420 , visible = 0 ";
    $query .= "WHERE id = 3"; 

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
        <title>databases update </title>
    </head>
    <body>


        
    </body>
</html>

<?php 
    mysqli_close($connect);
?>