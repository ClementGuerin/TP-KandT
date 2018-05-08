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
head("Supprimer un lapin (" . $row["name"] . ")", true);
?>
        <div class="col-md-12">
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Attention !</h4>
                <p>Vous vous apprêtez à supprimer <b><?=$row["name"]?></b>, êtes-vous certains de vouloir faire ça ? Il est encore temps de retourner à la liste. 😧</p>
            </div>
        </div>

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
       </div>
       
       <div class="col-md-12">
            <form action="../Controller/dodelete.php" class="float-right" method="post">
                <input type="text" name="id" value="<?=$row["id"]?>" style="display: none;">
                <a href="index.php" class="btn btn-light">Annuler</a>
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>           
       </div>



<?php footer();?>