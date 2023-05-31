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
        <button class="deconexion" type="button" url="">Déconexion</button>
    </div>
    <div class="contener_recherche">
    <button class="favorite styled" type="button" url="">Horreur</button>
    <button class="favorite styled" type="button" url="">Sci-fi</button>
    <button class="favorite styled" type="button" url="">Thriller</button>
    <button class="favorite styled" type="button" url="">Romance</button>
    <button class="favorite styled" type="button" url="">Action</button>
    <button class="favorite styled" type="button" url="">Comédie</button>
    <button class="favorite styled" type="button" url="">Western</button>
    <input id="searchbar" onkeyup="search()" type="text" name="search" placeholder="Search">

    </div>
</header>



<section class="card">
    <h1 class="films_affiche">Films à l'affiche</h1>

</section>



<script src="js/bootstrap.bundle.min.js"></script> 
</body>
</html>