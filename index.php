<?php

require 'connPDO.php';
$pdo = new connPDO();
$db = $pdo->conn();

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/basics.css">
    <title>rando</title>
</head>
<body>
    <h1>Randonnée</h1>
    <ul>
        <li>
            <a href="create.php">ajouter une randonnée</a>
        </li>
        <li>
            <a href="read.php">liste</a>
        </li>
    </ul>
</body>
</html>

