<?php
require_once "db.php";
$scim=$GET['sorozatcim'];
echo "szerver oldalon megvan az adat:".$scim;
$sql="INSERT INTO feltoltesek( vidcim, tipus, sorozatid) VALUES ('akarmi','passz','2')";
$stmt=$db->exec($sql);
echo $stmt;
?>