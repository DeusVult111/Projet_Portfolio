<!-- competences Section -->
<section id="competences" class="competences section light-background">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2 <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="title" data-id="5" data-table="competences"'; ?>>
      <?= htmlspecialchars($competences[0]->title) ?>
    </h2>
    <p <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="5" data-table="competences"'; ?>>
      <?= htmlspecialchars($competences[0]->content) ?>
    </p>
  </div><!-- End Section Title -->
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row competences-content competences-animation">
      <?php foreach ($competences_items as $item): ?>
        <div class="col-lg-6">
          <div class="progress">
            <span class="skill">
              <span><?= htmlspecialchars($item->name) ?></span>
            </span>
            <div class="progress-bar-wrap">
              <div class="progress-bar"
                  role="progressbar"
                  aria-valuenow="<?= (int)$item->value ?>"
                  aria-valuemin="0"
                  aria-valuemax="100"
                  style="width: <?= (int)$item->value ?>%;">
              </div>
            </div>
          </div>
          <?php if ($this->Session->isLogged()): ?>
            <div class="btn-group mt-2 competences-btn-group" role="group">
              <button class="btn btn-warning btn-sm"
                onclick="editCompetenceItem('<?= $item->id ?>', '<?= htmlspecialchars($item->name) ?>', '<?= (int)$item->value ?>')"
                title="Modifier">
                <i class="bi bi-pencil-square"></i>
              </button>
              <button class="btn btn-danger btn-sm"
                onclick="deleteCompetenceItem('<?= $item->id ?>')"
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
          <button class="btn btn-outline-primary add-Item-btn btn-sm mt-4" id="add-competence-btn">
            <i class="bi bi-plus-circle"></i> Ajouter une compétence
          </button>
        </div>
      <?php endif; ?>
  </div>
      <!-- Modal pour Ajouter/Modifier une compétence -->
      <div class="modal fade" id="competenceModal" tabindex="-1" aria-labelledby="competenceModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="competenceModalLabel">Ajouter / Modifier une compétence</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="competenceForm">
              <div class="modal-body">
                <input type="hidden" id="competenceItemId" name="id">
                <div class="mb-3">
                  <label for="competenceName" class="form-label">Nom</label>
                  <input type="text" class="form-control" id="competenceName" name="name" placeholder="Ex: HTML">
                </div>
                <div class="mb-3">
                  <label for="competenceValue" class="form-label">Valeur (%)</label>
                  <input type="number" class="form-control" id="competenceValue" name="value" min="0" max="100" placeholder="Ex: 80">
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-outline-warning"><i class="bi bi-floppy-fill"></i></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    
    <div class="logos overflow-hidden py-5 px-0 position-relative" style="white-space: nowrap;">
      <div class="logos-slide d-inline-block">
        <img src="webroot/img/logo_language/html-5-svgrepo-com.svg" alt="Logo 1">
        <img src="webroot/img/logo_language/php-1-logo-svgrepo-com.svg" alt="Logo 2">
        <img src="webroot/img/logo_language/css-3-logo-svgrepo-com.svg" alt="Logo 3">
        <img src="webroot/img/logo_language/wordpress-svgrepo-com.svg" alt="Logo 4">
        <img src="webroot/img/logo_language/javascript-svgrepo-com.svg" alt="Logo 5">
        <img src="webroot/img/logo_language/c-sharp-svgrepo-com.svg" alt="Logo 6">
        <img src="webroot/img/logo_language/python-svgrepo-com.svg" alt="Logo 7">
        <img src="webroot/img/logo_language/sql-database-generic-svgrepo-com.svg" alt="Logo 8">
        <img src="webroot/img/logo_language/git-svgrepo-com.svg" alt="Logo 9">
        <img src="webroot/img/logo_language/github-142-svgrepo-com.svg" alt="Logo 10">
      </div>
    </div>
  </div>
</section><!-- /competences Section -->