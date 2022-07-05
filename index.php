
<?php

function tronquer($ContenueArticle)
{
$max_caracteres=107;
// Test si la longueur du texte dépasse la limite
if (strlen($ContenueArticle)>$max_caracteres){
// Séléction du maximum de caractères
$ContenueArticle = substr($ContenueArticle, 0, $max_caracteres);
// Récupération de la position du dernier espace (afin déviter de tronquer un mot)
$position_espace = strrpos($ContenueArticle, " ");
$ContenueArticle = substr($ContenueArticle, 0, $position_espace);
// Ajout des "..."$texte = $texte."...";}?
}
//on retourne le texte
return $ContenueArticle;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Medicio Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="includes/assets/img/favicon.png" rel="icon">
  <link href="includes/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="includes/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="includes/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="includes/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="includes/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="includes/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="includes/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="includes/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="includes/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File --> 
  <link href="includes/assets/css/style.css" rel="stylesheet">

  <style type="text/css">

   
  </style>

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-center justify-content-md-between">

      <div class="align-items-center d-none d-md-flex">

        <a href="#" class="text-white pe-2 border-end border-2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="https://G-consulting.com/conferences/">Université G-consulting</a>

        <a href="#" class="text-white pe-2 ps-2 border-end border-2">Conférence G-consulting</a>
        <a href="#" class="text-white pe-2 ps-2">Magazine G-consulting</a>
      </div>
    

      <div class="d-flex align-items-center">
        <i class="bi bi-person-fill"></i> <a href="#" class="pe-4 text-white" > Se connecter</a>
        <i class="fa fa-solid fa-handshake"></i><a href="#" class="pe-4 text-white">Devenir revendeur</a>
        <i class="bi bi-cart4"></i> <a href="#" class="pe-4 text-white">Boutique</a>

<span class="topbar-login topbar-language d-flex justify justify-content-center align-items-center">
<i class="" aria-hidden="true"></i>                            
<div id="language-select">
    <form action="/fr" method="post">
<div style="display:none">
  <input type="hidden" value="e99b87f0a19db6c28418fb7dddd81f983e669d9e" name="YII_CSRF_TOKEN">
</div>
<input type="hidden" value="/en" name="en" id="en">
<input type="hidden" value="/fr" name="fr" id="fr">
<input type="hidden" value="/de" name="de" id="de">
<input type="hidden" value="/es" name="es" id="es">
<input type="hidden" value="/ko" name="ko" id="ko">

<select onchange="this.form.submit()" name="language" id="language" class=" form-select form-xs">
<option value="fr" selected="selected">FR</option>
<option value="en">EN</option>
<option value="de">DE</option>
<option value="es">ES</option>
<option value="ko">KO</option>
</select>

</form>
</div> 
</span> 
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->


  <header id="header" class="fixed-top">
    <div class="container-fluid d-flex align-items-center">

        <?php include 'Menue.php'; ?>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(includes/assets/img/slide/slide-01.jpg)">
          <div class="container text-end">
            <h2 class="text-uppercase">Formation en ligne ISO 37001 <br> Lead Implementer
Cours de <br>formation en anglais</h2>
            <a href="applications/views/Managementdelaqualite.php" class="btn-get-started scrollto">En savoir plus</a>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(includes/assets/img/slide/slide-02.jpg)">
          <div class="container text-center">
            <h2 class="pb-5 mb-4">Sessions de formation CMSA en distanciel</h2>
            <a href="#" class="btn-get-started scrollto ">S'inscrire maintenant</a>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(includes/assets/img/slide/slide-03.jpg)">
          <div class="container text-end">
            <h2>Le catalogue des formations 2022</h2>
             <p> est disponible !</p>
            <a href="applications/views/ToutesFormation.php" class="btn-get-started scrollto">En savoir plus</a>
          </div>
        </div>



      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
 <!-- End Hero -->
</section>

<!-- ======= Services Section ======= -->
    <section id="services" class="services services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Formations</h2>
          <p>'expertise et la pédagogie de nos formateurs : La garantie de la qualité. Nous accordons une importance particulière à la qualité et à l'expertise de ses formateurs : mieux que des experts, ce sont des formateurs experts. Spécialistes incontestés dans leur domaine, ils sont aussi de vrais pédagogues. ACADEMIE QSE et GCONSULTING AFRICA GROUP les recrutent pour leur capacité à transmettre le savoir et à inculquer des réflexes</p>
        </div>

        <div class="row">

          <div class="card-group">

             <div class="card icon-box pe-1" data-aos="zoom-in" data-aos-delay="100" style="width: 18rem;">
              <img src="includes/assets/img/Formation/9001.jpg" class="card-img-top" alt="...">
              <div class="card-body bg-dark">
                <h5 class="card-title title">ISO 9001 / Système de Management de la qualité</h5>
                <p class="card-text description">ISO 9001 soutient une gestion efficace de votre entreprise et vous aide à répondre aux exigences de vos clients et à améliorer continuellement la qualité de vos....</p>
                <a href="Applications/views/Managementdelaqualite.php" class="btn btn-secondary shadow-sm" style="background-color: #3fbbc0;">Lire la suite </a>
              </div>
            </div>

              <div class="card icon-box pe-1" data-aos="zoom-in" data-aos-delay="100" style="width: 18rem;">
              <img src="includes/assets/img/Formation/14001.jpg" class="card-img-top" alt="...">
              <div class="card-body bg-dark">
                <h5 class="card-title title">Management Environnemental</h5>
                <p class="card-text description">L'ISO 14001 est une norme internationale largement reconnue qui spécifie les exigences pour les organismes qui veulent améliorer leur performance environnementale et accroître leur efficacité opérationnelle....</p>
                <a href="Applications/views/Management-Environnemental.php" class="btn btn-secondary shadow-sm" style="background-color: #3fbbc0;">Lire la suite </a>
              </div>
            </div>

              <div class="card icon-box" data-aos="zoom-in" data-aos-delay="100" style="width: 18rem;">
              <img src="includes/assets/img/Formation/45001.jpg" class="card-img-top" alt="...">
              <div class="card-body bg-dark">
                <h5 class="card-title title">Management de la Sante et Securite</h5>
                <p class="card-text description">ISO 45001 est applicable aux organismes de toutes tailles et de tous secteurs d’activité qui cherchent à prévenir les blessures, les maladies et les décès liés au travail, et favorise....</p>
                <a href="Applications/views/Management-de-la-Sante-et-Securite.php" class="btn btn-secondary shadow-sm" style="background-color: #3fbbc0;">Lire la suite </a>
              </div>
            </div>
        </div>

       <section id="cta" class="cta">
        <div class="text-center">
          <a class="cta-btn scrollto shadow-lg" href="applications/views/ToutesFormation.php">Voir tout</a>
        </div>
      </section>



      </div>
    </section><!-- End Services Section -->



  <main id="main">

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta" style="background: #3fbbc0;">
      <div class="container" data-aos="zoom-in">

        <div class="text-start"><div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="includes/assets/img/Application/Apropos.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h1 class="text-white">Formats de livraison des formations</h1>
            <p>
              G-consulting demeure soucieuse de reconnaître cette multitude de types d'apprenants et de les aider tous à améliorer leurs compétences et à se développer professionnellement et intellectuellement. Pour y parvenir et faire en sorte que l'apprentissage soit enrichissant, G-consulting dispose d'options qui répondent facilement et efficacement aux besoins et aux préférences de chaque apprenant.
            </p>

               <a class="cta-btn scrollto shadow-lg text-white" href="#">En savoir plus</a>
          </div>
        </div>
             
        </div>
      </div>
    </section><!-- End Cta Section -->



  <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="section-title">
          <h2>Processus de certification</h2>
        </div>

            <div class="row">

              <div class="col text-center">
                <div class="text-white" style="  background: #3fbbc0 ;">
                  <i class="fa-solid fa-1 fs-1 pt-1"></i>
                  <p class="lh-1 pb-3">Décidez quelle certification vous convient le mieux</p>
                </div>
              </div>

              <div class="col text-center">
                <div class="text-white" style="  background: #3fbbc0 ;">
                  <i class="fa-solid fa-2 fs-1 pt-1"></i>
                  <p class="lh-1 pb-3">Participez à la formation de votre choix</p>
                </div>
              </div>

              <div class="col text-center">
                <div class="text-white" style="  background: #3fbbc0 ;">
                  <i class="fa-solid fa-3 fs-1 pt-1"></i>
                  <p class="lh-1 pb-3">Préparez et programmez l'examen</p>
                </div>
              </div>

              <div class="col text-center">
                <div class="text-white" style="  background: #3fbbc0 ;">
                  <i class="fa-solid fa-4 fs-1 pt-1"></i>
                  <p class="lh-1 pb-3">Demandez et obtenez la certification</p>
                </div>
              </div>

              <div class="col text-center">
                <div class="text-white" style="  background: #3fbbc0 ;" >
                  <i class="fa-solid fa-5 fs-1 pt-1"></i>
                  <p class="lh-1 pb-3">Maintenez maintenant votre certification<br></p>
                </div>
              </div>

              

          </div>

      </div>
    </section><!-- End Doctors Section -->

     <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Connaissances</h2>

        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class=" swiper-wrapper ">

             <?php
                                           // Database
                                            include'includes/connexion.php';

                                          $req = $bdd -> query ("SELECT* FROM actualiter ORDER BY Id_Article DESC LIMIT 0,12");

                                             $req->execute();
                                             $imagelist = $req->fetchAll();

                                             foreach($imagelist as $Article) {

                                                $ImageArticle =  $Article['name'];
                                                $TitreArticle =  $Article['TitreArticle'];
                                                $DateArticle =   $Article['DateArticle'];
                                                $ContenueArticle =  $Article['ContenueArticle'];

                                
      ?>

            <div class="swiper-slide">
              <div class="border  testimonial-item" style="width: 18rem;">

                <img src="contenue/image/actualiter/<?php echo $ImageArticle ?>" class="card-img-top" alt="">
              <div class="card-body" id="cardBody">

              
                <h3 class="text-start pt-1"><?php echo $TitreArticle ?></h3>

                <p class="pt-"><?php echo tronquer($ContenueArticle) ?>....<br><a class="btn btn-dark mt-2" href="#">Voir plus</a></p>
              </div>
                
              </div>
            </div><!-- End testimonial item -->

             <?php
             }
               $req -> closeCursor();
             ?>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->


 <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">

           <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
              <p class="fs-3 mt-4 lh-1 fw-bold ">Présents dans le monde entier</p>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fa fa-globe"></i>
              <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
              <p class=""><strong>Pays disponible</strong></p>
            </div>
          </div>

           <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fa fa-solid fa-handshake"></i>
              <span data-purecounter-start="0" data-purecounter-end="2400" data-purecounter-duration="1" class="purecounter"></span>
              <p class=""><strong>Partenaires</strong></p>
            </div>
          </div>

           <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
             <i class="fa fa-solid fa-user-gear"></i>
              <span data-purecounter-start="0" data-purecounter-end="1740" data-purecounter-duration="1" class="purecounter"></span>
              <p class=""><strong>Formateurs</strong></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->





  
    <!-- ======= Gallery Section ======= -->
   <!--  <section id="gallery" class="gallery">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Gallery</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="gallery-lightbox" href="includes/assets/img/gallery/gallery-1.jpg"><img src="includes/assets/img/gallery/gallery-1.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="includes/assets/img/gallery/gallery-2.jpg"><img src="includes/assets/img/gallery/gallery-2.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="includes/assets/img/gallery/gallery-3.jpg"><img src="includes/assets/img/gallery/gallery-3.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="includes/assets/img/gallery/gallery-4.jpg"><img src="includes/assets/img/gallery/gallery-4.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="includes/assets/img/gallery/gallery-5.jpg"><img src="includes/assets/img/gallery/gallery-5.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="includes/assets/img/gallery/gallery-6.jpg"><img src="includes/assets/img/gallery/gallery-6.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="includes/assets/img/gallery/gallery-7.jpg"><img src="includes/assets/img/gallery/gallery-7.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="includes/assets/img/gallery/gallery-8.jpg"><img src="includes/assets/img/gallery/gallery-8.jpg" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section> --><!-- End Gallery Section -->


   
           <?php include 'Applications/views/Adresse.php'; ?>
           <?php include 'Applications/views/Footer.php'; ?>
           


  <!-- Vendor JS Files -->
  <script src="includes/assets/vendor/purecounter/purecounter.js"></script>
  <script src="includes/assets/vendor/aos/aos.js"></script>
  <script src="includes/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="includes/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="includes/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="includes/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="includes/assets/js/main.js"></script>
  <script src="includes/js/jquery.min.js"></script>
  <script src="includes/js/popper.js"></script>
  <script src="includes/js/bootstrap.min.js"></script>
  <script src="includes/js/main.js"></script>
  <script src="includes/js/bootstrap.bundle.min.js"></script>
  
  


  <!-- Template Main JS File -->
  <script src="includes/assets/js/main.js"></script>


</body>

</html>