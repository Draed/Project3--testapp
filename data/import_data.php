<?php require('functions.php') ?>

<?php include('../partials/_header.php') ?>
    <body>
        <form method="post" action="afterimport_data.php" enctype="multipart/form-data" >
            Fichier :<br><br>
            <input type="file" name="file"><br>
            <br>
            Ces jeux de données concèrnent l'application : 
            <select name="application">
                <?= getAllApps(); ?>
            </select>
            Et l'environnement :
            <select name="environnement">
                <?= getAllEnv(); ?>
            </select>
            <input type="submit" name="submit" value="Importer" />
        </form>
        <br>
        Templates : <br><br>
        <form method="post" target="_blank" action="download_template.php">
            Télécharger le template de fichier de jeux de données pour l'application : 
            <select name="application">
                <?php getAllApps(); ?>
            </select>
            <input type="submit" name="telecharger" value="télécharger" />
        </form>
        <br>
        <form>
            <input type="button" value="Retour au menu principal des données" onclick="history.go(-1)">
        </form>
    </body>
<?php include('../partials/_footer.php') ?>
