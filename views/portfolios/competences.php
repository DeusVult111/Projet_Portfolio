<!-- competences Section -->
<section id="competences" class="competences section light-background">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2 <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="title" data-id="5"'; ?>>
      <?= htmlspecialchars($competences[0]->title) ?>
    </h2>
    <p <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="5"'; ?>>
      <?= htmlspecialchars($competences[0]->content) ?>
    </p>
  </div><!-- End Section Title -->
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row competences-content competences-animation">
      <div class="col-lg-6">
        <div class="progress">
          <span class="skill"><span>HTML</span> <i class="val">95%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div><!-- End competences Item -->
        <div class="progress">
          <span class="skill"><span>CSS</span> <i class="val">70%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div><!-- End competences Item -->
        <div class="progress">
          <span class="skill"><span>JavaScript</span> <i class="val">40%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div><!-- End competences Item -->
        <div class="progress">
          <span class="skill"><span>Python</span> <i class="val">75%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div><!-- End competences Item -->
        <div class="progress">
          <span class="skill"><span>GIT</span> <i class="val">80%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div><!-- End competences Item -->
      </div>
      <div class="col-lg-6">
        <div class="progress">
          <span class="skill"><span>PHP</span> <i class="val">80%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div><!-- End competences Item -->
        <div class="progress">
          <span class="skill"><span>CMS</span> <i class="val">50%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div><!-- End competences Item -->
        <div class="progress">
          <span class="skill"><span>C#</span> <i class="val">40%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div><!-- End competences Item -->
        <div class="progress">
          <span class="skill"><span>SQL</span> <i class="val">65%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div><!-- End competences Item -->
        <div class="progress">
          <span class="skill"><span>Github</span> <i class="val">80%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div><!-- End competences Item -->
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