<?php
require_once "../Controller/connexion.php";
$sql = "INSERT INTO 
  `lapin` 
  (`id`, `name`, `color`, `img`)
VALUES
  (NULL, :name, :color, :img)
;";
$stmt = $conn->prepare($sql);
$stmt->bindValue(':name', $_POST['name']);
$stmt->bindValue(':color', $_POST['color']);
$stmt->bindValue(':img', $_POST['img']);
$stmt->execute();
errorHandler($stmt);
header("Location: ../admin/index.php");
?>