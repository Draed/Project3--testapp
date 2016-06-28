<?php require('functions.php') ?>
<?php include('../partials/_header.php') ?>
    <body>
<?php
importData();   
?>
    <form>
        <input type="button" value="Retour au menu précédent" onclick="history.go(-1)">
    </form>
    </body>
<?php include('../partials/_footer.php') ?>
