<?php require('functions.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        Lancer un test :
        <form action="afterlaunch_test.php">
            Application : 
            <select name="application">
               <?php getAllApps(); ?>
            </select>
            Environnement : 
            <select name="environnement">
                 <?php getAllEnv(); ?>
           </select>            
            <input type="submit">
        </form>
        <form>
            <a href="tests.php"><input type="button" value="Retour au menu principal des tests"></a>
        </form>
    </body>
</html>
