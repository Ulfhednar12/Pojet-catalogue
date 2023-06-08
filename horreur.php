<?php 
    session_start();
    include "headeradmin.php";
    require "connect.php";
    $sql = "SELECT * FROM film
    LEFT JOIN categorie ON film.idcategorie = categorie.idcategorie WHERE nomdecategorie = 'horreur'";
    $query = $db->prepare($sql);

    $query->execute();
  
    $resultat = $query->fetch();
    
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
      <a href="horreur.php"> <button class="favorite styled">Horreur</button></a>
      <a href="sci-fi.php"> <button class="favorite styled">SCI-FI</button></a>
      <a href="thriller.php"> <button class="favorite styled">Thriller</button></a>
      <a href="romance.php"> <button class="favorite styled">Romance</button></a>
      <a href="action.php"> <button class="favorite styled">action</button></a>
      <a href="comedie.php"> <button class="favorite styled">Comedie</button></a>
      <a href="western.php"> <button class="favorite styled">Western</button></a>
     <?php if(!isset($_SESSION["users"])): ?>
        <a href="connexion.php"><button class="connexion">Connexion</button></a>
        
<?php else: ?>
    <li><a href="deconnexion.php"><button class="connexion">Déconnexion</button></a></li>
    <?php endif; ?>
    </div>
  </div>
</header>




<?php foreach ($resultat as $valeur){ ?><!-- boucle pour afficher chaque données de la table film -->
    <tr>
      <th scope="row"><?= $valeur['nom'] ?></th>
      <td><?= $valeur['description'] ?></td>
      <td class="image"><img src="image/<?= $valeur['image'] ?>"></td>
      <td><iframe width="300" height="150" src="<?= $valeur['video'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></td>
      <td><?= $valeur['nomdecategorie'] ?></td><!-- nom de categorie par rapport à la jointure faite entre la table film et categorie -->
    </tr>
    <?php } ?>



  



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