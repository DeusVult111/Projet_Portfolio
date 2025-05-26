<!-- Page Title -->
<div class="page-title dark-background">
  <div class="container d-lg-flex justify-content-between align-items-center">
    <a href="/<?= WEBROOT2 ?>/#portfolio" class="btn btn-return mt-2">
      <i class="bi bi-arrow-left"></i> Retour au portfolio
    </a>    
    <h1 class="mb-2 mb-lg-0">Détail du projet : <?= htmlspecialchars($item->title) ?></h1>
  </div>
</div>

<!-- Portfolio Details Section -->
<section id="portfolio-details" class="portfolio-details section">
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row gy-4">

      <div class="col-lg-8">
        <div class="portfolio-details-slider swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <?php foreach ($images as $img): ?>
              <div class="swiper-slide">
                <img src="/<?= WEBROOT2 ?>/<?= htmlspecialchars($img->img_link) ?>" alt="Image projet">
              </div>
            <?php endforeach; ?>
          </div>
          <div class="swiper-pagination"></div>
        </div>
        <?php if ($this->Session->isLogged()): ?>
          <button class="btn btn-warning mt-3" id="edit-images-btn"><i class="bi bi-pencil-square"></i> Modifier les images</button>
        <?php endif; ?>
      </div>
      <?php if ($this->Session->isLogged()): ?>
        <div class="modal fade" id="editImagesModal" tabindex="-1" aria-labelledby="editImagesModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <form id="addImageForm" enctype="multipart/form-data">
                <div class="modal-header">
                  <h5 class="modal-title"><i class="bi bi-images me-2"></i>Gestion des images</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                  <div class="d-flex align-items-center gap-2 mb-3">
                    <label class="form-label mb-0" for="image"><i class="bi bi-plus-circle text-accent"></i> Ajouter une image</label>
                    <input type="file" name="image" id="image" accept="image/*" class="form-control form-control-sm" required style="max-width: 220px;">
                    <input type="hidden" name="portfolio_id" value="<?= $item->id ?>">
                    <button type="submit" class="btn btn-success btn-sm ms-2" title="Ajouter">
                      <i class="bi bi-plus-circle"></i>
                    </button>
                  </div>
                  <hr>
                  <ul class="image-list">
                    <?php foreach ($images as $img): ?>
                      <li class="image-list-item" data-id="<?= $img->id ?>">
                        <img src="/<?= WEBROOT2 ?>/<?= htmlspecialchars($img->img_link) ?>" alt="Image projet">
                        <button type="button" class="btn btn-danger btn-sm delete-image-btn" data-id="<?= $img->id ?>" title="Supprimer">
                          <i class="bi bi-trash"></i>
                        </button>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              </form>
            </div>
          </div>
        </div>
      <?php endif; ?>

      <div class="col-lg-4">
        <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
          <h3>Informations projet</h3>
          <ul>
            <li>
              <strong>Technologies</strong>:
              <span <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="technology" data-id="'.$item->id.'" data-table="portfolio_item"'; ?>>
                <?= htmlspecialchars($item->technology) ?>
              </span>
            </li>
            <li>
              <strong>Année</strong>:
              <span <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="year" data-id="'.$item->id.'" data-table="portfolio_item"'; ?>>
                <?= htmlspecialchars($item->year) ?>
              </span>
            </li>
            <li>
              <strong>Modèle</strong>:
              <span <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="model" data-id="'.$item->id.'" data-table="portfolio_item"'; ?>>
                <?= htmlspecialchars($item->model) ?>
              </span>
            </li>
            <?php if (!empty($item->link) && $item->link !== '-- Champs à remplir --'): ?>
              <li>
                <strong>Lien</strong>:
                <a href="<?= htmlspecialchars($item->link) ?>" target="_blank"
                   <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="link" data-id="'.$item->id.'" data-table="portfolio_item"'; ?>>
                  <?= htmlspecialchars($item->link) ?>
                </a>
              </li>
            <?php endif; ?>
            <li>
              <strong>Catégorie</strong>:
              <span <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="category" data-id="'.$item->id.'" data-table="portfolio_item"'; ?>>
                <?= htmlspecialchars($item->category) ?>
              </span>
            </li>
          </ul>
        </div>
        <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
          <h2 <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="title" data-id="'.$item->id.'" data-table="portfolio_item"'; ?>>
            <?= htmlspecialchars($item->title) ?>
          </h2>
          <p <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="'.$item->id.'" data-table="portfolio_item"'; ?>>
            <?= nl2br(htmlspecialchars($item->content)) ?>
          </p>
        </div>
      </div>

    </div>
  </div>
</section>