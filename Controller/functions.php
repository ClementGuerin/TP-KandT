<?php

/**
 * Show HTML <HEAD>
 * @param string $title, boolean $retourliste
 */

function head($title = "", $retourliste = true) { ?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title><?=$title?></title>
        <link rel="stylesheet" href="../webroot/css/bootstrap.min.css">
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark mb-5">
            <a class="navbar-brand" href="index.php">KantT</a>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-3">
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
