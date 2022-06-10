<?php
  require_once '../config/appConfig.php';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/css/main.css">
    <title>Page de connexion étudiant</title>
</head>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active">Connexion</h2>
    <h2 class="inactive underlineHover"><a href="../pages/inscription.php">Inscription</a></h2>

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="../img/ort_removed.png" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form method="POST" action="login.php">
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="Nom d'utilisateur">
      <input type="text" id="passwd" class="fadeIn third" name="passwd" placeholder="Mot de passe">
      <input type="submit" class="fadeIn fourth" value="Se connecter">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Mot de passe oublié?</a>
    </div>

  </div>
</div>