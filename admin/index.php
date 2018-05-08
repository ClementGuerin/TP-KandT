<?php
require_once "../Controller/functions.php";
require_once "../Controller/connexion.php";
$sql = "SELECT 
  id, 
  name, 
  color,
  img
FROM
  lapin
;";
$stmt = $conn->prepare($sql);
$stmt->execute();
errorHandler($stmt);
head("Liste des petits lapins 🐰", false);
?>

    <div class="col-md-12 mb-4">
        <a href="add.php" class="btn btn-success float-right">+ Ajouter un lapin</a>
    </div>
    
    <div class="col-md-12">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Couleur</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while(false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)):?>
                <tr>
                    <th scope="row"><?=$row["id"]?></th>
                    <td><a href="show.php?id=<?=$row["id"]?>"><?=$row["name"]?></a></td>
                    <td><?=$row["color"]?></td>
                    <td><a href="show.php?id=<?=$row["id"]?>"><img src="<?=$row["img"]?>" alt="<?=$row["name"]?> picture" style="max-height: 40px;"></a></td>
                    <td>
                        <a href="edit.php?id=<?=$row["id"]?>" class="btn btn-primary btn-sm">Modifier</a>
                        <a href="delete.php?id=<?=$row["id"]?>" class="btn btn-danger btn-sm">Supprimer</a>
                    </td>
                </tr>
                <?php endwhile;?>
            </tbody>
        </table>
    </div>

<?php footer();?>