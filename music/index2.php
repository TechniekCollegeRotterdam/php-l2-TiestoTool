[09:29] Donny Eikmans
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
 
</head>
<body>
<section class="container">
<?php
include 'dbconnection.php';
?>
<div class="card" >
    <div class="card-header">
    <h1>Inloggen</h1>
 
    </div>
<div class="card-body ">
<table class="table">
<thead>
    <tr>
      <th>    <form class="Loginform" method="POST" action="login.php">
        <label for="Gebruikersnaam">Email</label><br>
        <input type="email" id="Gebruikersnaam" name="email" class="Gebruikersnaam"><br></th>
      <th>        <label for="Wachtwoord">Wachtwoord</label><br>
        <input type="Password" id="Wachtwoord" name="password" class="Wachtwoord"></th>
        <th><div class="lbutton">
        <button class="Lbutton" name="login">Login</button></form></th>
    </tr>
  </thead>
  <tr>
  <th><a href="register.php">Nog geen account? Maak er dan nu een aan.</a></th>
  </tr>
</table>
</div>
</div>
</section>
 
 
 
</body>
</html>