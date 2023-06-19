<?php
session_start(); // C'est une variable de session qui permet de garder l'utilisateur connecté

require "connect.php";
if (!empty($_GET['id']) && isset($_GET['id'])) {
    // Vérifie que l'id n'est pas vide mais remplie
    $id = strip_tags($_GET['id']);
    $query = "SELECT * FROM film WHERE id=:id";//selection tout dans la table film si l'id est strictement = a l'id
    $query = $db->prepare($query);
    $query->bindValue(":id", $id); // on lie la valeur a la variable ID
    $query->execute();
    $resultat = $query->fetch();
}
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
    <h1 class="titre_logo">Video Online</h1>
    <img src="" alt=""> 
  </div>

  

  <div class="burger-menu">
    <img src="image/iconburger.webp" alt="Menu" class="burger-icon">
  </div>
  <div class="burger-links">
    <a href="index.php">Accueil</a>
    <a href="horreur.php">Horreur</a>
    <a href="sci-fi.php">SCI-FI</a>
    <a href="thriller.php">Thriller</a>
    <a href="romance.php">Romance</a>
    <a href="action.php">Action</a>
    <a href="comedie.php">Comédie</a>
    <a href="western.php">Western</a>
    <?php if(!isset($_SESSION["user"])){ ?>
      <a href="connexion.php">Connexion</a>
      <a href="inscription.php">Inscription</a> 
    <?php } else { ?>
      <a href="profil.php">Mon compte</a>
      <a href="deconnexion.php">Déconnexion</a>
    <?php } ?>
  </div>
</header>

<script>
  // Code JavaScript pour le menu burger
  const burgerMenu = document.querySelector('.burger-menu');
  const burgerLinks = document.querySelector('.burger-links');

  burgerMenu.addEventListener('click', () => {
    burgerLinks.classList.toggle('show');
  });
</script>


<section class="description">
<h1><?= $resultat["nom"] ?></h1><!--quand on affiche le php juste (?=)-->
<img src="image/<?= $resultat["image"] ?>" alt="photos de films"> <!-- on choissis le dossier ou sont les images et on affiche la source de l'image-->
<p><?= $resultat["description"] ?></p><!--pour reprendre la description enregistrer dans la BDD-->
<iframe width="300" height="150" src="<?= $resultat['video'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> <!--pour reprend la videos-->




</section>
<footer>
    <img src="image/logo.jpg" alt="" height="230px" width="auto">
    <ul class="nav1">
        <li><a class="svg-icon" href="">Contactez-nous</a></li>
        <li><a class="svg-icon" href="index.php">Navigation</a></li>
        <li><a class="svg-icon" href="">Films à l'affiche</a></li>
        <li><a class="svg-icon" href="">À propos</a></li>
      </ul>
      <article class="telecharger">
        <figure>
            <img class="uber2" src="img/images/logo_uberEats_2.svg" alt="">
        </figure>
        <figcaption><p>Téléchargez l'application Vidéo en ligne</p></figcaption>
            <button class="telecharger"><img src="image/logo_google_play.svg">GOOGLE PLAY</button>
            <button class="telecharger"><img src="image/logo_apple.svg">APPLE STORE</button>
        </article>
    

</footer>


<script src="js/bootstrap.bundle.min.js"></script> 

</body>
</html>