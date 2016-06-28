<?php require('functions.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        Votre test est lancé, il s'affichera dans l'historique, dès qu'il sera achevé.
        <?php startTest(); ?>
    </body>
        <form>
            <a href="tests.php"><input type="button" value="Voir l'historique des tests"></a>
        </form>
        <form>
            <a href="launch_test.php"><input type="button" value="Lancer un nouveau test"></a>
        </form>
</html>