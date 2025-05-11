<!-- Contact Section -->
<section id="contact" class="contact section light-background">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2 <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="title" data-id="28"'; ?>>
      <?= htmlspecialchars($contact[0]->title) ?>
    </h2>
    <p <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="28"'; ?>>
      <?= htmlspecialchars($contact[0]->content) ?>
    </p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row gy-4">
      <div class="col-lg-5">
        <div class="info-wrap">
          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <i class="bi bi-geo-alt flex-shrink-0"></i>
            <div>
              <h3 <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="title" data-id="29"'; ?>>
                Adresse
              </h3>
              <p <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="29"'; ?>>
                4 Impasse de la Prairie, Lieu-dit Charbonnier, 43340 LANDOS
              </p>
            </div>
          </div><!-- End Info Item -->

          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <i class="bi bi-telephone flex-shrink-0"></i>
            <div>
              <h3 <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="title" data-id="30"'; ?>>
                Téléphone
              </h3>
              <p <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="30"'; ?>>
                06 08 76 24 68
              </p>
            </div>
          </div><!-- End Info Item -->

          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <i class="bi bi-envelope flex-shrink-0"></i>
            <div>
              <h3 <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="title" data-id="31"'; ?>>
                Email
              </h3>
              <p <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="31"'; ?>>
                lacnathan926@gmail.com
              </p>
            </div>
          </div><!-- End Info Item -->

          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3461.7491612926055!2d3.8412924204758276!3d44.86020309987636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b4aea07fc8b8bb%3A0x2cf6460f6a0601f9!2s4%20Imp.%20de%20la%20Prairie%2C%2043340%20Landos!5e0!3m2!1sfr!2sfr!4v1742807140179!5m2!1sfr!2sfr" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>

      <div class="col-lg-7">
        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
          <div class="row gy-4">
            <div class="col-md-6">
              <label for="name-field" class="pb-2">Nom</label>
              <input type="text" name="name" id="name-field" class="form-control" required="">
            </div>

            <div class="col-md-6">
              <label for="email-field" class="pb-2">Email</label>
              <input type="email" class="form-control" name="email" id="email-field" required="">
            </div>

            <div class="col-md-12">
              <label for="subject-field" class="pb-2">Objet</label>
              <input type="text" class="form-control" name="subject" id="subject-field" required="">
            </div>

            <div class="col-md-12">
              <label for="message-field" class="pb-2">Message</label>
              <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
            </div>

            <div class="col-md-12 text-center">
              <div class="loading">Chargement</div>
              <div class="error-message"></div>
              <div class="sent-message">Votre message a bien été envoyé. Merci !</div>

              <button type="submit">Envoyer</button>
            </div>
          </div>
        </form>
      </div><!-- End Contact Form -->
    </div>
  </div>
</section><!-- /Contact Section -->