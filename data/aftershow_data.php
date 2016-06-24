<?php require('functions.php') ?>

<?php include('../partials/_header.php') ?>
    <body>
        <?= getDatasFromFolder(); ?>
        <form>
            <input type="button" value="Aficher d'autre test" onclick="history.go(-1)">
        </form>
    </body>
<?php include('../partials/_footer.php') ?>
