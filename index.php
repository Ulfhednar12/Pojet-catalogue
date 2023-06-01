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
        <button class="deconnexion" type="button" url="deconnexion.php">Déconnexion</button>
    </div>
    <div class="contener_recherche">
    <button class="favorite styled" type="button" url="">Horreur</button>
    <button class="favorite styled" type="button" url="">Sci-fi</button>
    <button class="favorite styled" type="button" url="">Thriller</button>
    <button class="favorite styled" type="button" url="">Romance</button>
    <button class="favorite styled" type="button" url="">Action</button>
    <button class="favorite styled" type="button" url="">Comédie</button>
    <button class="favorite styled" type="button" url="">Western</button>
    <div class="case_recherche">
            <input type="text" id="rechercher" placeholder="Rechercher"> 
            <button class="rechercher">Rechercher</button>
    </div>
        
    
</header>



</head>
<body>



<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 5</div>
  <img src="image/advenger.png" style="width:100%">
  <div class="text">Advengers</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 5</div>
  <img src="image/Joker.jpg" style="width:100%">
  <div class="text">Jocker</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 5</div>
  <img src="image/Wonder-Woman.jpg" style="width:100%">
  <div class="text">Wonder Woman</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 5</div>
  <img src="image/Ambulance.jpg" style="width:100%">
  <div class="text">Ambulance</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 5</div>
  <img src="image/dunkerque.jpg" style="width:100%">
  <div class="text">Dunkerque</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 5</div>
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




<div class="card">
    <h1 class="films_affiche">Films à l'affiche</h1>
 <p>dhfrssssssrrdddddddddddddddddddddddddddddddddddddddjhkllllllllllllllleufolshfffffuizzzzzzzzzzzzgflhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhiiiiiiiizllllllllllllffffffffffffffffffffffffffffffffffffffffiullllll</p>
 <p>dhfrssssssrrdddddddddddddddddddddddddddddddddddddddjhkllllllllllllllleufolshfffffuizzzzzzzzzzzzgflhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhiiiiiiiizllllllllllllffffffffffffffffffffffffffffffffffffffffiullllll</p>
 <p>dhfrssssssrrdddddddddddddddddddddddddddddddddddddddjhkllllllllllllllleufolshfffffuizzzzzzzzzzzzgflhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhiiiiiiiizllllllllllllffffffffffffffffffffffffffffffffffffffffiullllll</p>
 <p>dhfrssssssrrdddddddddddddddddddddddddddddddddddddddjhkllllllllllllllleufolshfffffuizzzzzzzzzzzzgflhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhiiiiiiiizllllllllllllffffffffffffffffffffffffffffffffffffffffiullllll</p>
 <p>dhfrssssssrrdddddddddddddddddddddddddddddddddddddddjhkllllllllllllllleufolshfffffuizzzzzzzzzzzzgflhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhiiiiiiiizllllllllllllffffffffffffffffffffffffffffffffffffffffiullllll</p>
 <p>dhfrssssssrrdddddddddddddddddddddddddddddddddddddddjhkllllllllllllllleufolshfffffuizzzzzzzzzzzzgflhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhiiiiiiiizllllllllllllffffffffffffffffffffffffffffffffffffffffiullllll</p>
 <p>dhfrssssssrrdddddddddddddddddddddddddddddddddddddddjhkllllllllllllllleufolshfffffuizzzzzzzzzzzzgflhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhiiiiiiiizllllllllllllffffffffffffffffffffffffffffffffffffffffiullllll</p>
 <p>dhfrssssssrrdddddddddddddddddddddddddddddddddddddddjhkllllllllllllllleufolshfffffuizzzzzzzzzzzzgflhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhiiiiiiiizllllllllllllffffffffffffffffffffffffffffffffffffffffiullllll</p>
 <p>dhfrssssssrrdddddddddddddddddddddddddddddddddddddddjhkllllllllllllllleufolshfffffuizzzzzzzzzzzzgflhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhiiiiiiiizllllllllllllffffffffffffffffffffffffffffffffffffffffiullllll</p>
 <p>dhfrssssssrrdddddddddddddddddddddddddddddddddddddddjhkllllllllllllllleufolshfffffuizzzzzzzzzzzzgflhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhiiiiiiiizllllllllllllffffffffffffffffffffffffffffffffffffffffiullllll</p>
 <p>dhfrssssssrrdddddddddddddddddddddddddddddddddddddddjhkllllllllllllllleufolshfffffuizzzzzzzzzzzzgflhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhiiiiiiiizllllllllllllffffffffffffffffffffffffffffffffffffffffiullllll</p>
 <p>dhfrssssssrrdddddddddddddddddddddddddddddddddddddddjhkllllllllllllllleufolshfffffuizzzzzzzzzzzzgflhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhiiiiiiiizllllllllllllffffffffffffffffffffffffffffffffffffffffiullllll</p>
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