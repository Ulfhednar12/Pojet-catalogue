<?php 
  
 if(!empty($_POST)){
    
    if(isset($_POST["nickname"], $_POST["email"], $_POST["pass"]) && !empty($_POST["nickname"]) && !empty($_POST["email"]) && !empty($_POST["pass"])
    ){
        $pseudo = strip_tags($_POST["nickname"]);
        if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
            //die("l'adresse email est incorrecte");
        }
        $pass = password_hash($_POST["pass"], PASSWORD_ARGON2ID);
        require_once "connect.php";
        $sql = "INSERT INTO users (username, email, pass, roles) VALUES(:pseudo, :email, '$pass', '[\"ROLE_USER\"]')";
        $query = $db->prepare($sql);
        $query->bindValue(":pseudo", $pseudo, PDO::PARAM_STR);
        $query->bindValue(":email", $_POST["email"], PDO::PARAM_STR);
        $query->execute();

        header("location: connexion.php");
  }
 }

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<div class="formulaire"> 
<h1>Incription</h1>

<form method="post">

<div class="mb-3">
    <label for="pseudo" class="form-label">pseudo</label>
    <input type="text" class="form-control" name="nickname" id="pseudo">
</div>
<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id="email">
</div>

<div class="mb-3">
    <label for="pass" class="form-label">Mot de Passe</label>
    <input type="password" class="form-control" name="pass" id="pass">
</div>
<p>Déjà un compte <a href="connexion.php">Se connecter</a></p>
<button type="submit" class="btn btn-primary">M'inscrire</button>

</form>
</div>









</body>
</html>