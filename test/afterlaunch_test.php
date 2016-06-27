<?php require('functions.php') ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>test</title>
    </head>
    <body>
        Vous allez lancer un test pour : 
        <ul>
            <li>l'application : <?=$_GET['application']?></li>
            <li>l'environnement : <?= $_GET['environnement']?></li>
        </ul>
        Choix des paramètres du test : <br><br>
        <form>
            Données :
            <select name="Donnees">
                <?php if (isset($_GET['application'])) getAllDatas(); ?>
            </select>   
            Test : 
            <select name="Test">
                <?php if (isset($_GET['application'])) getAllTest(); ?>
            </select>
            <input type="submit">
        </form>
    </body>
</html>
