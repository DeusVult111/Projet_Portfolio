<!-- a_propos Section -->
<section id="a_propos" class="a_propos section">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2 <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="title" data-id="2"'; ?>>
      <?= htmlspecialchars($sections[1]->title) ?>
    </h2>
    <p <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="2"'; ?>>
      <?= htmlspecialchars($sections[1]->content) ?>
    </p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row gy-4 justify-content-center">
      <div class="col-lg-4">
        <img src="webroot/img/img_profile.jpg" class="img-fluid" alt="">
      </div>
      <div class="col-lg-8 content">
        <h2 <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="title" data-id="3"'; ?>>
          <?= htmlspecialchars($sections[2]->title) ?>
        </h2>
        <p class="fst-italic py-3" <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="3"'; ?>>
          <?= htmlspecialchars($sections[2]->content) ?>
        </p>
        <div class="row">
          <div class="col-lg-6">
            <ul>
              <li><i class="bi bi-chevron-right"></i> <strong>Naissance :</strong> <span <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="birthdate" data-id="4"'; ?>>29 Avril 2004</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>Tel :</strong> <span <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="phone" data-id="4"'; ?>>06 08 76 24 68</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>Adresse :</strong> <span <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="address" data-id="4"'; ?>>43340 LANDOS</span></li>
            </ul>
          </div>
          <div class="col-lg-6">
            <ul>
              <li><i class="bi bi-chevron-right"></i> <strong>Age :</strong> <span <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="age" data-id="4"'; ?>>20 ans</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>Diplome :</strong> <span <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="degree" data-id="4"'; ?>>Bac +2 BTS SIO</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>Email :</strong> <span <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="email" data-id="4"'; ?>>lacnathan926@gmail.com</span></li>
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