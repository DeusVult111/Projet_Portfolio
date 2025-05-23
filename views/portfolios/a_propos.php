<!-- a_propos Section -->
<section id="a_propos" class="a_propos section">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2 <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="title_1" data-id="1" data-table="a_propos"'; ?>>
      <?= htmlspecialchars($a_propos[0]->title_1) ?>
    </h2>
    <p <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content_1" data-id="1" data-table="a_propos"'; ?>>
      <?= htmlspecialchars($a_propos[0]->content_1) ?>
    </p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row gy-4 justify-content-center">
      <div class="col-lg-4">
        <img src="webroot/img/img_profile.jpg" class="img-fluid" alt="">
      </div>
      <div class="col-lg-8 content">
        <h2 <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="title_2" data-id="1" data-table="a_propos"'; ?>>
          <?= htmlspecialchars($a_propos[0]->title_2) ?>
        </h2>
        <p class="fst-italic py-3" <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content_2" data-id="1" data-table="a_propos"'; ?>>
          <?= htmlspecialchars($a_propos[0]->content_2) ?>
        </p>
        <div class="row">
          <div class="col-lg-6">
            <ul>
              <li><i class="bi bi-chevron-right"></i> <strong>Naissance :</strong> <span <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="birthdate" data-id="1" data-table="a_propos"'; ?>><?= htmlspecialchars($a_propos[0]->birthdate) ?></span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>Tel :</strong> <span <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="phone" data-id="1" data-table="a_propos"'; ?>><?= htmlspecialchars($a_propos[0]->phone) ?></span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>Adresse :</strong> <span <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="addr" data-id="1" data-table="a_propos"'; ?>><?= htmlspecialchars($a_propos[0]->addr) ?></span></li>
            </ul>
          </div>
          <div class="col-lg-6">
            <ul>
              <li><i class="bi bi-chevron-right"></i> <strong>Age :</strong> <span <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="age" data-id="1" data-table="a_propos"'; ?>><?= htmlspecialchars($a_propos[0]->age) ?> ans</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>Diplome :</strong> <span <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="degree" data-id="1" data-table="a_propos"'; ?>><?= htmlspecialchars($a_propos[0]->degree) ?></span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>Email :</strong> <span <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="email" data-id="1" data-table="a_propos"'; ?>><?= htmlspecialchars($a_propos[0]->email) ?></span></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="container-fluid text-center">
            <a id="custom-accent-btn" class="btn custom-accent-btn" href="#contact" role="button">Contactez-moi !</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- /a_propos Section -->