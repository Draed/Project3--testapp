<?php require('functions.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php echo $_GET['application'] ?>
        <?php echo $_GET['environnement'] ?>
        <?php echo $_GET['Donnees'] ?>
        <?php echo $_GET['Test'] ?>
        
        <?php
        startTest();
        ?>
    </body>
</html>