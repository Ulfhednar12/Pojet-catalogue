<?php
try{
    $server_name = "localhost";
    $dbname = "video_online";
    $user_name = "root";
    $password = "";
    $db = new PDO("mysql:host=$server_name; dbname=$dbname; charset=utf8mb4", $user_name, $password);
    //echo "connexion réussi👌";
    
} catch(PDOException $e){
    echo "échec de connexion : ". $e->getMessage();
};