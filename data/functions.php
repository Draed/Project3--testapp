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