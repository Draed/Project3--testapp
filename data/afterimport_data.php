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
if (isset($_POST['file'])) {
    echo "fichier corretement transmis";
}
else {
    echo "il y a eu une erreur dans le transfert";
}
//var
$maxsize="2048";
$extensions_valides = array( 'csv' );
//test
if ($_FILES['icone']['error'] > 0) echo $erreur = "Erreur lors du transfert";
if ($_FILES['icone']['size'] > $maxsize) echo $erreur = "la taille du fichier est trop importante";
if ($_FILES['icone']['size'] = 0) echo $erreur = "le fichier est vide";

$extension_upload = strtolower(  substr(  strrchr($_FILES['icone']['name'], '.')  ,1)  );
if ( in_array($extension_upload,$extensions_valides) ) echo "Extension correcte";

$pathandname = "/".$application."/".$_FILES['icone'].";
$resultat = move_uploaded_file($_FILES['icone']['tmp_name'],$nom);
if ($resultat) echo "Transfert réussi";
?>
    </body>
</html>
