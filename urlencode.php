<!doctype html>
<html lang="en">
    <head>
        <title>url encode</title>
    </head>
    <body>
        <?php 
            $url = "/hammad allauddin/pakistan";
            $query = "hammad allauddin is a pakistani";
            $link = rawurlencode($url)."?id=".urlencode($query);
            echo $link."<br>";

            $link = urlencode($url)."?id=".rawurlencode($query);
            echo $link;
         ?>
    </body>
</html>