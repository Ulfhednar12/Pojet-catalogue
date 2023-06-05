<?php
session_start();
include "headeradmin.php";
require "connect.php";
    $sql = "SELECT * FROM categorie";
   
    $query = $db->prepare($sql);

    $query->execute();
  
    $resultat = $query->fetchAll();
?>
<?php
    require_once("connect.php");

    if ($_POST) { //si quelqu'un à appuyer sur le bouton enregistrer on verifie
        if (
            isset($_POST["nom"]) && !empty($_POST["nom"])
            && isset($_POST["description"]) && !empty($_POST["description"])
            && isset($_POST["video"]) && !empty($_POST["video"])
            && isset($_POST["image"]) && !empty($_POST["image"])
            && isset($_POST["idcategorie"]) && !empty($_POST["idcategorie"])
            //&& isset($_POST["idcategorie"]) && !empty($_POST["idcategorie"])
            
        ) {
            $nom = strip_tags($_POST["nom"]); //strip_tags=pour securisé et que la personne qui enregistre dans le formulaire ne puisse pas mettre de balise php ou html
            $description = strip_tags($_POST["description"]);
            $video = strip_tags($_POST["video"]);
            $image = strip_tags($_POST["image"]);
            $idcategorie = strip_tags($_POST["idcategorie"]);//pour sécuriser
            //$idcategorie=strip_tags($_POST["idcategorie"]);
           

            $sth = "INSERT INTO film (nom, description, video, image, idcategorie) VALUES (:nom, :description, :video, :image, :idcategorie)"; // Pour insèrer des données dans une table 
            $sth = $db->prepare($sth);
            $sth->bindValue(":nom", $nom);   //pour sécurisé formulaire, binvalue pour relier notre variable a la valeur 
            $sth->bindValue(":description", $description);
            $sth->bindValue(":video", $video);
            $sth->bindValue(":image", $image);
            $sth->bindValue(":idcategorie", $idcategorie);
          


            $sth->execute();
        }
        
        header("Location:gestion.php"); //sinon renvoi page d'ajout
    }
    ?>
<div class="formulaire">     
<h1>Ajouter</h1>
<form  method="post">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nom de film</label>
  <input type="text" name="nom" class="form-control" id="exampleFormControlInput1" placeholder="Nom du film">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">description du film</label>
  <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea> <!--pour les grands contenus-->
</div>

<div class="input-group mb-3">
  <input type="file" name="image" class="form-control" id="inputGroupFile02">
  <label class="input-group-text" for="inputGroupFile02">Telecharger l'image</label>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">bande annonce</label>
  <input type="text" name="video" class="form-control" id="exampleFormControlInput1" placeholder="video de la bande annonce">
</div>
<div class="input-group mb-3">
  <label class="input-group-text" for="inputGroupSelect01">Categorie de film</label>
  <select name="idcategorie" class="form-select" id="inputGroupSelect01">
    <option selected>choisissez</option>
    <?php foreach ($resultat as $valeur){
?>
    <option name="idcategorie" value="<?= $valeur['idcategorie'] ?>"><?= $valeur['nomdecategorie'] ?></option> <!-- récupére les catégorie de film dans la base de donné avec un SELECT-->

    <?php
    }
    ?>
  </select>
</div>
<button type="submit" class="btn btn-dark">Enregistrer</button>
</form>
</div>
