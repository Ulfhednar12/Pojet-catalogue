<?php 
    session_start();
    ?>

















<h1>Profil de  <?= $_SESSION["user"]["pseudo"] ?></h1>
<p>Pseudo : <?= $_SESSION["user"]["pseudo"] ?></p>
<p>Email: <?= $_SESSION["user"]["email"] ?></p>
