<?php
require_once 'db.php';
$sql="SELECT
feltoltesek.vidcim,
feltoltesek.tipus,
sorozat.sorozatcim
FROM
`feltoltesek`
INNER JOIN sorozat ON feltoltesek.sorozatid = sorozat.id
ORDER BY
feltoltesek.sorozatid"
$stmt=$db->query($sql);
echo json_encode($stmt->fetchAll());

?>