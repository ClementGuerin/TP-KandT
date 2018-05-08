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
head("NAME", true);
?>




<?php footer();?>