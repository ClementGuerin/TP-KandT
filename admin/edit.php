<?php
require_once "../Controller/functions.php";
require_once "../Controller/connexion.php";
$sql = "SELECT 
  `id`, 
  `name`, 
  `color`,
  `img`
FROM
  `lapin`
WHERE 
  `id` = :id
;";
$stmt = $conn->prepare($sql);
$stmt->bindValue(':id', $_GET['id']);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if ($row === false) {
    header("Location: index.php?error=nodatatodetails");
    exit;
}
head("Modifier un lapin (" . $row["name"] . ")", true);
?>


<div class="col-md-4">
    <div class="card" style="width: 100%;">
        <img class="card-img-top" src="<?=$row["img"]?>" alt="<?=$row["name"]?> photo">
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>ID :</b> <?=$row["id"]?></li>
                <li class="list-group-item"><b>Nom :</b> <?=$row["name"]?></li>
                <li class="list-group-item"><b>Couleur :</b> <?=$row["color"]?></li>
                <li class="list-group-item"><b>URL de l'image :</b> <a href="<?=$row["img"]?>"><?=$row["img"]?></a></li>
            </ul>
        </div>
    </div>
</div>

<div class="col-md-8">
    <form action="../Controller/doedit.php" method="post">
        <div class="form-group">
            <label for="name">Nom du lapin</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" placeholder="Entrez un nom" value="<?= $row["name"] ?>">
        </div>
        <div class="form-group">
            <label for="color">Couleur du lapin</label>
            <input type="text" class="form-control" id="color" name="color" aria-describedby="colorHelp" placeholder="Entrez une ou plusieurs couleurs" value="<?= $row["color"] ?>">
            <small id="colorHelp" class="form-text text-muted">Espacez les couleurs par une virgule.</small>
        </div>
        <div class="form-group">
            <label for="img">Photo du lapin</label>
            <input type="text" class="form-control" id="img" name="img" aria-describedby="imgHelp" placeholder="Entrez l'URL de la photo" value="<?= $row["img"] ?>">
            <small id="imgHelp" class="form-text text-muted">Merci d'entrer une URL qui pointe directement vers la photo.</small>
        </div>
        <div class="float-right">
            <a href="index.php" class="btn btn-light">Annuler</a>
            <input type="text" name="id" value="<?=$row["id"]?>" style="display: none;">
            <button type="submit" class="btn btn-success">Modifier ce lapin</button>            
        </div>
    </form>
</div>


<?php footer();?>