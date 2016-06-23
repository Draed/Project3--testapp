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
        <form method="post" action="reception.php" enctype="multipart/form-data">
            Fichier:<br>
            <input type="text" name="file"><br>
            <input type="hidden" name="MAX_FILE_SIZE" value="12345" />
            <br>
            Application : 
            <select name="Application">
              <option value="1">1</option>
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
