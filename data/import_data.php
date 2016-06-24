<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Import de jeux de données</title>
    </head>
    <body>
        <form method="post" action="afterimport_data.php" enctype="multipart/form-data" >
            Fichier :<br><br>
            <input type="file" name="file"><br>
            <br>
            Ces jeux de données concèrnent l'application : 
            <select name="application">
            <?php 
            $dir1 = scandir('.');
              foreach($dir1 as $element) {
                if (is_dir($element) && $element != '.' && $element != '..') {
                    echo '<option value="'.$element .'">'.$element .'</option>';
                }
              }
              ?>
            </select>
            <input type="submit" name="submit" value="Importer" />
        </form>
        <br>
        Templates : <br><br>
        <form method="post" target="_blank" action="download_template.php">
            Télécharger le template de fichier de test pour l'application : 
            <select name="application">
            <?php 
            $dir1 = scandir('.');
              foreach($dir1 as $element) {
                if (is_dir($element) && $element != '.' && $element != '..') {
                    echo '<option value="'.$element .'">'.$element .'</option>';
                }
              }
              ?>
            </select>
            <input type="submit" name="telecharger" value="télécharger" />
        </form>
        <br>
        <form>
            <input type="button" value="Retour au menu principal des données" onclick="history.go(-1)">
        </form>
    </body>
</html>
