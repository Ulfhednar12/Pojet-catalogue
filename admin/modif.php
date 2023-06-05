<?php
session_start();
include "headeradmin.php";
require "connect.php";

if ($_POST) {
    if (
        isset($_POST["id"]) && !empty($_POST["id"]) &&
        isset($_POST["nom"]) && !empty($_POST["nom"]) &&
        isset($_POST["description"]) && !empty($_POST["description"]) &&
        isset($_POST["video"]) && !empty($_POST["video"]) &&
        isset($_POST["image"]) && !empty($_POST["image"]) &&
        isset($_POST["idcategorie"]) && !empty($_POST["idcategorie"])
    ) {
        $id = strip_tags($_POST["id"]);
        $nom = strip_tags($_POST["nom"]);
        $description = strip_tags($_POST["description"]);
        $video = strip_tags($_POST["video"]);
        $image = strip_tags($_POST["image"]);
        $idcategorie = strip_tags($_POST["idcategorie"]);

        $requete = "UPDATE film SET nom=:nom, description=:description, video=:video, image=:image, idcategorie=:idcategorie WHERE id=:id";
        $sth = $db->prepare($requete);
        $sth->bindValue(":id", $id, PDO::PARAM_INT);
        $sth->bindValue(":nom", $nom, PDO::PARAM_STR);
        $sth->bindValue(":description", $description, PDO::PARAM_STR);
        $sth->bindValue(":video", $video, PDO::PARAM_STR);
        $sth->bindValue(":image", $image, PDO::PARAM_STR);
        $sth->bindValue(":idcategorie", $idcategorie, PDO::PARAM_INT);
        $sth->execute();
    }

    header("Location: gestion.php");
}

if (isset($_GET["id"]) && !empty($_GET["id"])) {
    require_once("connect.php");
    $id = strip_tags($_GET["id"]);
    $sth = "SELECT * FROM film WHERE id=:id";
    $sth = $db->prepare($sth);
    $sth->bindValue(":id", $id, PDO::PARAM_INT);
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
    <form method="post">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nom de film</label>
            <input type="text" name="nom" value="<?= $resultat["nom"] ?>" class="form-control" id="exampleFormControlInput1" placeholder="Nom du film">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description du film</label>
            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"><?= $resultat["description"] ?></textarea>
        </div>
        <div class="input-group mb-3">
            <input type="file" name="image" value="<?= $resultat["image"] ?>" class="form-control" id="inputGroupFile02">
            <label class="input-group-text" for="inputGroupFile02"><?= $resultat["image"] ?></label>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Bande annonce</label>
            <input type="text" name="video" value="<?= $resultat["video"] ?>" class="form-control" id="exampleFormControlInput1" placeholder="Lien de la bande annonce">
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01"><?= $resultat["idcategorie"] ?></label>
            <select name="idcategorie" class="form-select" id="inputGroupSelect01">
                <option selected>Choisissez</option>
                <?php foreach ($resultats as $valeur) { ?>
                    <option value="<?= $valeur["idcategorie"] ?>"><?= $valeur["idcategorie"] ?>, <?= $valeur["nomdecategorie"] ?></option>
                <?php } ?>
            </select>
        </div>
        <input type="hidden" name="id" value="<?= $resultat["id"] ?>">
        <button type="submit" class="btn btn-dark">Enregistrer</button>
    </form>
</div>
