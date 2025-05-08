<!-- accueil Section -->
<section id="accueil" class="accueil section dark-background">
  <img src="webroot/img/accueil_bg_bn.jpg" alt="" data-aos="fade-in" class="">
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <h2 <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="title" data-id="1"'; ?>>
      <?= htmlspecialchars($sections[0]->title) ?>
    </h2>
    <p <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="1"'; ?>> Je suis <span class="typed" data-typed-items="<?= htmlspecialchars($sections[0]->content) ?>"></span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
  </div>
</section><!-- /accueil Section -->