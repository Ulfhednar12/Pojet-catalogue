<?php
session_start();
require "connect.php";
include "headeradmin.php";


$sql = "SELECT * FROM film 
LEFT JOIN categorie ON film.idcategorie = categorie.idcategorie WHERE nomdecategorie = 'western'";
$query = $db->prepare($sql);
$query->execute();
$resultat = $query->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karantina:wght@300&display=swap" rel="stylesheet">
    <title>Catalogue</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    
</head>

<body>

<header>
  <div class="contener_logo">
    <img src="image/logo.jpg" alt="" height="80px" width="80px">
    <h1 class="titre_logo">Vidéo en ligne</h1>
    <img src="" alt="">
    
  </div>
  <div class="contener_recherche">
    <div class="case_recherche">
      <input type="text" id="rechercher" placeholder="Rechercher">
      <button class="rechercher">Rechercher</button>
    </div>
    <div class="burger-menu">
      <img src="image/menu-burger-horizontal-svgrepo-com.svg" alt="Menu" class="burger-icon">
    </div>
    <div class="burger-links">
      <a href="Horreur.php"> <button class="favorite styled">Horreur</button></a>
      <a href="sci-fi.php"> <button class="favorite styled">SCI-FI</button></a>
      <a href="thriller.php"> <button class="favorite styled">Thriller</button></a>
      <a href="romance.php"> <button class="favorite styled">Romance</button></a>
      <a href="action.php"> <button class="favorite styled">Action</button></a>
      <a href="comedie.php"> <button class="favorite styled">Comédie</button></a>
      <a href="western.php"> <button class="favorite styled">Western</button></a>
     <?php if(!isset($_SESSION["users"])): ?>
        <a href="connexion.php"><button class="favorite styled">Connexion</button></a>
        
<?php else: ?>
    <li><a href="deconnexion.php">Déconnexion</a></li>
    <?php endif; ?>
    </div>
  </div>
</header>


<h1 class="films_affiche">Films western</h1>
<div class="align_card">
    <?php foreach ($resultat as $valeur){ ?><!-- boucle pour afficher chaque données de la table film -->
      <div class="card-container">
    <div class="card" style="width: 18rem;">
        <img src="image/<?= $valeur['image'] ?>" class="card-img-top" alt="..." height="450px" width="auto">
      <div class="card-body">
        <h5 class="card-title"><?= $valeur['nom'] ?></h5>
        <p class="card-text"><?= $valeur['description'] ?></p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
      </div>
    </div>
  
    <?php } ?>
    </div>