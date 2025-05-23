<!-- Portfolio Section -->
<section id="portfolio" class="portfolio section light-background">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2 <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="title" data-id="13" data-table="portfolio"'; ?>>
      <?= htmlspecialchars($portfolio[0]->title) ?>
    </h2>
    <p <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="13" data-table="portfolio"'; ?>>
      <?= htmlspecialchars($portfolio[0]->content) ?>
    </p>
  </div><!-- End Section Title -->

  <div class="container">
    <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
      <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
        <li data-filter="*" class="filter-active">Tous</li>
        <li data-filter=".filter-php">PHP</li>
        <li data-filter=".filter-csharp">C#</li>
        <li data-filter=".filter-cms">CMS</li>
        <li data-filter=".filter-html-css-js">HTML/CSS/JS</li>
      </ul><!-- End Portfolio Filters -->

      <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-php">
          <div class="portfolio-content h-100">
            <img src="webroot/img/portfolio/Garage_audi_MVC.png" class="img-fluid" alt="Garage Audi">
            <div class="portfolio-info">
              <h4 <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="title" data-id="14" data-table="portfolio"'; ?>>
                Garage Audi
              </h4>
              <p <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="14" data-table="portfolio"'; ?>>
                Site de gestion de véhicules
              </p>
              <a href="#portfolioModal" data-bs-toggle="modal" title="More Details" class="details-link"><i class="bi bi-zoom-in"></i></a>
            </div>
          </div>
        </div><!-- End Portfolio Item -->
        <!-- Modal -->
        <div class="modal fade" id="portfolioModal" tabindex="-1" aria-labelledby="portfolioModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title" id="portfolioModalLabel">Garage Audi</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <!-- Carrousel à droite -->
                  <div class="col-lg-8">
                    <div id="carouselIndicators" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      </div>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="webroot/img/portfolio/Garage_audi_MVC.png" class="d-block w-100" alt="Garage Audi 1">
                        </div>
                        <div class="carousel-item">
                          <img src="webroot/img/portfolio/Garage audi_MVC_1.png" class="d-block w-100" alt="Garage Audi 2">
                        </div>
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>
                  <!-- Description à gauche -->
                  <div class="col-lg-4">
                    <p <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="14" data-table="portfolio"'; ?>>
                      Ce projet est une application de gestion de véhicules pour un garage Audi. construit sous forme de framework Modèle Vue Contrôleur, avec l'utilisation de CRUD et de Bootstrap pour le design.
                    </p>
                    <ul>
                      <li><strong>Technologies :</strong> PHP, MySQL, Bootstrap</li>
                      <li><strong>Année :</strong> 2024</li>
                      <li><strong>Modèle :</strong>MVC</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-php">
          <div class="portfolio-content h-100">
            <img src="webroot/img/portfolio/ProjetD.png" class="img-fluid" alt="ProjetD">
            <div class="portfolio-info">
              <h4 <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="title" data-id="15" data-table="portfolio"'; ?>>
                ProjetD
              </h4>
              <p <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="15" data-table="portfolio"'; ?>>
                Site de gestion de courses de voiture
              </p>
              <a href="#portfolioModal_1" data-bs-toggle="modal" title="More Details" class="details-link"><i class="bi bi-zoom-in"></i></a>
            </div>
          </div>
        </div><!-- End Portfolio Item -->
        <!-- Modal -->
        <div class="modal fade" id="portfolioModal_1" tabindex="-1" aria-labelledby="portfolioModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title" id="portfolioModalLabel">ProjetD</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <!-- Carrousel à droite -->
                  <div class="col-lg-8">
                    <div id="carouselIndicators_1" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselIndicators_1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselIndicators_1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselIndicators_1" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      </div>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="webroot/img/portfolio/ProjetD.png" class="d-block w-100" alt="ProjetD 1">
                        </div>
                        <div class="carousel-item">
                          <img src="webroot/img/portfolio/ProjetD_1.png" class="d-block w-100" alt="ProjetD 2">
                        </div>
                        <div class="carousel-item">
                          <img src="webroot/img/portfolio/ProjetD_2.png" class="d-block w-100" alt="ProjetD 3">
                        </div>
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicators_1" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators_1" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>
                  <!-- Description à gauche -->
                  <div class="col-lg-4">
                    <p <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="15" data-table="portfolio"'; ?>>
                      Ce projet est une application de gestion de véhicules, de circuit et de pilote pour des courses automobile. construit sous forme de framework Modèle Vue Contrôleur et avec l'utilisation de CRUD et de Bootstrap pour le design.
                    </p>
                    <ul>
                      <li><strong>Technologies :</strong> PHP, MySQL, Bootstrap</li>
                      <li><strong>Année :</strong> 2024</li>
                      <li><strong>Modèle :</strong>MVC</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-csharp">
          <div class="portfolio-content h-100">
            <img src="webroot/img/portfolio/Loto (1).png" class="img-fluid" alt="Loto">
            <div class="portfolio-info">
              <h4 <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="title" data-id="16" data-table="portfolio"'; ?>>
                Loto
              </h4>
              <p <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="16" data-table="portfolio"'; ?>>
                Application tirant 6 numéros au hasard
              </p>
              <a href="#portfolioModal_2" data-bs-toggle="modal" title="More Details" class="details-link"><i class="bi bi-zoom-in"></i></a>
            </div>
          </div>
        </div><!-- End Portfolio Item -->
        <!-- Modal -->
        <div class="modal fade" id="portfolioModal_2" tabindex="-1" aria-labelledby="portfolioModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title" id="portfolioModalLabel">Loto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <!-- Carrousel à droite -->
                  <div class="col-lg-8">
                    <div id="carouselIndicators_2" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselIndicators_2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselIndicators_2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      </div>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="webroot/img/portfolio/Loto (2).png" class="d-block w-100" alt="Loto 1">
                        </div>
                        <div class="carousel-item">
                          <img src="webroot/img/portfolio/Loto (1).png" class="d-block w-100" alt="Loto 2">
                        </div>
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicators_2" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators_2" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>
                  <!-- Description à gauche -->
                  <div class="col-lg-4">
                    <p <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="16" data-table="portfolio"'; ?>>
                      Ce projet est une application de tirage aléatoire des numéros du loto. Programmé en C# et utilisant WinForms pour être affiché dans une fenêtre.
                    </p>
                    <ul>
                      <li><strong>Langage :</strong>C#</li>
                      <li><strong>Année :</strong>2024</li>
                      <li><strong>Modèle :</strong>WinForm</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-csharp">
          <div class="portfolio-content h-100">
            <img src="webroot/img/portfolio/Bataille (3).png" class="img-fluid" alt="Bataille">
            <div class="portfolio-info">
              <h4 <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="title" data-id="17" data-table="portfolio"'; ?>>
                Bataille
              </h4>
              <p <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="17" data-table="portfolio"'; ?>>
                Application faisant jouer deux joueurs automatiquement
              </p>
              <a href="#portfolioModal_3" data-bs-toggle="modal" title="More Details" class="details-link"><i class="bi bi-zoom-in"></i></a>
            </div>
          </div>
        </div><!-- End Portfolio Item -->
        <!-- Modal -->
        <div class="modal fade" id="portfolioModal_3" tabindex="-1" aria-labelledby="portfolioModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title" id="portfolioModalLabel">Bataille</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <!-- Carrousel à droite -->
                  <div class="col-lg-8"></div>                    
                    <div id="carouselIndicators_3" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselIndicators_3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselIndicators_3" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselIndicators_3" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      </div>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="webroot/img/portfolio/Bataille (1).png" class="d-block w-100" alt="Bataille 1">
                        </div>
                        <div class="carousel-item">
                          <img src="webroot/img/portfolio/Bataille (2).png" class="d-block w-100" alt="Bataille 2">
                        </div>
                        <div class="carousel-item">
                          <img src="webroot/img/portfolio/Bataille (3).png" class="d-block w-100" alt="Bataille 3">
                        </div>
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicators_3" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators_3" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>
                  <!-- Description à gauche -->
                  <div class="col-lg-4">
                    <p <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="17" data-table="portfolio"'; ?>>
                      Ce projet est une application où 2 joueurs (bots) s'affrontent et déterminent un vainqueur suite à plusieurs tours et cartes tirées aléatoirement. Programmé en C# et utilisant WinForms pour être affiché dans une fenêtre et une Programmation Orientée Objet (POO).
                    </p>
                    <ul>
                      <li><strong>Langage :</strong>C#</li>
                      <li><strong>Année :</strong>2024</li>
                      <li><strong>Modèle :</strong>WinForm, Programmation Orientée Objet</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-cms">
          <div class="portfolio-content h-100">
            <img src="webroot/img/portfolio/Site St-Jacques de Compostelle (1).png" class="img-fluid" alt="Site Ensemble Saint Jacques de Compostelle">
            <div class="portfolio-info">
              <h4 <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="title" data-id="18" data-table="portfolio"'; ?>>
                Site Ensemble Saint Jacques de Compostelle
              </h4>
              <p <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="18" data-table="portfolio"'; ?>>
                Site regroupant l'ensemble des sites des différents établissements de Saint Jacques de Compostelle
              </p>
              <a href="#portfolioModal_4" data-bs-toggle="modal" title="More Details" class="details-link"><i class="bi bi-zoom-in"></i></a>
            </div>
          </div>
        </div><!-- End Portfolio Item -->
        <!-- Modal -->
        <div class="modal fade" id="portfolioModal_4" tabindex="-1" aria-labelledby="portfolioModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title" id="portfolioModalLabel">Site Ensemble Saint Jacques de Compostelle</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <!-- Carrousel à droite -->
                  <div class="col-lg-8">
                    <div id="carouselIndicators_4" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselIndicators_4" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselIndicators_4" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselIndicators_4" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselIndicators_4" data-bs-slide-to="3" aria-label="Slide 4"></button>
                      </div>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="webroot/img/portfolio/Site St-Jacques de Compostelle (1).png" class="d-block w-100" alt="Site St-Jacques de Compostelle 1">
                        </div>
                        <div class="carousel-item">
                          <img src="webroot/img/portfolio/Site St-Jacques de Compostelle (2).png" class="d-block w-100" alt="Site St-Jacques de Compostelle 2">
                        </div>
                        <div class="carousel-item">
                          <img src="webroot/img/portfolio/Site St-Jacques de Compostelle (3).png" class="d-block w-100" alt="Site St-Jacques de Compostelle 3">
                        </div>
                        <div class="carousel-item">
                          <img src="webroot/img/portfolio/Site St-Jacques de Compostelle (4).png" class="d-block w-100" alt="Site St-Jacques de Compostelle 4">
                        </div>
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicators_4" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators_4" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>
                  <!-- Description à gauche -->
                  <div class="col-lg-4">
                    <p <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="18" data-table="portfolio"'; ?>>
                      Ce projet, effectué durant mon stage de deuxième année, est une refonte du site de l'ensemble scolaire Saint Jacques de Compostelle.
                    </p>
                    <ul>
                      <li><strong>Technologie :</strong> CMS Propriétaire à l'entreprise</li>
                      <li><strong>Année :</strong> 2025</li>
                      <li><strong>Modèle :</strong> CMS</li>
                      <li><strong>Lien :</strong> <a href="https://saintjacques43.fr/compostelle-" target="_blank" rel="noopener noreferrer">Cliquez-ici <i class="bi bi-arrow-right-square"></i> </a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-cms">
          <div class="portfolio-content h-100">
            <img src="webroot/img/portfolio/Site St Do (1).png" class="img-fluid" alt="Site St Dominique">
            <div class="portfolio-info">
              <h4 <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="title" data-id="19" data-table="portfolio"'; ?>>
                Site collège Saint Dominique
              </h4>
              <p <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="19" data-table="portfolio"'; ?>>
                Site vitrine présentant le collège Saint Dominique
              </p>
              <a href="#portfolioModal_5" data-bs-toggle="modal" title="More Details" class="details-link"><i class="bi bi-zoom-in"></i></a>
            </div>
          </div>
        </div><!-- End Portfolio Item -->
        <!-- Modal -->
        <div class="modal fade" id="portfolioModal_5" tabindex="-1" aria-labelledby="portfolioModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title" id="portfolioModalLabel">Site collège Saint Dominique</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <!-- Carrousel à droite -->
                  <div class="col-lg-8">
                    <div id="carouselIndicators_5" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselIndicators_5" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselIndicators_5" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselIndicators_5" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselIndicators_5" data-bs-slide-to="3" aria-label="Slide 4"></button>
                      </div>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="webroot/img/portfolio/Site St Do (1).png" class="d-block w-100" alt="Site St Dominique 1">
                        </div>
                        <div class="carousel-item">
                          <img src="webroot/img/portfolio/Site St Do (2).png" class="d-block w-100" alt="Site St Dominique 2">
                        </div>
                        <div class="carousel-item">
                          <img src="webroot/img/portfolio/Site St Do (3).png" class="d-block w-100" alt="Site St Dominique 3">
                        </div>
                        <div class="carousel-item">
                          <img src="webroot/img/portfolio/Site St Do (4).png" class="d-block w-100" alt="Site St Dominique 4">
                        </div>
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicators_5" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators_5" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>
                  <!-- Description à gauche -->
                  <div class="col-lg-4">
                    <p <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="19" data-table="portfolio"'; ?>>
                      Ce projet, effectué durant mon stage de deuxième année, est une mise à jour esthétique du site du collège Saint-Dominique.
                    </p>
                    <ul>
                      <li><strong>Technologie :</strong> CMS Propriétaire à l'entreprise</li>
                      <li><strong>Année :</strong> 2025</li>
                      <li><strong>Modèle :</strong> CMS</li>
                      <li><strong>Lien :</strong> <a href="https://www.saintdolemonastier.fr/ecole-college-" target="_blank" rel="noopener noreferrer"> Cliquez-ici <i class="bi bi-arrow-right-square"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-cms">
          <div class="portfolio-content h-100">
            <img src="webroot/img/portfolio/Site Ecole Polignac (1).png" class="img-fluid" alt="Site Ecole Polignac">
            <div class="portfolio-info">
              <h4 <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="title" data-id="20" data-table="portfolio"'; ?>>
                Site école Sainte Jeanne d'Arc
              </h4>
              <p <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="20" data-table="portfolio"'; ?>>
                Site vitrine présentant l'école Sainte Jeanne d'Arc
              </p>
              <a href="#portfolioModal_6" data-bs-toggle="modal" title="More Details" class="details-link"><i class="bi bi-zoom-in"></i></a>
            </div>
          </div>
        </div><!-- End Portfolio Item -->
        <!-- Modal -->
        <div class="modal fade" id="portfolioModal_6" tabindex="-1" aria-labelledby="portfolioModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title" id="portfolioModalLabel">Site école Sainte Jeanne d'Arc</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <!-- Carrousel à droite -->
                  <div class="col-lg-8">
                    <div id="carouselIndicators_6" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselIndicators_6" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselIndicators_6" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselIndicators_6" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselIndicators_6" data-bs-slide-to="3" aria-label="Slide 4"></button>
                      </div>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="webroot/img/portfolio/Site Ecole Polignac (1).png" class="d-block w-100" alt="Site Ecole Polignac 1">
                        </div>
                        <div class="carousel-item">
                          <img src="webroot/img/portfolio/Site Ecole Polignac (2).png" class="d-block w-100" alt="Site Ecole Polignac 2">
                        </div>
                        <div class="carousel-item">
                          <img src="webroot/img/portfolio/Site Ecole Polignac (3).png" class="d-block w-100" alt="Site Ecole Polignac 3">
                        </div>
                        <div class="carousel-item">
                          <img src="webroot/img/portfolio/Site Ecole Polignac (4).png" class="d-block w-100" alt="Site Ecole Polignac 4">
                        </div>
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicators_6" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators_6" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>
                  <!-- Description à gauche -->
                  <div class="col-lg-4">
                    <p <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="20" data-table="portfolio"'; ?>>
                      Ce projet, effectué durant mon stage de deuxième année, est une mise à jour esthétique du site de l'école Sainte Jeanne d'Arc de Polignac.
                    </p>
                    <ul>
                      <li><strong>Technologie :</strong> CMS Propriétaire à l'entreprise</li>
                      <li><strong>Année :</strong> 2025</li>
                      <li><strong>Modèle :</strong> CMS</li>
                      <li><strong>Lien :</strong> <a href="https://www.ecole-polignac.fr/ecole-" target="_blank" rel="noopener noreferrer"> Cliquez-ici <i class="                        bi bi-arrow-right-square"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-html-css-js">
          <div class="portfolio-content h-100">
            <img src="webroot/img/portfolio/Maquette site theatre mayapo (1).png" class="img-fluid" alt="Maquette site theatre mayapo">
            <div class="portfolio-info">
              <h4 <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="title" data-id="21" data-table="portfolio"'; ?>>
                Maquette Site théâtre Mayapo
              </h4>
              <p <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="21" data-table="portfolio"'; ?>>
                Maquette réalisée pour le théâtre Mayapo
              </p>
              <a href="#portfolioModal_7" data-bs-toggle="modal" title="More Details" class="details-link"><i class="bi bi-zoom-in"></i></a>
            </div>
          </div>
        </div><!-- End Portfolio Item -->
        <!-- Modal -->
        <div class="modal fade" id="portfolioModal_7" tabindex="-1" aria-labelledby="portfolioModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title" id="portfolioModalLabel">Maquette Site théâtre Mayapo</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <!-- Carrousel à droite -->
                  <div class="col-lg-8">
                    <div id="carouselIndicators_7" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselIndicators_7" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselIndicators_7" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      </div>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="webroot/img/portfolio/Maquette site theatre mayapo (1).png" class="d-block w-100" alt="Maquette site theatre mayapo 1">
                        </div>
                        <div class="carousel-item">
                          <img src="webroot/img/portfolio/Maquette site theatre mayapo (2).png" class="d-block w-100" alt="Maquette site theatre mayapo 2">
                        </div>
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicators_7" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators_7" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>
                  <!-- Description à gauche -->
                  <div class="col-lg-4">
                    <p <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="21" data-table="portfolio"'; ?>>
                      Ce projet, effectué durant mon stage de deuxième année, est une maquette de site internet réalisée pour le théâtre Mayapo, adaptée d'une template Porto.
                    </p>
                    <ul>
                      <li><strong>Technologie :</strong> HTML, CSS, JS</li>
                      <li><strong>Année :</strong> 2025</li>
                      <li><strong>Modèle :</strong> Template Porto</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-php">
          <div class="portfolio-content h-100">
            <img src="webroot/img/portfolio/Gestion BD (1).png" class="img-fluid" alt="Gestion BD">
            <div class="portfolio-info">
              <h4 <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="title" data-id="22" data-table="portfolio"'; ?>>
                Application de gestion de bandes dessinées
              </h4>
              <p <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="22" data-table="portfolio"'; ?>>
                Application permettant de gérer une collection de bandes dessinées
              </p>
              <a href="#portfolioModal_8" data-bs-toggle="modal" title="More Details" class="details-link"><i class="bi bi-zoom-in"></i></a>
            </div>
          </div>
        </div><!-- End Portfolio Item -->
        <!-- Modal -->
        <div class="modal fade" id="portfolioModal_8" tabindex="-1" aria-labelledby="portfolioModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title" id="portfolioModalLabel">Application de gestion de bandes dessinées</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <!-- Carrousel à droite -->
                  <div class="col-lg-8">
                    <div id="carouselIndicators_8" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselIndicators_8" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselIndicators_8" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselIndicators_8" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselIndicators_8" data-bs-slide-to="3" aria-label="Slide 4"></button>
                      </div>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="webroot/img/portfolio/Gestion BD (1).png" class="d-block w-100" alt="Gestion BD 1">
                        </div>
                        <div class="carousel-item">
                          <img src="webroot/img/portfolio/Gestion BD (2).png" class="d-block w-100" alt="Gestion BD 2">
                        </div>
                        <div class="carousel-item">
                          <img src="webroot/img/portfolio/Gestion BD (3).png" class="d-block w-100" alt="Gestion BD 3">
                        </div>
                        <div class="carousel-item">
                          <img src="webroot/img/portfolio/Gestion BD (4).png" class="d-block w-100" alt="Gestion BD 4">
                        </div>
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicators_8" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators_8" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>
                  <!-- Description à gauche -->
                  <div class="col-lg-4">
                    <p <?php if ($this->Session->isLogged()) echo 'contenteditable="true" data-field="content" data-id="22" data-table="portfolio"'; ?>>
                      Ce projet est une application de gestion d'une collection de bandes dessinées, permettant ainsi de gérer les dessinateurs, les scénaristes, les éditeurs et les albums à l'aide de CRUD.
                    </p>
                    <ul>
                      <li><strong>Technologie :</strong> PHP, HTML, CSS, MySQL</li>
                      <li><strong>Année :</strong> 2024</li>
                      <li><strong>Modèle :</strong> CRUD PHP</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- End Portfolio Container -->
    </div>
  </div>
</section><!-- /Portfolio Section -->