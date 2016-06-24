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
//var
$maxsize="4096";
$extensions_valides = array( 'csv' );
$tmp_file = $_FILES['file']['tmp_name'];
$name_file = $_FILES['file']['name'];
$application=htmlentities($_POST['application']);
$content_dir = $application;

//test
if( !is_uploaded_file($tmp_file) ) exit("Le fichier est introuvable");
if ($_FILES['file']['error'] > 0) echo $erreur = "Erreur lors du transfert";
if ($_FILES['file']['size'] > $maxsize) echo $erreur = "la taille du fichier est trop importante";
if ($_FILES['file']['size'] = 0) echo $erreur = "le fichier est vide";

$extension_upload = strtolower(  substr(  strrchr($_FILES['file']['name'], '.')  ,1)  );
if ( in_array($extension_upload,$extensions_valides) );

if( !move_uploaded_file($tmp_file, $content_dir."/".$name_file) ) echo("Impossible de copier".$name_file." dans ".$content_dir."<br>");
else echo "le fichier ".$name_file." a bien été copié vers ".$content_dir."<br>";    
?>
    <form>
        <input type="button" value="Retour au menu précédent" onclick="history.go(-1)">
    </form>
    </body>
</html>
