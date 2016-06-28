<?php

/**
* Get all the files from current folder. 
* For data or test
* @return void.
*/
function getAllApps(){
	$dir1 = scandir('.');

    foreach($dir1 as $element) {
	    if (is_dir($element) && $element != '.' && $element != '..') {
	        echo '<option value="'.$element .'">'.$element .'</option>';
	    }
    }
}


function getAllEnv() {
    $Env= array("integration","integration2","preprod","production");
    foreach($Env as $element) {
        echo '<option value="'.$element.'">'.$element.'</option>';
    }
}

/**
* Get all the files of a selected application's folder.
* Only for data folder 
* @return $html, HTML.
*/
function getDatasFromFolder() {
	if (isset($_POST['application'])) {
        $application=htmlentities($_POST['application']);
    }
    //liste les fichiers dans les dossiers de donnees
    $nb_fichier = 0;
    $html = '';
    $html .= '<ul>';
    if($dossier = opendir($application)) {
        while(false !== ($fichier = readdir($dossier))){
            if($fichier != '.' && $fichier != '..' && $fichier != 'index.php' && $fichier != '.DS_Store' && $fichier != 'template.csv'){                    
                $nb_fichier++;
                $nomFichier = substr($fichier, 0, -4);
                $path = $application."/".$fichier;
                $html .= '<div id="data"><a href="'.$path.'"><li>' . $nomFichier . '</a></li></div>';
            }            
        }      
        $html .= '</ul>';
        $html .= 'Il y a <strong>' . $nb_fichier .'</strong> jeux de tests dans la base pour cette application</div>';
        closedir($dossier);
    } else {
   		$html .= 'Le dossier n\' a pas pu être ouvert';
	}
    return $html;
}

function listeNombrefichier($application) {
    $nb_fichier = 0;
    if($dossier = opendir($application)) {
        while(false !== ($fichier = readdir($dossier))){
            if($fichier != '.' && $fichier != '..' && $fichier != 'index.php' && $fichier != '.DS_Store' && $fichier != 'template.csv'){                    
                $nb_fichier++;
            }            
        }
        closedir($dossier); 
        return $nb_fichier+1;        
    } else {
        // return false;
    }
}  

function importData() {
    //get variables
    if (isset($_POST['application'])) {
        $application=htmlentities($_POST['application']);
        $nombreFichier = listeNombrefichier($application);
    }
    if (isset($_POST['environnement'])) {
        $environnement=htmlentities($_POST['environnement']);
    }

    $maxsize="4096";
    $extensions_valides = array( 'xml' );
    $tmp_file = $_FILES['file']['tmp_name'];
    $name_file = $environnement.".dataset.".$nombreFichier.".xml";
    $content_dir = $application;

    //test
    if( !is_uploaded_file($tmp_file) ) exit("Le fichier est introuvable");
    if ($_FILES['file']['error'] > 0) echo $erreur = "Erreur lors du transfert";
    if ($_FILES['file']['size'] > $maxsize) echo $erreur = "la taille du fichier est trop importante";
    if ($_FILES['file']['size'] = 0) echo $erreur = "le fichier est vide";

    $extension_upload = strtolower(  substr(  strrchr($_FILES['file']['name'], '.')  ,1)  );
    if ( in_array($extension_upload,$extensions_valides) );

    if( !move_uploaded_file($tmp_file, $content_dir."/".$name_file) ) echo("Impossible de copier".$name_file." dans ".$content_dir."<br>");
    else echo "le fichier ".$name_file." a bien été copié vers le dossier ".$content_dir."<br>"; 
}