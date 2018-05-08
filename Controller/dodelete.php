<?php
require_once "../Controller/connexion.php";
$sql = "DELETE FROM 
  `lapin` 
WHERE 
  `id` = :id
;";
$stmt = $conn->prepare($sql);
$stmt->bindValue(':id', $_POST['id']);
$stmt->execute();
errorHandler($stmt);
header("Location: ../admin/index.php");
?>




