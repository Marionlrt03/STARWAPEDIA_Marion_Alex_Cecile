<?php
    $bdd = new PDO('mysql:host=localhost;dbname=starwars', 'root', 'root');

    $result = $bdd->query("DELETE FROM planets");
?>

<!DOCTYPE html> 
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>STARWAPEDIA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body> 
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
    <img src="img/starwapedia.png" alt="Logo" width="150" height="60"></img>

        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Planetes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Films</a>
            </li>
        </ul>
        <span class="navbar-text">
            Star wars c'est nul
        </span>
        </div>
    </div>
</nav>
<?php

$nom_planet = $GET['name'];

$connexion = mysqli_connect("localhost","root","root","starwars");
$requete = "SELECT * FROM planets WHERE planet_id=? ;
$resultat = $connexion->query($requete);
?>

<div class="container text-center">
<h1>INFORMATIONS SUR LA PLANETE</h1>
<img src="IMG\planets\<?php print $planete['name']?>.png" class="card-img-top" alt="Photo de la planete">


</div>


</body>
</html>