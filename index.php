<?php
session_start();
date_default_timezone_set('Europe/Paris');
include_once "sql/table_sql.php";

?>

<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/index.css">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./css/index.css">

        <title>Gestion des comptes</title>
    </head>

    <body>
    <? include_once "./modules/navbar.php"; ?>
    <?


        include_once (isset($_GET["content"]) ? $_GET["content"] : "accueil") . ".php";

    ?>
    </body>

</html>