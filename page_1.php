<!doctype html>
<html lang="en">
    <head>
        <title>page 1</title>
    </head>
    <body>
        <?php $link_name = "page 2";
              $id = "& fuck ! this shi%34#$@%@%";
        ?>
       <a href="page_2.php?id=<?php echo rawurlencode($id)?>" ><?php echo $link_name ?></a>
        
    </body>
</html>