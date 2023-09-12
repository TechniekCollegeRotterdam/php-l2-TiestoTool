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
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
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

<div class="card">
  <div class="card-header d-flex justify-content-end">
<a href="" class="btn btn-success">Muziek toevoegen</a>
  </div>

<div class="card-body">
<table class="table table-borderd table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>name</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>pop</td>  
            <td class="d-flex justify-content-end"><button type="button" class="btn btn-danger">Primary</button><button type="button" class="btn btn-primary">Primary</button></td>
        </tr>
    
    </tbody>
    <tbody>
        <tr>
            <td>1</td>
            <td>pop</td>  
            <td class="d-flex justify-content-end"><button type="button" class="btn btn-danger">Primary</button><button type="button" class="btn btn-primary">Primary</button></td>
        </tr>
    
    </tbody>
</table>
</div>
</div>
</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>