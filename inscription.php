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
    <title>Document</title>
</head>
<body>
    
<h1>Incription</h1>
<form method="post">
<div>
    <label for="pseudo">pseudo</label>
    <input type="text" name="nickname" id="pseudo">
</div>
<div>
    <label for="email">Email</label>
    <input type="email" name="email" id="email">
</div>

<div>
    <label for="pass">Mot de Passe</label>
    <input type="password" name="pass" id="pass">
</div>
<button type="submit">M'inscrire</button>

</form>










</body>
</html>