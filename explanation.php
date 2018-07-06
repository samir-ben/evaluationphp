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
    <?php include("includes/header.php"); ?>

    <div class="container">
        <h5 class="text-center py-3">Explications</h5>
        <p class="text-justify">J'ai commencé par créer une table via PphMyAdmin avec les mêmes intitulés se trouvant dans la fichier CSV initial.
        Je savais comment importer des données d'un fichier CSV vers une table MySQL via la ligne de commande. 
        J'ai procédé ainsi rapidement et dans la foulée procéder aux requêtes SQL pour trouver les réponses demandées. Cette partie ne m'a pas posé de souci (a voir maintenant la correction).</p>

        <p class="text-justify">Pour construire ma petite application en PHP et obtenir les mêmes résultats, cela m'a pris un peu plus de temps. J'ai dû revoir quelques notions syntaxiques du langage. 
        J'ai bloqué un peu sur la requête 'LOAD DATA LOCAL INFILE...' dans le fichier PHP. Bien qu'elle marchait parfaitement en ligne de commande, j'avais des erreurs en essayant en PHP. 
        J'ai également passé un moment à essayer d'ajouter les données seulement si ma table était vide, pour ne pas doubler le nombre de ligne à chaque rafraîchissement. 
        C'est globalement sur ces deux points où j'ai passée le plus de temps, et en essayant de coder l'application proprement.</p>

        <p class="text-justify">Concernant la table de la base de données, j'ai gardé les noms du tableau initial bien que j'aurais pu les changer et les mettre en anglais.
        J'avais déjà procédé à la copie d'un tableau Excel sur une base de données MySQL sur une table en ligne de commande. J'avais par la suite dispatcher les données de cette même table dans plusieurs tables pour créer une base de données plus pertinente.
        Toutes mes requêtes se faisaient via des jointures. Je me suis posé la question sur cet exercice, à savoir si je devais créer plusieurs tables et de procéder ainsi mais je me suis dit que ce n'est peut-être pas ce que vous attendiez.</p>

        <p class="text-justify">Je vous remercie pour votre attention.</p>
        <hr>
        <p class="text-justify">Résultats obtenus en local:</p>
        <ul>
            <li>Durée appel : <strong>16476330</strong>. Dans le fichier CSV, j'ai vu que dans les deux colonnes concernant les volumes il y a des cellules aux formats '00:00:00' et qui rendent "0" une fois dans la table MySQL. Je me suis demandé s'il fallait les convertir et les inclures mais elles correspondent à chaque fois à un "rappel de SFR, d'un contact" et non d'une connexion 3G ou un appel émis en volume, c'est pourquoi j'en ai pas tenu compte dans ma requête en les considérant comme "0" volume. C'est peut-être une erreur de ma part.</li>
            <li>Top 10: (1) 97257; (2) 85811; (3) 60923; (4) 54731; (5) 52698; (6) 49683; (7) 32681; (8) 28654; (9) 13167; (10) 7707;</li>
            <li> Nombre SMS : <strong>11577</strong></li>
        </ul>
    </div>
   
    
</body>
</html>
