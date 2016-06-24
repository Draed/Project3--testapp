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
       <?php
       if (isset($_POST['application'])) {
        $application=htmlentities($_POST['application']);
        }
        //liste les fichiers dans les dossiers de donnees
        $nb_fichier = 0;
        echo '<ul>';
        if($dossier = opendir($application)) {
            while(false !== ($fichier = readdir($dossier))){
                if($fichier != '.' && $fichier != '..' && $fichier != 'index.php' && $fichier != '.DS_Store'){                    
                    $nb_fichier++;
                    $nomFichier = substr($fichier, 0, -4);
                    $path = $application."/".$fichier;
                    echo '<div id="data"><a href="'.$path.'"><li>' . $nomFichier . '</a></li></div>';
                }            
            }      
            echo '</ul>';
            echo 'Il y a <strong>' . $nb_fichier .'</strong> tests dans la base</div>';

            closedir($dossier);
        }
 
        else {
        echo 'Le dossier n\' a pas pu être ouvert';
        }
        ?>
        <form>
            <input type="button" value="Aficher d'autre test" onclick="history.go(-1)">
        </form>
    </body>
</html>
