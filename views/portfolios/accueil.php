<!-- accueil Section -->
<section id="accueil" class="accueil section dark-background">
  <img src="webroot/img/accueil_bg_bn.jpg" alt="" data-aos="fade-in" class="">
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <h2 <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="title" data-id="1" data-table="accueil"'; ?>>
      <?= htmlspecialchars($accueil[0]->title) ?>
    </h2>
      
    </p>
    <p>
    <?php if ($this->Session->isLogged()): ?>
      <button
        class="btn btn-warning mt-2"
        data-bs-toggle="modal"
        data-bs-target="#editAccueilContentModal"
        data-steps="<?= $accueil[0]->content ?>"
      >
       <i class="bi bi-pencil-square"></i>
      </button>
    <?php endif; ?>  
    Je suis <span class="typed" data-typed-items="<?= htmlspecialchars($accueil[0]->content) ?>"></span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
  </div>
  <?php if ($this->Session->isLogged()): ?>
<!-- Modal édition content accueil -->
<div class="modal fade" id="editAccueilContentModal" tabindex="-1" aria-labelledby="editAccueilContentModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="editAccueilContentForm">
        <div class="modal-header">
          <h5 class="modal-title" id="editAccueilContentModalLabel">Édition de la section accueil</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div id="accueil-steps-list"></div>
          <button type="button" class="btn btn-outline-primary btn-sm mt-2" id="add-step-btn">
            <i class="bi bi-plus-circle"></i> Ajouter une étape
          </button>
        </div>      
        <div class="modal-footer">
            <button type="submit" class="btn btn-outline-warning"><i class="bi bi-floppy-fill"></i></button>
        </div>      
      </form>
    </div>
  </div>
</div>
<?php endif; ?>
</section><!-- /accueil Section -->