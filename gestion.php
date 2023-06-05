<?php 
    session_start();
    include "headeradmin.php";
    require "connect.php";
    $sql = "SELECT * FROM film 
    LEFT JOIN categorie ON film.idcategorie=categorie.idcategorie ORDER BY id DESC"; //jointure qui relie idcategorie de la table categorie à l id categorie de ta table film
    $query = $db->prepare($sql);

    $query->execute();
  
    $resultat = $query->fetchAll();
?>

<body>

<button type="button" class="btn btn-dark"><a href="ajout.php">Ajouter un film</a></button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nom</th> <!-- col row dans les class c'est le framework boostrap qui met en forme automatiquement -->
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Vidéo</th>
      <th scope="col">Catégorie</th>
      <th scope="col">Modifier</th>
      <th scope="col">Supprimer</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($resultat as $valeur){ ?><!-- boucle pour afficher chaque données de la table film -->
    <tr>
      <th scope="row"><?= $valeur['nom'] ?></th>
      <td><?= $valeur['description'] ?></td>
      <td class="image"><img src="image/<?= $valeur['image'] ?>"></td>
      <td><iframe width="300" height="150" src="<?= $valeur['video'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></td>
      <td><?= $valeur['nomdecategorie'] ?></td><!-- nom de categorie par rapport à la jointure faite entre la table film et categorie -->
   
    <td> <a href="modif.php?id=<?= $valeur['id'] ?>">modifier</a></td> <!--lien pour supprimer et modifier-->
    <td><a href="">supprimer</a></td>
    </tr>
    <?php } ?>

  </tbody>
</table>