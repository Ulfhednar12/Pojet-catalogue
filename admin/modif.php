<!--Même page que Ajout-->

<?php
session_start();
include "headeradmin.php";
require "connect.php";
   


    if ($_POST) { //si quelqu"un à appuyer sur le bouton enregistrer on verifie
        if (
            isset($_POST["id"]) && !empty($_POST["id"]) 
            && isset($_POST["nom"]) && !empty($_POST["nom"])
            && isset($_POST["description"]) && !empty($_POST["description"])
            && isset($_POST["video"]) && !empty($_POST["video"])
            && isset($_POST["image"]) && !empty($_POST["image"])
            && isset($_POST["idcategorie"]) && !empty($_POST["idcategorie"])
            //&& isset($_POST["idcategorie"]) && !empty($_POST["idcategorie"])
            
        ) {
            $id = strip_tags($_POST["id"]);
            $nom = strip_tags($_POST["nom"]); //strip_tags=pour securisé et que la personne qui enregistre dans le formulaire ne puisse pas mettre de balise php ou html
            $description = strip_tags($_POST["description"]);
            $video = strip_tags($_POST["video"]);
            $image = strip_tags($_POST["image"]);
            $idcategorie = strip_tags($_POST["idcategorie"]);//pour sécuriser
            //$idcategorie=strip_tags($_POST["idcategorie"]);
            $requete = "UPDATE film SET nom=:nom, description=:description, video=:video, image=:image, idcategorie=:idcategorie WHERE id=:id";
            $sth = $db-> prepare($requete);
            $sth->bindvalue(":id", $id, PDO::PARAM_INT);//pour récupérer les valeurs si on les moidifie
            $sth->bindvalue(":description", $description, PDO::PARAM_STR);//pour récupérer les valeurs si on les moidifie
            $sth->bindvalue(":video", $video, PDO::PARAM_STR);//pour récupérer les valeurs si on les moidifie
            $sth->bindvalue(":image", $image, PDO::PARAM_STR);//pour récupérer les valeurs si on les moidifie
            $sth->bindvalue(":idcategorie", $idcategorie, PDO::PARAM_INT); //pour récupérer les valeurs si on les moidifie
            $sth->execute();
       
            
        }
        header("Location: gestion.php");  
    }

        if(isset($_GET["id"]) && !empty ($_GET["id"])){
            require_once ("connect.php");
            $id = strip_tags($_GET["id"]);
            $sth = "SELECT * FROM film WHERE id=:id";
            $sth = $db->prepare($sth);
            $sth->bindValue(":id", $id, PDO::PARAM_INT);//protege contre les injections puisque visible dans l"url
            $sth->execute();
            $resultat = $sth->fetch();

        }
        $sql = "SELECT * FROM categorie";
        $query = $db->prepare($sql);
    
        $query->execute();
      
        $resultats = $query->fetchAll();
     
 
?>
<div class="formulaire">     
<h1>Modifier</h1>
<form  method="post">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nom de film</label>
  <input type="text" value="<?= $resultat["nom"]?>" class="form-control" id="exampleFormControlInput1" placeholder="Nom du film">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">description du film</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"><?= $resultat["description"]?></textarea> <!--pour les grands contenus-->
</div>

<div class="input-group mb-3">
   <!--  <img src="image/<?php //$resultat["image"]?>" alt="">affiche l"image que l"on a pour le film a modifier-->
  <input type="file" value="<?= $resultat["image"]?>" class="form-control" id="inputGroupFile02">
  <label  class="input-group-text" for="inputGroupFile02"><?= $resultat["image"]?></label>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">bande annonce</label>
  <input type="text" value="<?= $resultat["video"]?>" class="form-control" id="exampleFormControlInput1" placeholder="lien de la bande annonce">
</div>
<div class="input-group mb-3">
  <label class="input-group-text" for="inputGroupSelect01"><?= $resultat["idcategorie"]?></label>
  <select class="form-select" id="inputGroupSelect01">
    <option selected>choisissez</option>
    <?php foreach ($resultats as $valeur){
?>
    <option name="idcategorie" value="<?= $valeur["idcategorie"] ?>"><?= $valeur["idcategorie"] ?>, <?= $valeur["nomdecategorie"] ?></option> <!-- récupére les catégorie de film dans la base de donné avec un SELECT-->

    <?php
    }
    ?>
  </select>
</div>
<button type="submit" class="btn btn-dark">Enregistrer</button>
</form>
</div>
