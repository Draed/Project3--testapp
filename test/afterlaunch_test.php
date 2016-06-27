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
        <form action="start_test.php">
            <input  name="application" type="hidden" id="hiddenField" value="<?php if (isset($_GET['application'])) {$application=$_GET['application'];echo $application;}?>" />
            <input  name="environnement" type="hidden" id="hiddenField" value="<?php if (isset($_GET['environnement'])) {$environnement=$_GET['environnement'];echo $environnement;}?>" />
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
        <form>
            <input type="button" value="Changer d'application ou d'environnement " onclick="history.go(-1)">
        </form>
    </body>
</html>
