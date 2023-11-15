<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="beginb.php">Download Beats</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="nummers.php">Muziek</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="afspeellijsten.php">Afspeellijsten</a>
        </li>
        <li class="nav-item active" aria-current="page">
          <a class="nav-link" href="genre.php">Genres</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="logout.php">logout</a>
        </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown mr-auto">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Admin
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="download-nummers.php">Download Nummers</a>
                    <a class="dropdown-item" href="download-genres.php">Download Genres</a>
                    <a class="dropdown-item" href="download-afspeellijsten.php">Download Afspeellijsten</a>
                </div>
            </li>
        </ul>
    </div>
  </div>
</nav>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>