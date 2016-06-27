<?php require('functions.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
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
        <?php
        // if linux 
            //shell_exec("/home/user/bin/do_build.sh");
        //if windows
            //shell_exec("C:\\do_build.bat");
        ?>
    </body>
</html>
