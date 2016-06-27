<?php require('functions.php') ?>
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
        Afficher la liste des tests en base pour l'application : 
        <form method="post" action="aftershow_test.php">            
            <select name="application">
               <?php getAllApps(); ?>
            </select>          
            <input type="submit">
        </form>
                <form>
            <input type="button" value="Retour au menu principal des tests" onclick="history.go(-1)">
        </form>
    </body>
</html>
