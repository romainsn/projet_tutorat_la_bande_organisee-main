<!DOCTYPE html>
<html lang="en">
<head>
    <div id="buttonpara">
        <a href="accueil-admin.php">Accueil</a>
        <a href="date.php">Date</a> -
        <a href="stats.php">Statistiques</a> -
        <a href="tuteur.php">Tuteurs</a> -
        <a href="specialité.php">Specialités</a>
        <a href="classe.php">Classes</a> -
        <a href="compte.php">Compte</a>
    </div>
    <!-- Metadonnées de la page web -->
    <!-- Character-set Metadata -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Auteur de la page -->
    <meta name="author" content="Ulrich SAMORA" />
    <!-- Logo de la page -->
    <link rel="shortcut icon" href="../assets/img/LOGO O.png" />
    <!-- Titre de la page -->
    <title>OLEN5 | Bande Organisée</title>
    <!-- Importation du CSS: -->
    <link rel="stylesheet" href="../assets/css/main.css" />
</head>
<body id="date">
<?php
require_once '../src/FonctionsUtiles.php';
dateSet();
?>
</body>
</html>