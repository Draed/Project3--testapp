<?php
if (isset($_POST['application'])) {
    $application=htmlentities($_POST['application']);
    $file = 'template.csv';
    $template = $application ."/".$file;
    if (file_exists($template)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename='.$template);
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Content-Length: ' . filesize($template));
        header('content-type: application/octet-stream');
        header('Pragma: no-cache');
        header('Expires: 0');
        readfile($template);
        exit;
        }
    else echo "il n'y a pas de template pour cette application";
    }
    ?>
