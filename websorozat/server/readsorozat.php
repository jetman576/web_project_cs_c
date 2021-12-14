<?php
require_once 'db.php';

$sql="SELECT * FROM sorozat order by id";

$stmt=$db->query($sql);
echo json_encode($stmt->fetchAll());

?>