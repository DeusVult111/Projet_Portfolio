<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Portfolio Nathan Lac</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/<?= WEBROOT2 ?>/webroot/img/favicon (1).png" rel="icon">
  <link href="/<?= WEBROOT2 ?>/webroot/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/<?= WEBROOT2 ?>/webroot/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/<?= WEBROOT2 ?>/webroot/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/<?= WEBROOT2 ?>/webroot/vendor/aos/aos.css" rel="stylesheet">
  <link href="/<?= WEBROOT2 ?>/webroot/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/<?= WEBROOT2 ?>/webroot/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="/<?= WEBROOT2 ?>/webroot/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Updated: Jun 29 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header dark-background d-flex flex-column">
    <i class="header-toggle d-xl-none bi bi-list"></i>

    <div class="profile-img">
      <img src="/<?= WEBROOT2 ?>/webroot/img/img_profile.jpg" alt="" class="img-fluid rounded-circle">
    </div>

    <a href="/<?=WEBROOT2?>" class="logo d-flex align-items-center justify-content-center">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <!-- <img src="webroot/img/logo.png" alt=""> -->
      <h1 class="sitename">Nathan Lac</h1>
    </a>

    <div class="social-links text-center">
      <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
      <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
      <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
      <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
      <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
    </div>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="#accueil" class="active"><i class="bi bi-house navicon"></i>Accueil</a></li>
        <li><a href="#a_propos"><i class="bi bi-person navicon"></i>A Propos</a></li>
        <li><a href="#competences"><i class="bi bi-menu-button navicon"></i>Compétences</a></li>
        <li><a href="#parcours"><i class="bi bi-file-earmark-text navicon"></i>Parcours</a></li>
        <li><a href="#portfolio"><i class="bi bi-images navicon"></i> Portfolio</a></li>
        <li><a href="#savoir-faire"><i class="bi bi-hdd-stack navicon"></i> Savoir-faire</a></li>
        <li><a href="#contact"><i class="bi bi-envelope navicon"></i> Contact</a></li>
        <!-- Bouton Déconnexion visible uniquement sur les petits écrans -->
        <li>
          <div  class="edit-mode-mobile">
            <span><i class="bi bi-pencil-square"></i> Mode Édition : Activé</span>
            <a href="/<?= WEBROOT2 ?>/users/logout" >Désactiver</a>
          </div>
        </li>
      </ul>
    </nav>

  </header>

  <main class="main">
    <div id="flash-container" class="flash-container">
      <?= $this->Session->flash() ?>
    </div>
    <?php
    echo $content_for_layout;
    ?>
    <div class="edit-mode-indicator">
      <span><i class="bi bi-pencil-square"></i> Mode Édition : Activé</span>
      <a href="/<?= WEBROOT2 ?>/users/logout" class="btn btn-danger btn-sm">Désactiver</a>
    </div>
  </main>

  <footer id="footer" class="footer position-relative">

    <div class="container">
      <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Nathan LAC</strong> <span>Tous droits réservés</span></p>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href="https://themewagon.com">ThemeWagon</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="/<?= WEBROOT2 ?>/webroot/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/<?= WEBROOT2 ?>/webroot/vendor/php-email-form/validate.js"></script>
  <script src="/<?= WEBROOT2 ?>/webroot/vendor/aos/aos.js"></script>
  <script src="/<?= WEBROOT2 ?>/webroot/vendor/typed.js/typed.umd.js"></script>
  <script src="/<?= WEBROOT2 ?>/webroot/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/<?= WEBROOT2 ?>/webroot/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="/<?= WEBROOT2 ?>/webroot/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/<?= WEBROOT2 ?>/webroot/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="/<?= WEBROOT2 ?>/webroot/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/<?= WEBROOT2 ?>/webroot/vendor/swiper/swiper-bundle.min.js"></script>
  <script>
    window.WEBROOT2 = "<?= WEBROOT2 ?>";
  </script>

  <!-- Main JS File -->
  <script src="/<?= WEBROOT2 ?>/webroot/js/main.js"></script>
  <script src="/<?= WEBROOT2 ?>/webroot/js/portfolios.js"></script>
</body>

</html>

