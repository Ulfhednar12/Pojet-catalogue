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
    <title>Document</title>
</head>
<body>
    
<h1>Incription</h1>
<form method="post">


<div>
    <label for="email">Email</label>
    <input type="email" name="email" id="email">
</div>

<div>
    <label for="pass">Mot de Passe</label>
    <input type="password" name="pass" id="pass">
</div>
<button type="submit">Me connecter</button>

</form>










</body>
</html>