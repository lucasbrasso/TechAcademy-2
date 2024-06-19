<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Game Heaven</title>
  <link rel="shortcut icon" href="img/gameheaven.svg">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a href="home">
        <img src="img/gameheaven.svg" width="72px">
      </a>
      <a class="navbar-brand" href="home">GAME HEAVEN</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Jogos
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Crimson Curse</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Meowtopia</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Omega Collapse</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sobre">Sobre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contato">Contato</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<main>

  <?php
    
    $pagina = $_GET["pagina"] ?? "home";

    $pagina = "pages/{$pagina}.php";

    if (file_exists($pagina)) {
  include $pagina;
    } else {
      include "pages/erro.php";
    }
  ?>
  
  
</main>

  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>