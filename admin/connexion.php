<?php 
     session_start();
 if(!empty($_POST)){
    if(isset($_POST["email"], $_POST["pass"])
    && !empty($_POST["email"] && !empty($_POST["pass"]))
    ){
        if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
            die("ce n'est pas un email");
        }
        require_once "connect.php";
        $sql = "SELECT * FROM users WHERE email = :email";
        $query = $db->prepare($sql);
        $query->bindValue(":email", $_POST["email"], PDO::PARAM_STR);
        $query->execute();
        $user = $query->fetch();
        
        if(!$user){
            die("L'utilisateur n'existe pas");
        }
        if(!password_verify($_POST["pass"], $user["pass"])){
            die("le mot de passe est incorrect");
        }
   


        $_SESSION["user"] = [
            "id" => $user["id"],
            "pseudo" => $user["username"],
            "email" => $user["email"],
            "roles" => $user["roles"]
        ];
        header("location: profil.php");
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
<h1>Connexion</h1>
<form method="post">

<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id="email">
</div>

<div>
    <label for="pass" class="form-label">Mot de Passe</label>
    <input type="password" class="form-control" name="pass" id="pass">
</div>
<p>Pas encore de compte <a href="inscription.php">S'inscrire</a></p>
<button type="submit" class="btn btn-primary">Me connecter</button>

</form>










</body>
</html>