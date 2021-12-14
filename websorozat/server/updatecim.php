<?php
require_once 'db.php';

$id=$_GET['id'];
$cim=$_GET['cim'];

$sql="update feltoltesek set vidcim='{$cim}' where id={$id}";
$stmt=$db->exec($sql);
if($stmt) {
    echo "sikeres módosítás";
}
else
    echo " nem sikerült az adatmódosítás!";


?>