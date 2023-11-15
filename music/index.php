<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <section class="container">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        
        <li class="nav-item">
          <a class="nav-link" href="afspeellijst2.php">afspeellijst</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="muziek2.php">muziek</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index23.php">Inloggen</a>
        </li>
      </ul>
    </div>

    <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    admin
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="muziek.php">muziek</a></li>
    <li><a class="dropdown-item" href="afspeellijst.php">afspeellijst</a></li>
    <li><a class="dropdown-item" href="genre.php">genres</a></li>
  </ul>
</div>
  </div>
</nav>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding: 20px;
        }
        .container {
            max-width: 800px;
        }
        .btn-action {
            margin-right: 5px;
        }
    </style>
</head>
<body>

<div class="container">
<?php

    include("dbconnect.php");
?>
    <h1>Playlist list</h1>
    <a href="afspeellijsttoevoegen.php" class="btn btn-success btn-action">Add playlist</a>

<table class="table">
<thead>
<tr>
<th>name</th>
</tr>
</thead>
<tbody>
 <?php
try {
 $query = "SELECT * FROM playlist";
$get_playlist = $dbconnection->prepare($query);
$get_playlist->execute();
$playlists = $get_playlist->fetchAll();
if ($playlists) {
foreach ($playlists as $playlist) {
?>
<tr>
 <td><?= $playlist["name"] ?></td>
<td>
 <a href="afspeelijstbewerken.php?id=<?= $playlist['id']?>" class="btn btn-primary btn-action">Edit</a>
<form action="CRUD_afspeellijsttoevoegen.php" method="POST" style="display: inline;">
 <input type="hidden" name="delete_playlist" value="<?= $playlist['id'] ?>">
 <button type="submit" class="btn btn-danger btn-action">Delete</button>

</form>
</td>
 </tr>
 <?php
  }
}
} catch (PDOException $e) {
 echo "Connection failed: " . $e->getMessage();
}
?>
</tbody>
</table>
</div>
</body>
</html>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>