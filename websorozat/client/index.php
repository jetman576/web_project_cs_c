<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Menüvezérelt PHP</title>
</head>
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <ul class="navbar-nav">
                <li class="nav-item"><a  href="index.php" class="nav-link">Főoldal</a></li>
                <li class="nav-item"><a href="index.php?program=agazatok.php" class="nav-link">Ágazatok</a></li>
                <li class="nav-item"><a href="index.php?program=szakok.php" class="nav-link">Szakok</a></li>
                <li class="nav-item"><a href="index.php?program=agszak.php" class="nav-link">Ágazaton belüli szakok</a></li>
                <li class="nav-item"><a href="index.php?program=modosit.php" class="nav-link">Leírás módosítás</a></li>
                <li class="nav-item"><a href="index.php?program=torol.php" class="nav-link">Szakma törlése</a></li>
            </ul>
        </nav>
    </div>
    <!--Itt fog megjelenni a kiválasztott program-->

    <div class="container mt-2 justify-content-center
    ">
        <?php
            if(isset($_GET["program"]))
                include $_GET["program"];
            else
                include "fooldal.php";
        ?>
    </div>
   
    <script src="menuHighlights.js"></script>
</body>
</html>