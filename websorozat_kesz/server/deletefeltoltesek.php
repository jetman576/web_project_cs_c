<?php
require_once 'db.php';
if(isset($_GET['id'])){
    $sql="delete from feltoltesek where id={$_GET['id']}";
    $stmt=$db->exec($sql);
    if($stmt)
        echo "sikeres törlés";
    else
        echo "sikertelen művelet !!!";
}
?>