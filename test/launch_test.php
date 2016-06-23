<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <form action="action_page.php">
            Application : 
            <select name="Application">
              <option value="1">1</option>
            </select>
            Environnement : 
            <select name="Environnement">
                <option value="1">1</option>
            </select>
            Test : 
            <select name="Test">
                <option value="1">1</option>
            </select>
            Données : 
            <select name="Données">
                <option value="1">1</option>
            </select>
            <br><br>
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
