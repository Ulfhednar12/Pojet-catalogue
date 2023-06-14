
<?php
session_start();// c'est une variable de session qui laisse connecter l'utilisateur

require "connect.php";
$sql = "SELECT * FROM film 
LEFT JOIN categorie ON film.idcategorie = categorie.idcategorie LIMIT 10";
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
    <h1 class="titre_logo">Video online</h1>
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
    <a href="index.php"> <button class="favorite styled">Accueil</button></a>
    <a href="horreur.php"> <button class="favorite styled">Horreur</button></a>
      <a href="sci-fi.php"> <button class="favorite styled">SCI-FI</button></a>
      <a href="thriller.php"> <button class="favorite styled">Thriller</button></a>
      <a href="romance.php"> <button class="favorite styled">Romance</button></a>
      <a href="action.php"> <button class="favorite styled">Action</button></a>
      <a href="comedie.php"> <button class="favorite styled">Comédie</button></a>
      <a href="western.php"> <button class="favorite styled">Western</button></a>
     <?php if(!isset($_SESSION["user"])){ ?>
        <a href="connexion.php"><button class="favorite styled">Connexion</button></a>
        <a href="inscription.php"><button class="favorite styled">inscription</button></a> 
<?php }else{ ?>
  <a href="profil.php"><button class="favorite styled">Mon compte</button></a>
          <a href="deconnexion.php"><button class="favorite styled">Deconnexion</button></a>
    <?php } ?>
    </div>
  </div>
</header>






<body>



<div class="slideshow-container">

<div class="mySlides fade">
  
  <img src="image/advenger.png" style="width:100%">
  <div class="text">Advengers</div>
</div>

<div class="mySlides fade">
  
  <img src="image/Joker.jpg" style="width:100%">
  <div class="text">Joker</div>
</div>

<div class="mySlides fade">
  
  <img src="image/Wonder-Woman.jpg" style="width:100%">
  <div class="text">Wonder Woman</div>
</div>

<div class="mySlides fade">
  
  <img src="image/Ambulance.jpg" style="width:100%">
  <div class="text">Ambulance</div>
</div>

<div class="mySlides fade">
  
  <img src="image/dunkerque.jpg" style="width:100%">
  <div class="text">Dunkerque</div>
</div>

<div class="mySlides fade">
  
  <img src="image/topgun.jpg" style="width:100%">
  <div class="text">Top Gun</div>
</div>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 5 seconds
}
</script>





    <h1 class="films_affiche">Films à l'affiche</h1>
    <div class="align_card">
    <?php foreach ($resultat as $valeur){ ?><!-- boucle pour afficher chaque données de la table film -->
      <div class="card-container">
    <div class="card" style="width: 18rem;">
        <img src="image/<?= $valeur['image'] ?>" class="card-img-top" alt="..." height="250px" width="auto">
      <div class="card-body">
        <h5 class="card-title"><?= $valeur['nom'] ?></h5>
        <p class="card-text"><?= $valeur['description'] ?></p>
        <a href="description.php?id=<?= $valeur['id'] ?>" class="btn btn-primary">Lire +</a>
    </div>
      </div>
    </div>
  
    <?php } ?>
    </div>





  



<footer>
    <img src="image/logo.jpg" alt="" height="230px" width="auto">
    <ul class="nav1">
        <li><a class="svg-icon" href="">Contactez-nous</a></li>
        <li><a class="svg-icon" href="index.php">Navigation</a></li>
        <li><a class="svg-icon" href="">Films à l'affiche</a></li>
        <li><a class="svg-icon" href="">A propos</a></li>
      </ul>
      <article class="telecharger">
        <figure>
            <img class="uber2" src="img/images/logo_uberEats_2.svg" alt="">
        </figure>
        <figcaption><p>Téléchargez Vidéo online app</p></figcaption>
            <button class="telecharger"><img src="image/logo_google_play.svg">GOOGLE PLAY</button>
            <button class="telecharger"><img src="image/logo_apple.svg">APPLE STORE</button>
        </article>
    

</footer>


<script src="js/bootstrap.bundle.min.js"></script> 
</body>
</html>