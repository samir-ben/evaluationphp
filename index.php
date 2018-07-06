<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Evaluation PHP</title>
</head>
<body>
    <?php
    // Inclusion du menu
    include("includes/header.php");

    // Connexion base de données
    require("database/database.php");
    Database::connect();
    Database::import();
    Database::disconnect();
     ?>

    <!-- Corps de la page -->
    <div class="container">
        <h5 class="text-center py-1">Ennoncé</h5>
    
        <p class="text-justify">L’outil à réaliser est une micro-application réalisée en php et reposant sur une base de données MySql. Elle devra permettre la sauvegarde et l'analyse simplifiée d'un fichier de tickets d'appels (téléphonie mobile). L'application ou le script devra prendre le fichier fourni « tickets_appels_201202.csv » en paramètre.</p>

        <p class="text-justify">1. La première étape consiste à pouvoir charger, dans une base de données, les informations utiles (cf. point 2) et valides contenues dans le fichier CSV fourni en pièce-jointe.<br>
        2. La deuxième étape consiste à exploiter les données chargées en base de données pour réaliser les requêtes suivantes, (et uniquement ces requêtes) :</p>

        <ul>
            <li>Retrouver la durée totale réelle des appels effectués après le 15/02/2012 (inclus)</li>
            <li>Retrouver le TOP 10 des volumes data facturés en dehors de la tranche horaire 8h00-18h00, par abonné.</li>
            <li>Retrouver la quantité totale de SMS envoyés par l'ensemble des abonnés.</li>
        </ul>
        <p class="text-justify">Vous devrez faire preuve d'un peu d'astuce et de rigueur pour comprendre, par vous-même, la structure du fichier et analyser correctement les données.</p>
    </div>

   
    
</body>
</html>