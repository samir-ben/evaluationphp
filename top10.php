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
    <!-- Menu -->
    <?php include("includes/header.php"); ?>

    <!-- En-tête du tableau -->
    <div class="container text-center py-3">
        <h5>TOP 10 des volumes data facturés en dehors de la tranche horaire 8h00-18h00, par abonné.</h5>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">N° abonné</th>
                    <th scope="col">Volume total facturé</th>
                </tr>
            </thead>
            <tbody>

    <!-- Connexion base de données, requête et affichage des résultats dans le tableau -->            
    <?php
    require("database/database.php");
    $db = Database::connect();
    Database::import();

    $query = $db->query("SELECT id_abonne, duree_volume_facturee FROM call_tickets WHERE heure NOT BETWEEN '08:00:00' AND '18:00:00' GROUP BY id_abonne ORDER BY duree_volume_facturee DESC LIMIT 10;");
    while($response = $query->fetch()){
        echo '<tr>
                <td>' .  $response['id_abonne'] . '</td>
                <td>' . $response['duree_volume_facturee'] . '</td>
             </tr>';
    }
   
    Database::disconnect();
     ?>
            </tbody>
        </table>
    </div>
   
    
</body>
</html>