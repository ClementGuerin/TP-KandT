<?php

/**
 * Show HTML <HEAD>
 * @param string $title, boolean $breadcrumb
 */

function head($title = "", $breadcrumb = true) { ?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title><?=$title?> - KandT</title>
        <link rel="stylesheet" href="../webroot/css/bootstrap.min.css">
        <link rel="icon" type="image/png" href="../webroot/img/favicon.png" />
    </head>
    <body class="pb-5">
        <nav class="navbar navbar-dark bg-dark mb-5">
            <a class="navbar-brand" href="index.php">KandT</a>
        </nav>
        <div class="container">
            <div class="row">
                <?php if($breadcrumb){ ?>
                <div class="col-md-12 my-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?= $title ?></li>
                        </ol>
                        <a href="index.php" class="btn btn-outline-dark btn-sm float-right">« Retour à la liste</a>
                    </nav>
                </div>
                <?php } ?>
                <div class="col-md-12 my-3 mb-5">
                    <h1><?=$title?></h1>
                </div>
<?php } 

/**
 * Show HTML footer
 * No param
 */
function footer(){ ?>
            </div>
        </div>
    </body>
</html>
<?php }
