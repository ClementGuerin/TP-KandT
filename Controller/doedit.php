<?php
require_once "../Controller/connexion.php";
$sql = "UPDATE 
  `lapin` 
SET 
  `name` = :name,
  `color` = :color,
  `img` = :img
WHERE 
  `id` = :id
;";
$stmt = $conn->prepare($sql);
$stmt->bindValue(':id', $_POST['id']);
$stmt->bindValue(':name', $_POST['name']);
$stmt->bindValue(':color', $_POST['color']);
$stmt->bindValue(':img', $_POST['img']);
$stmt->execute();
errorHandler($stmt);
header("Location: ../admin/index.php");
?>