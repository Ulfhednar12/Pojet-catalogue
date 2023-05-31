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
    <!-- Boostrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    
    
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

<div id="carouselExampleIndicators" class="carousel" data-bs-ride="true" >

    <!-- Les indicateurs (slide actif) du carousel -->
    <div class="carousel-indicators" >
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <!-- Les slides du carousel -->
    <div class="carousel-inner">

        <!-- Slide 1 (slide actif) -->
        <div class="carousel-item active">

            <!-- La row -->
            <div class="row" >

                <!-- Les colonnes responsives : N colonnes -->
                <div class="col-md-3 col-sm-6 col-6" ></div>
                <div class="col-md-3 col-sm-6 col-6" ></div>
                <div class="col-md-3 col-sm-6 col-6" ></div>
                <div class="col-md-3 col-sm-6 col-6" ></div>

            </div>

        </div>

        <!-- Slide 2 -->
        <div class="carousel-item"></div>

        <!-- Slide 3 -->
        <div class="carousel-item"></div>

    </div>

    <!-- Les boutons suivant et pécédent -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>

</div>

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