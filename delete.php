<?php
session_start();

require "connect.php";

if (isset($_GET["id"]) && !empty($_GET["id"])) {
    $id = strip_tags($_GET["id"]);
    
    $sth = $db->prepare("DELETE FROM film WHERE id=:id");
    $sth->execute([":id" => $id]);
    
    header("Location: gestion.php");
  
}
?>
