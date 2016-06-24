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
            Fichier:<br>
            <input type="file" name="file"><br>
            <br>
            Ces jeux de sdonnées concèrnent l'application : 
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
            <br>
            <input type="submit" name="submit" value="Importer" />
        </form>
        <br>
        Templates : <br>
        Télécharger le template de fichier de test
        <form>
            <input type="submit" name="submit" value="télécharger" />
        </form>
        <form>
            <input type="button" value="Retour au menu principal des données" onclick="history.go(-1)">
        </form>
    </body>
</html>
