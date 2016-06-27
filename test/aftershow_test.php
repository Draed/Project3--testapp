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
        Les tests en base pour l'application <?php if (isset($_GET['application'])) {$application=htmlentities($_GET['application']);echo $application;} ?> sont :
        <?php getAllTestInUl();?>
        <form>
            <input type="button" value="Voir les tests pour une autre application" onclick="history.go(-1)">
        </form>
    </body>
</html>
