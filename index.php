<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PortFolio - Starnort Florian</title>

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Starnort Florian</a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Accueil</a></li>
          <li><a class="nav-link scrollto" href="#about">Profil</a></li>
          <li><a class="nav-link scrollto" href="#services">Compétences</a></li>
          <li><a class="nav-link scrollto " href="#work">Portfolio</a></li>
          <li><a class="nav-link scrollto " href="#contact">Contact</a></li>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <div id="hero" class="hero route bg-image" style="background-image: url(assets/img/Photo_banner.jpg)">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <h1 class="hero-title mb-4">Je suis Starnort Florian</h1>
          <p class="hero-subtitle"><span class="typed" data-typed-items="Développeur web, Développeur mobile"></span>
          </p>
        </div>
      </div>
    </div>
  </div><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-sm-6 col-md-5">
                      <div class="about-img">
                        <img src="assets/img/profil.jpg" class="img-fluid rounded b-shadow-a" alt="">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-7">
                      <div class="about-info">
                        <p><span class="title-s">Nom: </span> <span>Starnort Florian</span></p>
                        <p><span class="title-s">Profil: </span> <span>Développeur Full-Stack</span></p>
                        <p><span class="title-s">Email: </span> <span>Starnorf.pro@gmail.com</span></p>
                        <p><span class="title-s">Téléphone: </span> <span>0692 56 39 42</span></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="about-me pt-4 pt-md-0">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        A propos de moi
                      </h5>
                    </div>
                    <p class="lead">
                      Tout a commencé quand j'ai découvert la programmation avec des cartes arduino pendant mon BAC
                      STI2D.
                      Je me suis ensuite intéressé à la programmation web et mobile.
                    </p>
                    <p class="lead">
                      Je suis un développeur passionné par la programmation et les nouvelles technologies. J'ai
                      commencé par apprendre le HTML et le CSS puis j'ai appris le PHP, le JavaScript et le Python et
                      continue de me former à de nouveaux langages, Framework et bibliothèques.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services-mf pt-5 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Compétences
              </h3>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-6">
            <div class="skill-mf">
              <p class="title-s">BACK-END</p>
              <span>PHP</span> <span class="pull-right">90%</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span>SQL</span> <span class="pull-right">75%</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span>SYMFONY</span> <span class="pull-right">70%</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span>PYTHON</span> <span class="pull-right">70%</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>

              <div class="skill-mf mt-5">
                <p class="title-s">FRONT-END</p>
                <span>HTML</span> <span class="pull-right">75%</span>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span>CSS3</span> <span class="pull-right">75%</span>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span>BOOTSTRAP</span> <span class="pull-right">80%</span>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span>JAVASCRIPT/JQUERY</span> <span class="pull-right">65%</span>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <div class="skill-mf mt-5">
                  <p class="title-s">CMS</p>
                  <span>WORDPRESS</span> <span class="pull-right">50%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>

                <div class="skill-mf mt-5">
                  <p class="title-s">DIVERS</p>
                  <span>LINUX</span> <span class="pull-right">70%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <span>WINDOWS</span> <span class="pull-right">90%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <!-- Afficher une image de mon cv et un bouton pour le télécharger le télécharger -->
            <div class="about-img">
              <img src="assets/img/cv.png" class="img-fluid rounded b-shadow-a" alt="">
              <a href="assets/img/StarnortFlorian_CV.pdf" download="cv.jpg" class="button button-a button-big button-rouded align-items-center" style="display: flex; width: 50%; justify-content: center; margin: auto;">
                Télécharger mon CV</a>
            </div>
          </div>
        </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <div class="testimonials paralax-mf bg-image" style="background-image: url(assets/img/citation.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="testimonial-box">
                    <div class="content-test">
                      <p class="description lead">
                        La seule façon de faire du bon travail, c'est d'aimer ce que vous faites.</br> - Steve Jobs,
                        co-fondateur d'Apple Inc.
                      </p>
                    </div>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-box">
                    <div class="content-test">
                      <p class="description lead">
                        Je n'ai pas échoué. J'ai juste trouvé 10 000 moyens qui ne fonctionnent pas.</br> - Thomas
                        Edison, inventeur et homme d'affaires américain.
                      </p>
                    </div>
                  </div>
                </div><!-- End testimonial item -->
              </div>
              <div class="swiper-pagination"></div>
            </div>

            <!-- <div id="testimonial-mf" class="owl-carousel owl-theme">
          
        </div> -->
          </div>
        </div>
      </div>
    </div><!-- End Testimonials Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="work" class="portfolio-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Portfolio
              </h3>
              <p class="subtitle-a">
                Voici quelques projets sur lesquels j'ai travaillé
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/portfolio.png" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img">
                  <img src="assets/img/portfolio.png" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Portfolio</h2>
                    <div class="w-more">
                      <span class="w-ctegory">BOOTSTRAP,PHP,JS</span> / <span class="w-date">31/05/2024</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="index.php"> <span class="bi bi-plus-circle"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/IMC.png" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img">
                  <img src="assets/img/IMC.png" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Mini projet IMC</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Application web - JS</span> / <span class="w-date">18 Mai. 2023</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href=""> <span class="bi bi-plus-circle"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Portfolio Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-mf">
              <div id="contact" class="box-shadow-full">
                <div class="row">
                  <div class="col-md-6">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        Envoyez moi un message
                      </h5>
                    </div>
                    <div>
                      <form action="forms/contact.php" method="post" role="form">
                        <div class="row">
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom" required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Objet" required>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                          </div>
                          <div class="col-md-12 text-center">
                            <input type="hidden" name="contact" value="1">
                            <button type="submit" class="button button-a button-big button-rouded">Envoyez votre
                              message</button>
                          </div>
                          <div class="col-md-12 text-center">
                            <?php if (isset($_SESSION['message'])) :
                              echo $_SESSION['message'];
                              unset($_SESSION['message']);
                            endif;
                            ?>

                          </div>

                        </div>
                      </form>

                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="title-box-2 pt-4 pt-md-0">
                      <h5 class="title-left">
                        Contactez moi
                      </h5>
                    </div>
                    <div class="more-info">
                      <p class="lead">
                        Vous pouvez me contacter via le formulaire ou via les informations ci-dessous.
                      </p>
                      <ul class="list-ico">
                        <li><span class="bi bi-phone"></span> 0692 56 39 42 </li>
                        <li><span class="bi bi-envelope"></span> Starnorf.pro@gmail.com</li>
                      </ul>
                    </div>
                    <div class="socials">
                      <ul>
                        <li><a href="https://www.linkedin.com/in/florian-starnort-005541240/"><span class="ico-circle"><i class="bi bi-linkedin"></i></span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <p class="copyright">&copy; Copyright <strong>Starnort Florian</strong>. All Rights Reserved</p>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>