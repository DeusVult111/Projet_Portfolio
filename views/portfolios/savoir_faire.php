<!-- Savoir-faire Section -->
<section id="savoir-faire" class="savoir-faire section">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2 <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="title" data-id="23"'; ?>>
      <?= htmlspecialchars($sections[6]->title) ?>
    </h2>
    <p <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="23"'; ?>>
      <?= htmlspecialchars($sections[6]->content) ?>
    </p>
  </div><!-- End Section Title -->

  <div class="container">
    <div class="row gy-4">
      <!-- Développement Web & UI/UX -->
      <div class="col-lg-6 col-md-6 savoir-faire-item d-flex" data-aos="fade-up" data-aos-delay="100">
        <div class="icon flex-shrink-0"><i class="bi bi-laptop"></i></div>
        <div>
          <h4 class="title" <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="title" data-id="24"'; ?>>
            Développement Web & UI/UX
          </h4>
          <p class="description" <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="24"'; ?>>
            Création de sites modernes et responsives avec un design intuitif. Utilisation des technologies HTML, CSS, PHP, JavaScript et frameworks adaptés.
          </p>
        </div>
      </div><!-- End Service Item -->

      <!-- Gestion de Bases de Données -->
      <div class="col-lg-6 col-md-6 savoir-faire-item d-flex" data-aos="fade-up" data-aos-delay="200">
        <div class="icon flex-shrink-0"><i class="bi bi-database"></i></div>
        <div>
          <h4 class="title" <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="title" data-id="25"'; ?>>
            Gestion de Bases de Données
          </h4>
          <p class="description" <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="25"'; ?>>
            Conception et optimisation des bases de données avec MySQL. Amélioration des performances et gestion sécurisée des données.
          </p>
        </div>
      </div><!-- End Service Item -->

      <!-- Cybersécurité -->
      <div class="col-lg-6 col-md-6 savoir-faire-item d-flex" data-aos="fade-up" data-aos-delay="300">
        <div class="icon flex-shrink-0"><i class="bi bi-shield-lock"></i></div>
        <div>
          <h4 class="title" <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="title" data-id="26"'; ?>>
            Cybersécurité
          </h4>
          <p class="description" <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="26"'; ?>>
            Mise en place de bonnes pratiques en sécurité informatique. Protection des données et gestion des accès pour éviter les failles.
          </p>
        </div>
      </div><!-- End Service Item -->

      <!-- Maintenance et Support IT -->
      <div class="col-lg-6 col-md-6 savoir-faire-item d-flex" data-aos="fade-up" data-aos-delay="400">
        <div class="icon flex-shrink-0"><i class="bi bi-tools"></i></div>
        <div>
          <h4 class="title" <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="title" data-id="27"'; ?>>
            Maintenance et Support IT
          </h4>
          <p class="description" <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="27"'; ?>>
            Assistance technique, installation de logiciels et résolution des bugs pour assurer un bon fonctionnement des systèmes.
          </p>
        </div>
      </div><!-- End Service Item -->
    </div>
  </div>
</section><!-- /savoir-faire Section -->