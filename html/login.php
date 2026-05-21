<?php
include("../php/connection.php");
?>
<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="../imagens-videos/Icone-logo/android-chrome-512x512.png" />
  <title>Runna | Login</title>
  <link rel="stylesheet" href="../css/login.css" />
</head>
 

  <form action="../php/validador.php" method="post" class="form-login">
    <label for="">usuario</label>
    <input type="text" name="user" id="user">
    <label for="">senha</label>
    <input type="password" name="pass" id="pass">
    <input type="submit" value="login" id="bnt" name="submit">
  </form>
</body>

</html>