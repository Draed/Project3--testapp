<?php
/**
* Get all the folder from current path. 
* For data or test
* @return void.
*/
function getAllApps(){
	$dir1 = scandir('.');

    foreach($dir1 as $element) {
	    if (is_dir($element) && $element != '.' && $element != '..' && $element != 'scripts') {
	        echo '<option value="'.$element .'">'.$element .'</option>';
	    }
    }
}

Function getAllEnv() {
    $Env= array("integration","integration2","preprod","production");
    foreach($Env as $element) {
        echo '<option value="'.$element.'">'.$element.'</option>';
    }
}

function getAllTest() {
	if (isset($_GET['application'])) {
        $application=htmlentities($_GET['application']);
        $path = $application;
    }
    //liste les fichiers dans les dossiers de donnees
    $nb_fichier = 0;
    if($dossier = opendir($path)) {
        while(false !== ($fichier = readdir($dossier))){
            if($fichier != '.' && $fichier != '..' && $fichier != 'index.php' && $fichier != '.DS_Store' && $fichier != 'template.csv'){                    
                $nb_fichier++;
                $nomFichier = substr($fichier, 0, -4);
                echo '<option value="'. $nomFichier .'">'. $nomFichier .'</option>';
            }            
        }      
        closedir($dossier);
    } else {
   		echo'<option value="erreur">erreur</option>';
	}
}

/**
* Get all the files of a selected application's folder.
* Only for data folder 
* @return $html, HTML.
*/
function getAllDatas() {
        if (isset($_GET['application'])) {
        $application=htmlentities($_GET['application']);
        $path = "../data/".$application;
    }
    //liste les fichiers dans les dossiers de donnees
    $nb_fichier = 0;
    if($dossier = opendir($path)) {
        while(false !== ($fichier = readdir($dossier))){
            if($fichier != '.' && $fichier != '..' && $fichier != 'index.php' && $fichier != '.DS_Store' && $fichier != 'template.csv'){                    
                $nb_fichier++;
                $nomFichier = substr($fichier, 0, -4);
                echo '<option value="'. $nomFichier .'">'. $nomFichier .'</option>';
            }            
        }      
        closedir($dossier);
    } else {
   		echo'<option value="erreur">erreur</option>';
	}
}

