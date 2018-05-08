<?php
require_once "../Controller/functions.php";
require_once "../Controller/connexion.php";
head("Ajouter un lapin", true);
?>


<div class="col-md-12">
    <form action="../Controller/doadd.php" method="post">
        <div class="form-group">
            <label for="name">Nom du lapin</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" placeholder="Entrez un nom">
        </div>
        <div class="form-group">
            <label for="color">Couleur du lapin</label>
            <input type="text" class="form-control" id="color" name="color" aria-describedby="colorHelp" placeholder="Entrez une ou plusieurs couleurs">
            <small id="colorHelp" class="form-text text-muted">Espacez les couleurs par une virgule.</small>
        </div>
        <div class="form-group">
            <label for="img">Photo du lapin</label>
            <input type="text" class="form-control" id="img" name="img" aria-describedby="imgHelp" placeholder="Entrez l'URL de la photo">
            <small id="imgHelp" class="form-text text-muted">Merci d'entrer une URL qui pointe directement vers la photo.</small>
        </div>
        <div class="float-right">
            <a href="index.php" class="btn btn-light">Annuler</a>
            <button type="submit" class="btn btn-success">Ajouter ce lapin</button>            
        </div>
    </form>
</div>


<?php footer();?>