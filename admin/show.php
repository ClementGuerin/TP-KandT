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
head("Details de " . $row["name"], true);
?>

<div class="col-md-12">
    <div class="row">
        <div class="col-md-4">
            <div class="card" style="width: 100%;">
                <img class="card-img-top" src="<?=$row["img"]?>" alt="<?=$row["name"]?> photo">
                <div class="card-body">
                    <h5 class="card-title">Photo de <?=$row["name"]?></h5>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <table class="table table-bordered">
                <tbody>
                   <tr>
                       <th scope="row">ID</th>
                       <td><?=$row["id"]?></td>
                   </tr>
                    <tr>
                        <th scope="row">Nom</th>
                        <td><?=$row["name"]?></td>
                    </tr>
                    <tr>
                        <th scope="row">Couleur</th>
                        <td><?=$row["color"]?></td>
                    </tr>
                    <tr>
                        <th scope="row">URL de l'image</th>
                        <td><a href="<?=$row["img"]?>"><?=$row["img"]?></a></td>
                    </tr>
                </tbody>
            </table>
            <div class="float-right">
                <a href="edit.php?id=<?=$row["id"]?>" class="btn btn-primary">Modifier</a>
                <a href="delete.php?id=<?=$row["id"]?>" class="btn btn-danger">Supprimer</a>
            </div>
        </div>
    </div>
</div>


<?php footer();?>