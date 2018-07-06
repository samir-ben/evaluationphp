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
    $db = Database::connect();
    Database::import();

    // Requête et affichage du résultat
    $query = $db->query("SELECT sum(duree_volume_reel) FROM call_tickets WHERE date_appel <= '15/02/2012';");
    $response = $query->fetch();
    echo '<div class="container py-3"><p>La durée totale réelle des appels effectués après le 15/02/2012 (inclus) est de <strong>' . $response[0]  . '</strong>.</p></div>';

    
    Database::disconnect();
     ?>

     
   
    
</body>
</html>