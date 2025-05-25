<!-- parcours Section -->
<section id="parcours" class="parcours section">
  <div class="container section-title" data-aos="fade-up">
    <h2 <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="title" data-id="'.$parcours[0]->id.'" data-table="parcours"'; ?>>
      <?= htmlspecialchars($parcours[0]->title) ?>
    </h2>
    <p <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="'.$parcours[0]->id.'" data-table="parcours"'; ?>>
      <?= htmlspecialchars($parcours[0]->content) ?>
    </p>
  </div>
  <div class="container">
    <div class="row">
      <!-- Formation -->
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <h3 class="parcours-title"
          <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="title_1" data-id="1" data-table="parcours"'; ?>>
          <?= htmlspecialchars($parcours[0]->title_1) ?>
        </h3>
        <?php foreach ($parcours_formation as $item): ?>
          <div class="parcours-item">
            <h4><?= htmlspecialchars($item->title) ?></h4>
            <h5><?= htmlspecialchars($item->date_range) ?></h5>
            <p><?= nl2br(htmlspecialchars($item->content)) ?></p>
            <?php if ($this->Session->isLogged()): ?>
              <div class="btn-group mt-2 parcours-btn-group" role="group">
                <button
                  class="btn btn-warning btn-sm edit-formation-btn"
                  data-id="<?= htmlspecialchars($item->id) ?>"
                  data-title="<?= htmlspecialchars($item->title, ENT_QUOTES) ?>"
                  data-date_range="<?= htmlspecialchars($item->date_range, ENT_QUOTES) ?>"
                  data-content="<?= htmlspecialchars($item->content, ENT_QUOTES) ?>"
                  title="Modifier">
                  <i class="bi bi-pencil-square"></i>
                </button>
                <button class="btn btn-danger btn-sm"
                  onclick="deleteParcoursFormation('<?= $item->id ?>')"
                  title="Supprimer">
                  <i class="bi bi-trash"></i>
                </button>
              </div>
            <?php endif; ?>
          </div>
        <?php endforeach; ?>
        <?php if ($this->Session->isLogged()): ?>
          <div class="text-center">
            <button class="btn btn-outline-primary add-Item-btn btn-sm mt-4" id="add-parcours-formation-btn">
              <i class="bi bi-plus-circle"></i> Ajouter une formation
            </button>
          </div>
        <?php endif; ?>
      </div>
      <!-- Experience Professionnelle -->
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
        <h3 class="parcours-title"
          <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="title_2" data-id="1" data-table="parcours"'; ?>>
          <?= htmlspecialchars($parcours[0]->title_2) ?>
        </h3>
        <?php foreach ($parcours_xppro as $item): ?>
          <div class="parcours-item">
            <h4><?= htmlspecialchars($item->title) ?></h4>
            <h5><?= htmlspecialchars($item->date_range) ?></h5>
            <p><?= nl2br(htmlspecialchars($item->content)) ?></p>
            <?php if ($this->Session->isLogged()): ?>
              <div class="btn-group mt-2 parcours-btn-group" role="group">
                <button
                  class="btn btn-warning btn-sm edit-xppro-btn"
                  data-id="<?= htmlspecialchars($item->id) ?>"
                  data-title="<?= htmlspecialchars($item->title, ENT_QUOTES) ?>"
                  data-date_range="<?= htmlspecialchars($item->date_range, ENT_QUOTES) ?>"
                  data-content="<?= htmlspecialchars($item->content, ENT_QUOTES) ?>"
                  title="Modifier">
                  <i class="bi bi-pencil-square"></i>
                </button>
                <button class="btn btn-danger btn-sm"
                  onclick="deleteParcoursXppro('<?= $item->id ?>')"
                  title="Supprimer">
                  <i class="bi bi-trash"></i>
                </button>
              </div>
            <?php endif; ?>
          </div>
        <?php endforeach; ?>
        <?php if ($this->Session->isLogged()): ?>
          <div class="text-center">
            <button class="btn btn-outline-primary add-Item-btn btn-sm mt-4" id="add-parcours-xppro-btn">
              <i class="bi bi-plus-circle"></i> Ajouter une expérience
            </button>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>

  <!-- Modal pour Ajouter/Modifier un parcours -->
  <div class="modal fade" id="parcoursModal" tabindex="-1" aria-labelledby="parcoursModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form id="parcoursForm">
          <div class="modal-header">
            <h5 class="modal-title" id="parcoursModalLabel">Ajouter / Modifier un parcours</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <input type="hidden" id="parcoursItemId" name="id">
            <input type="hidden" id="parcoursTable" name="table">
            <div class="mb-3">
              <label for="parcoursTitle" class="form-label">Titre</label>
              <input type="text" class="form-control" id="parcoursTitle" name="title" required>
            </div>
            <div class="mb-3">
              <label for="parcoursDate" class="form-label">Date</label>
              <input type="text" class="form-control" id="parcoursDate" name="date_range" required>
            </div>
            <div class="mb-3">
              <label for="parcoursContent" class="form-label">Description</label>
              <textarea class="form-control" id="parcoursContent" name="content" rows="3" required></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-outline-warning"><i class="bi bi-floppy-fill"></i></button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>