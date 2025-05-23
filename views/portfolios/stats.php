<!-- Stats Section -->
<section id="stats" class="stats section">
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="stats-grid">
      <?php foreach ($stat as $s): ?>
        <div class="stats-item">
          <i class="<?= htmlspecialchars($s->icon) ?> item-icon"></i>
          <span 
            data-purecounter-start="0" 
            data-purecounter-end="<?= htmlspecialchars($s->value) ?>" 
            data-purecounter-duration="1" 
            class="purecounter">
            <?= htmlspecialchars($s->value) ?>
          </span>
          <p>
            <strong><?= htmlspecialchars($s->title) ?></strong>
            <span><?= htmlspecialchars($s->description) ?></span>
          </p>
          <?php if ($this->Session->isLogged()): ?>
            <button
              class="btn btn-warning btn-sm mt-2"
              onclick="editStat('<?= $s->id ?>', '<?= htmlspecialchars($s->icon) ?>', '<?= htmlspecialchars($s->value) ?>', '<?= htmlspecialchars($s->title) ?>', '<?= htmlspecialchars($s->description) ?>')"
              title="Modifier"
            >
              <i class="bi bi-pencil-square edit-stat-icon"></i>
            </button>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
    </div>    
    <?php if ($this->Session->isLogged()): ?>
      <div class="text-center">
        <button
          class="btn btn-outline-primary btn-sm mt-4"
          data-bs-toggle="modal"
          data-bs-target="#statsModal"
          id="add-stat-btn"
        >
          <i class="bi bi-plus-circle"></i> Ajouter un item
        </button>
      </div>
    <?php endif; ?>
  </div>
</section>

<!-- Modal for Adding/Editing Stats -->
<div class="modal fade" id="statsModal" tabindex="-1" aria-labelledby="statsModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="statsModalLabel">Ajouter / Modifier un Item</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="statsForm">
        <div class="modal-body">
          <input type="hidden" id="itemId" name="id">
          <div class="mb-3">
            <label for="icon" class="form-label">Icône</label>
            <input type="text" class="form-control" id="icon" name="icon" placeholder="Ex: bi bi-emoji-smile">
          </div>
          <div class="mb-3">
            <label for="value" class="form-label">Valeur</label>
            <input type="number" class="form-control" id="value" name="value" placeholder="Ex: 10">
          </div>
          <div class="mb-3">
            <label for="title" class="form-label">Titre</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Ex: Projets">
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Ex: Description de l'item"></textarea>
          </div>
        </div>
        <div class="modal-footer">
           <button type="submit" class="btn btn-outline-warning"><i class="bi bi-floppy-fill"></i></button>
        </div>
      </form>
    </div>
  </div>
</div>