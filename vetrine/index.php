<?php
    $resultat=require_once("connect.php");

    $recup=$pdo->prepare("SELECT * FROM personnages");
    $recup->execute();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Numérique</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center justify-content-between">
        <div class="logo">
          <h1 class="text-light"><a href="index.html"><span>ODK</span></a></h1>
        </div>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="#hero">Acceuil</a></li>
            <li><a class="nav-link scrollto " href="#Personnalite">Personnalité</a></li>
            <li><a class="nav-link scrollto" href="#team">Equipe</a></li>
            <li><a class="getstarted scrollto " href="#contact">Contact</a></li>
            <li class="bi bi-list mobile-nav-toggle"></li>
          </ul>
        </nav><!-- .navbar -->

      </div><!-- End Header Container -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
      <h1>Orange Digital Kalanso</h1>
      <h2>“C’est l’innovation qui fait la différence entre un leader et un suiveur.”</h2>
      <a href="#Personnalite" class="btn-get-started scrollto">Commencer</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <section id="Personnalite" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-left">
          <h2>Les Personnalité du Numérique</h2>
          <p>
            Un voyage dans le temps permet au visiteur, tel un archéologue, de découvrir ces découvertes et leurs inventeurs, 
            à l’aide d’un masque futuriste : l’oculus rift. Chacun des personnages y est présenté dans une salle, 
            dans un décor en lien avec l’époque à laquelle il a vécu ou avec un lieu emblématique qu’il a fréquenté. 
            A chaque personnage est associée une bande son, qui permet de découvrir cette grande Histoire de l’informatique, 
            qui s’ancre dans le moyen âge, a modelé votre présent, et construit aujourd’hui les usages de demain.
          </p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Tout</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
        <?php while ($detail=$recup->fetch()){?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img style="height:300px;" src=<?=$detail['nom_image']?> alt="" class="img-fluid">
              <div class="portfolio-info">
                <h4><?=$detail['nom_complet']?></h4>
                <div class="portfolio-links">
  
                <a href="details.php?id=<?=$detail['id']?>" title="Plus de Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
      <?php
       }?>
      </div>
    </section>
    <section id="team" class="team">
      <div class="container">

        <div class="row">
          <div class="col-lg-4">
            <div class="section-title" data-aos="fade-right">
              <h2>Equipe</h2>
              <p>Développeur Full Stack</p>
              <p>Excellentes compétences en matière de communication et de travail en équipe.</p>
              <p>Bonnes compétences organisationnelles.</p>
              <p>Sens prononcé du détail.</p>
              <p>Connaissance de plusieurs bibliothèques et langages de premier plan (ex. : HTML/ CSS, JavaScript, XML, jQuery).</p>
              <p>Bonne connaissance des solutions communes.</p>
              <p>Bonne connaissance des bases de données (ex. : MySQL, MongoDB), serveurs Web (ex. : Apache) et conception UI/UX.</p>
              <p>Esprit analytique.</p>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="row">

              <div class="col-lg-6">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <div class="pic"><img style="height:200px;"  src="styles/images/IMG_1396.JPG" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>Toumany dit Christophe Diarra</h4>
                    <span>Scrum Master</span>
                    <p>Le Coach qui s'assure que le scrum est respecté.</p>
                    <div class="social">
                      <a href=""><i class="ri-twitter-fill"></i></a>
                      <a href=""><i class="ri-facebook-fill"></i></a>
                      <a href=""><i class="ri-instagram-fill"></i></a>
                      <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 mt-4 mt-lg-0">
                <div class="member" data-aos="zoom-in" data-aos-delay="200">
                  <div class="pic"><img style="height:200px;" src="assets/img/team/cv_photo.jpg" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>Fadiala Sidibé</h4>
                    <span>Product Owner</span>
                    <p>C'est le responsable de la définition et de la conception du site web.</p>
                    <div class="social">
                      <a href=""><i class="ri-twitter-fill"></i></a>
                      <a href=""><i class="ri-facebook-fill"></i></a>
                      <a href=""><i class="ri-instagram-fill"></i></a>
                      <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                    </div>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <div class="section-title">
              <h2>Contact</h2>
              <p>
                Steve Jobs (1955-2011)
              </p>
              <p>“Design est un drôle de mot.
                    Certaines personnes pensent que “design” signifie “à quoi un objet ressemble”.
                    Mais bien sûr, si vous creusez plus profond, c’est vraiment comment cet objet fonctionne.”
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 mt-4">
              <div class="info">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>fadtcd@gmail.com</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="info w-100 mt-4">
                <i class="bi bi-phone"></i>
                <h4>Téléphone:</h4>
                <p>+223 72 12 06 80</p>
                <p>+223 70 42 46 51</p>
              </div>
            </div>
          </div>

          <form action="#" method="post" class="php-email-form mt-4">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="votre nom" required>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="votre Email" required>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Objet" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="vos message" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Chargement</div>
                  <div class="sent-message">Votre message a été envoyé.Merci</div>
                </div>
                <div class="text-center"><button type="submit">Envoyé</button></div>
              </form>
          </div>
        </div>
      </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Fadiala Sidibé et Toumany dit Christophe Diarra</span></strong>. Tous droits Réservés
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>