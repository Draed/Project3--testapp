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
        <?= getDatasFromFolder(); ?>
        <form>
            <input type="button" value="Aficher d'autre test" onclick="history.go(-1)">
        </form>
    </body>
</html>
