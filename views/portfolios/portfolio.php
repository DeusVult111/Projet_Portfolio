<!-- Portfolio Section -->
<section id="portfolio" class="portfolio section light-background">
  <div class="container section-title" data-aos="fade-up">
    <h2 <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="title" data-id="'.$portfolio[0]->id.'" data-table="portfolio"'; ?>>
      <?= htmlspecialchars($portfolio[0]->title) ?>
    </h2>
    <p <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="'.$portfolio[0]->id.'" data-table="portfolio"'; ?>>
      <?= htmlspecialchars($portfolio[0]->content) ?>
    </p>
  </div>
  <div class="container">
    <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
      <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
        <li data-filter="*" class="filter-active">Tous</li>
        <li data-filter=".filter-php">PHP</li>
        <li data-filter=".filter-csharp">C#</li>
        <li data-filter=".filter-cms">CMS</li>
        <li data-filter=".filter-html-css-js">HTML/CSS/JS</li>
      </ul>
      <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
      <?php foreach ($portfolio_items as $item): ?>
        <?php
          // Récupère la première image du projet
          $firstImage = null;
          if (isset($item->id)) {
              $images = $this->Portfolio->getImages($item->id);
              if (!empty($images)) {
                  $firstImage = $images[0]->img_link;
              }
          }
          // Image par défaut si aucune image trouvée
          $imgSrc = $firstImage ? '/' . WEBROOT2 . '/' . htmlspecialchars($firstImage) : '/'.WEBROOT2.'/webroot/img/portfolio/photo-vide.png';
        ?>
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-<?= htmlspecialchars($item->category) ?>">
          <div class="portfolio-content h-100">
            <img src="<?= $imgSrc ?>" class="img-fluid" alt="<?= htmlspecialchars($item->title) ?>">
            <div class="portfolio-info">
              <h4><?= htmlspecialchars($item->title) ?></h4>
              <p><?= htmlspecialchars($item->content) ?></p>
              <a href="/<?= WEBROOT2; ?>/portfolios/detail/<?= $item->id ?>" title="Détails" class="details-link"><i class="bi bi-zoom-in"></i></a>
            </div>
          </div>
          <?php if ($this->Session->isLogged()): ?>
            <div class="btn-group mt-2 competences-btn-group" role="group">
              <a href="/<?= WEBROOT2; ?>/portfolios/detail/<?= $item->id ?>" class="btn btn-warning btn-sm edit-portfolio-btn"
                title="Modifier">
                <i class="bi bi-pencil-square"></i>
              </a>
              <button class="btn btn-danger btn-sm"
                onclick="deletePortfolioItem('<?= $item->id ?>')"
                title="Supprimer">
                <i class="bi bi-trash"></i>
              </button>
            </div>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
      </div>
      <?php if ($this->Session->isLogged()): ?>
        <div class="text-center">
          <button class="btn btn-outline-primary add-Item-btn btn-sm mt-4" id="add-portfolio-btn">
            <i class="bi bi-plus-circle"></i> Ajouter un projet
          </button>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>