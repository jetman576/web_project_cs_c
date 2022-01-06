<?php
require_once 'db.php';
$sql="SELECT id,feltoltesek.vidcim,feltoltesek.tipus,sorozatid FROM feltoltesek ORDER BY feltoltesek.id";
$stmt=$db->query($sql);
echo json_encode($stmt->fetchAll());
?>