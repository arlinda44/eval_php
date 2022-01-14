<?php

$pdo = new PDO('mysql:host=localhost;dbname=eval_Php;port=3306', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sth = $pdo->prepare("SELECT * FROM produit");
$sth->execute();
$produit = $sth->fetchAll();





?>





<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>eval_Php</title>
  <!-- lien bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- lien css / sass -->
  <link rel="stylesheet" href="style.css">

</head>

<body>
  <header>
    <img src="ressources/images/logo.png" width="70px">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="accueil.php">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin.php">Administration</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                menu
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">produits</a></li>
                <li><a class="dropdown-item" href="#">catégories</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Actifs</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Désactiver</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Recherche" aria-label="Recherche">
            <button class="btn btn-outline-success" type="submit"></button>
          </form>
        </div>
      </div>
    </nav>
  </header>
  <main class='container'>
    <div class="card-group row">
      <?php foreach ($produit as $key => $value) { ?>
        <div class=" col-lg-4">


          <div class="card">
            <img src="ressources/images/<?= $value['image'] ?>" class="card-img-top" width="100%">

            <div class="card-body">
              <h5 class="card-title"><?= $value['nom'] ?></h5>
              <p class="card-text"><?= $value['description'] ?></p>
              <p class="card-text"><small class="text-muted"><?= $value['bienfaits'] ?></small></p>
            </div>
          </div>
        </div>
      <?php
      }
      ?>

    </div>


  </main>
  <footer class="text-center text-white" style="background-color: #45637d;">
    <!-- Grid container -->
    <div class="container p-4">
      <!-- Section: Iframe -->
      <section class="">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6">
            <div class="ratio ratio-16x9">
              <iframe class="shadow-1-strong rounded" src="https://www.youtube.com/embed/vlDzYIIOYmM" title="photo" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </section>
      <!-- Section: Iframe -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color:greenyellow ;">
      © 2020 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>



  <!-- lien java /boootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>