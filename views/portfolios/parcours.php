<!-- parcours Section -->
<section id="parcours" class="parcours section">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2 <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="title" data-id="6" data-table="parcours"'; ?>>
      <?= htmlspecialchars($parcours[0]->title) ?>
    </h2>
    <p <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="6" data-table="parcours"'; ?>>
      <?= htmlspecialchars($parcours[0]->content) ?>
    </p>
  </div><!-- End Section Title -->
  <div class="container">
    <div class="row">
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <h3 class="parcours-title">Formation</h3>
        <div class="parcours-item">
          <h4 <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="title" data-id="7" data-table="parcours"'; ?>>
            Bac Général - Classe de Première
          </h4>
          <h5 <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="date" data-id="7" data-table="parcours"'; ?>>
            2021 - 2022
          </h5>
          <p <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="7" data-table="parcours"'; ?>>
            <em>Lycée Général et technologique Simone Weil, 43000, Le Puy-en-Velay</em>
          </p>
          <p <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="7" data-table="parcours"'; ?>>
            Spécialité : Mathématique, Numerique et Science Informatique, Physique
          </p>
        </div><!-- Edn parcours Item -->
        <div class="parcours-item">
          <h4 <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="title" data-id="8" data-table="parcours"'; ?>>
            Bac Général - Classe de Terminale
          </h4>
          <h5 <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="date" data-id="8" data-table="parcours"'; ?>>
            2022 - 2023
          </h5>
          <p <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="8" data-table="parcours"'; ?>>
            <em>Lycée Général et technologique Simone Weil, 43000, Le Puy-en-Velay</em>
          </p>
          <p <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="8" data-table="parcours"'; ?>>
            Spécialité : Mathématique, Numerique et Science Informatique
          </p>
        </div><!-- Edn parcours Item -->
        <div class="parcours-item">
          <h4 <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="title" data-id="9" data-table="parcours"'; ?>>
            BTS - Service Informatique aux Organisations <br><em>Première année</em>
          </h4>
          <h5 <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="date" data-id="9" data-table="parcours"'; ?>>
            2023 - 2024
          </h5>
          <p <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="9" data-table="parcours"'; ?>>
            <em>Pôle La Chartreuse, 43700, Brive-Charensac</em>
          </p>
          <p <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="9" data-table="parcours"'; ?>>
            Option : Solutions Logicielles et Applications Metiers (deuxième semèstres)
          </p>
        </div><!-- Edn parcours Item -->
        <div class="parcours-item">
          <h4 <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="title" data-id="10" data-table="parcours"'; ?>>
            BTS - Service Informatique aux Organisations <br><em>Deuxième année</em>
          </h4>
          <h5 <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="date" data-id="10" data-table="parcours"'; ?>>
            2024 - 2025
          </h5>
          <p <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="10" data-table="parcours"'; ?>>
            <em>Pôle La Chartreuse, 43700, Brive-Charensac</em>
          </p>
          <p <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="10" data-table="parcours"'; ?>>
            Option : Solutions Logicielles et Applications Métiers
          </p>
        </div><!-- Edn parcours Item -->
      </div>

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
        <h3 class="parcours-title">Experience Professionnelle</h3>
        <div class="parcours-item">
          <h4 <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="title" data-id="11" data-table="parcours"'; ?>>
            Stage - Première année de BTS
          </h4>
          <h5 <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="date" data-id="11" data-table="parcours"'; ?>>
            3 juin 2024 - 27 juin 2024
          </h5>
          <p <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="11" data-table="parcours"'; ?>>
            <em>            Télétravail, Nacre Informatique</em>
          </p>
          <ul>
            <li <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="11" data-table="parcours"'; ?>>
              Création d'un site vitrine pour une association
            </li>
          </ul>
        </div><!-- Edn parcours Item -->

        <div class="parcours-item">
          <h4 <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="title" data-id="12" data-table="parcours"'; ?>>
            Stage - Deuxième année de BTS
          </h4>
          <h5 <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="date" data-id="12" data-table="parcours"'; ?>>
            janvier 2025 - 21 fevrier 2025
          </h5>
          <p <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="12" data-table="parcours"'; ?>>
            <em>Télétravail, 3dfi.net</em>
          </p>
          <ul>
            <li <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="12" data-table="parcours"'; ?>>
              Amélioration design de site internet client
            </li>
            <li <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="12" data-table="parcours"'; ?>>
              Remplissage de site internet client
            </li>
            <li <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="12" data-table="parcours"'; ?>>
              Correction de bugs
            </li>
            <li <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="12" data-table="parcours"'; ?>>
              Conception d'une maquette de site internet
            </li>
            <li <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="12" data-table="parcours"'; ?>>
              Montage Video / Photo
            </li>
            <li <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="12" data-table="parcours"'; ?>>
              Ecoute du client et solutions apportées en conséquence
            </li>
          </ul>
        </div><!-- Edn parcours Item -->
      </div>
    </div>
  </div>
</section><!-- /parcours Section -->