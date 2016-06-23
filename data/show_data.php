<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Recettes</title>
        <link rel="stylesheet" href="style.css"/>                       
    </head>
    <body>
        <form>
            Afficher les données pour l'application : 
            <select name="Application">
              <option value="1">clementine</option>
              //foreach dossier in data echo dossier
            </select>
            <br>
            <input type="submit" name="submit" value="Importer" />
        </form>
        <?php
        //liste les fichiers dans le dossier de donnees
        $nb_fichier = 0;
        echo '<ul>';
        if($dossier = opendir($application)) {
            while(false !== ($fichier = readdir($dossier))){
                if($fichier != '.' && $fichier != '..' && $fichier != 'index.php'){                    
                    $nb_fichier++; // On incrémente le compteur de 1
                    $nomFichier = substr($fichier, 0, -4);
                    echo '<div id="recette"><a href="recette/'.$fichier.'"><li>' . $nomFichier . '</a></li></div>';
                }            
            }      
            echo '</ul><br/><br/><div id="footer">';
            echo 'Il y a <strong>' . $nb_fichier .'</strong> recette(s) dans la bibliothèque</div>';

            closedir($dossier);
 
        }
 
        else
        echo 'Le dossier n\' a pas pu être ouvert';
        
        ?>
        
    </body>    
</html>
