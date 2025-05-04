<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROJET D</title>
    <link rel="icon" type="image/x-icon" href="/<?=WEBROOT2;?>/webroot/img/Project_d_logo.webp">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Orbitron:wght@400..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/<?=WEBROOT2;?>/webroot/css/acceuil.css">
    <style>
      body {
        background-image: url('/<?=WEBROOT2;?>/webroot/img/fond.jpg');
      }
    </style>
</head>
<body data-bs-theme="dark" class="d-flex flex-column min-vh-100">
<nav class="navbar navbar-expand-sm bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/<?=WEBROOT2?>">
      <img src="/<?=WEBROOT2;?>/webroot/img/Project_d_logo.webp" width="200" height="75" >
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/<?=WEBROOT2?>/courses">Course</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/<?=WEBROOT2?>/vehicules">Vehicule</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/<?=WEBROOT2?>/pilotes">Pilote</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/<?=WEBROOT2?>/vehicules">Statistique</a>
        </li>
        </ul>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <div class="container text-center p-2" style="transform: scale(0.75);">
                  <a href="/<?= WEBROOT2 ?>/users" class="btn btn-outline-primary p-1" type="button" style="width: 150px;">
                      <div class="card border-0" style="width: 100%; height: auto;">
                          <img src="/<?= WEBROOT2 ?>/webroot/img/<?=$_SESSION['User']->photo;?>" 
                              class="card-img-top rounded-circle mx-auto mt-2" 
                              alt="Photo de profil" 
                              style="width: 30px; height: 30px; object-fit: cover;">
                          <div class="card-body p-1">
                              <p class="card-title mb-0" style="font-size: 12.5px; font-weight: bold;">
                                  <?= htmlspecialchars($_SESSION['User']->prenom . ' ' . $_SESSION['User']->nom); ?>
                              </p>
                          </div>
                      </div>
                  </a>
              </div>
            </li>
        </ul>
    </div>
  </div>
</nav>
<div class="container mt-auto">
  <div class="row">
    <div class="col">
      <?php 
        echo $this->Session->flash();
      ?>
    </div>
  </div>
</div>

<section>
<?php
echo $content_for_layout;
?>
</section>


<footer class="bg-body-tertiary text-center py-3 mt-auto">
  <p>BACK-OFFICE</p>
  <p>SG La Chartreuse</p>
</footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>
