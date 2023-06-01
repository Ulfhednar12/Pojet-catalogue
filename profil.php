<?php 
    session_start();

    require "connect.php";
    $sql = "SELECT * FROM film";
    $query = $db->prepare($sql);

    $query->execute();
  
    $resultat = $query->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
</head>
<body>
<h1>Profil de  <?= $_SESSION["user"]["pseudo"] ?></h1>
<p>Pseudo : <?= $_SESSION["user"]["pseudo"] ?></p>
<p>Email: <?= $_SESSION["user"]["email"] ?></p>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Nom</th> <!-- col row dans les class c'est le framework boostrap qui met en forme automatiquement -->
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Vidéo</th>
      <th scope="col">Catégorie</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($resultat as $valeur){ ?><!-- boucle pour afficher chaque données de la table film -->
    <tr>
      <th scope="row"><?= $valeur['nom'] ?></th>
      <td><?= $valeur['description'] ?></td>
      <td><img src="IMG/<?= $valeur['image'] ?>"></td>
      <td><?= $valeur['video'] ?></td>
    </tr>
    <?php } ?>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>