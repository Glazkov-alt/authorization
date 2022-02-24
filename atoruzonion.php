<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include "php/db.php";
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="contener">
      <?php
      include "php/header.php"
      ?>
      <form action="php/stravto.php" method="post" class="formRegustr" id="formRegustr">
          <h3>Авторизация </h3>

          <input class="formRegustrInput" type="text" name="logun" placeholder="Логин" id="logun" required>
 
          <input class="formRegustrInput" type="password" name="password" id="passwprd1" placeholder="Пароль" required>
         
      
          <p class="erorses" id="edr"></p>
          <button class="buttons">Вход</button>
      </form>
    </div>

</body>
<script src="js/atoruzonion.js"></script>
</html>