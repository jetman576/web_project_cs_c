<?php
require_once "db.php";
$scim=$GET['sorozatcim'];
echo "szerver oldalon megvan az adat:".$scim;
$sql="insert into sorozat values(null,'{$scim}')";
$stmt=$db->exec($sql);
echo $stmt;
?>