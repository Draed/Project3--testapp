<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>affichage des données</title>                       
    </head>
    <body>
        <form method="post" action="aftershow_data.php">
            Afficher les données pour l'application : 
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
            <input type="submit" name="submit" value="Afficher" />
        </form>
        <form>
            <input type="button" value="Retour au menu principal des données" onclick="history.go(-1)">
        </form>
    </body>    
</html>
