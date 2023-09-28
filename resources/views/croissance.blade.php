<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Projet de suivis de la croissance des enfants</title>

        <!-- Favicon et icônes -->
        <link href="assets/img/favicon.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

        <!-- Animate.css -->
        <link href="https://cdn.jsdelivr.net/npm/animate.css@3.7.2/animate.min.css" rel="stylesheet">

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Bootstrap Icons -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.2.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Boxicons -->
        <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.7/dist/boxicons.min.css" rel="stylesheet">

        <!-- GLightbox CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/glightbox/1.0.1/css/glightbox.min.css" rel="stylesheet">

        <!-- Swiper CSS -->
        <link href="https://cdn.jsdelivr.net/npm/swiper@6.8.4/swiper-bundle.min.css" rel="stylesheet">

        <!-- Votre fichier CSS personnalisé -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>

<body>
     <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="sombougmaedwige@gmail.com">contact.com</a>
        <i class="bi bi-phone"></i> +226 69 79 99 49/+226 65 60 01 77
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
        <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
        <a href="#" class="linkedin"><i class="fab fa-linkedin"></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex justify-content-between align-items-center">
        <img src="{{ asset('assets/images/cap.png') }}" class="logo" alt="Image 1">
        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <!-- <li><a class="nav-link scrollto" href="#">A propos</a></li> -->
                {{-- <li><a class="nav-link scrollto" href="{{ route('rende') }}">Suivi de croissance</a></li> --}}
                {{-- <li><a class="nav-link scrollto" href="#">Suivis de Croissance</a></li> --}}
              </ul>

            <a href="#" class="btn btn-danger ml-4" id="conneBtn"><span class="d-none d-md-inline">Déconnexion</span></a>
        </nav><!-- .navbar -->
      </div>
  </header>

  <section>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card border-0">
                    <div class="card-body text-center">
                        <h1 class="card-title">Le Burkina Faso est en lutte perpétuelle contre le retard de croissance.</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('assets/images/croissancebb.png') }}" class="d-block w-100" alt="Image 1">
      <div class="carousel-caption d-none d-md-block">
        <h1 class="text-black">Chaque centimètre compte : suivez la croissance de votre précieux trésor.</h1>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('assets/images/bras1.png') }}" class="d-block w-100" alt="Image 2">
      <div class="carousel-caption d-none d-md-block">
        <h1 class="text-center">Chaque enfant bénéficie d'un suivi régulier, ce qui vous permet de connaître l'état d'évolution de votre enfant.</h1>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('assets/images/bras.png') }}" class="d-block w-100" alt="Image 3">
      <div class="carousel-caption d-none d-md-block">
        <h1 class="text-center">L'état de votre enfant vous sera communiquer avec des instrictions à suivre</h1>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>
<section class="container">
    <h1 class="text-center">État Actuel de la Croissance des Enfants au Burkina Faso</h1>
</section>
<section class="container-fluid grey-background">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-2">
                <div class="row">
                    <div class="col-md-3 text-center">
                        <i class="fas fa-child fa-3x custom-icon"></i>
                    </div>
                    <div class="col-md-3 text-center">
                        <i class="fas fa-child fa-3x"></i>
                    </div>
                    <div class="col-md-3 text-center">
                        <i class="fas fa-child fa-3x"></i>
                    </div>
                    <div class="col-md-3 text-center">
                        <i class="fas fa-child fa-3x"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <p class="ml-5"><span class="highlight">1 enfant sur 4</span> souffre de retard de croissance (24.9%) au Burkina Faso2 avec une prévalence la plus élevée dans les régions du Sahel (43,1%) ; le Centre-Nord (29,8%) et le Nord (28,9%).</p>
            </div>
        </div>
    </div><br><br>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-2">
                <div class="row">
                    <div class="col-md-3 text-center">
                        <i class="fas fa-child fa-3x custom-icon"></i>
                    </div>
                    <div class="col-md-3 text-center">
                        <i class="fas fa-child fa-3x "></i>
                    </div>
                    <div class="col-md-3 text-center">
                        <i class="fas fa-child fa-3x "></i>
                    </div>
                    <div class="col-md-3 text-center">
                        <i class="fas fa-child fa-3x"></i>
                    </div>
                    <div class="col-md-3 text-center">
                        <i class="fas fa-child fa-3x "></i>
                    </div>
                    <div class="col-md-3 text-center">
                        <i class="fas fa-child fa-3x "></i>
                    </div>
                    <div class="col-md-3 text-center">
                        <i class="fas fa-child fa-3x"></i>
                    </div>
                    <div class="col-md-3 text-center">
                        <i class="fas fa-child fa-3x"></i>
                    </div>
                    <div class="col-md-3 text-center">
                        <i class="fas fa-child fa-3x"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <p class="ml-5"><span class="highlight">1 enfant sur 9</span> souffre d’émaciation, et présente
                    un poids insuffisant pour sa taille, ce qui l’expose
                    à un risque élévé de mortalité et de morbidité3.</p>
            </div>
        </div>
    </div><br><br>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-2">
                <div class="row">
                    <div class="col-md-3 text-center">
                        <i class="fas fa-child fa-3x custom-icon"></i>
                    </div>
                    <div class="col-md-3 text-center">
                        <i class="fas fa-child fa-3x custom-icon"></i>
                    </div>
                    <div class="col-md-3 text-center">
                        <i class="fas fa-child fa-3x custom-icon"></i>
                    </div>
                    <div class="col-md-3 text-center">
                        <i class="fas fa-child fa-3x custom-icon"></i>
                    </div>
                    <div class="col-md-3 text-center">
                        <i class="fas fa-child fa-3x "></i>
                    </div>
                    <div class="col-md-3 text-center">
                        <i class="fas fa-child fa-3x "></i>
                    </div>
                    <div class="col-md-3 text-center">
                        <i class="fas fa-child fa-3x"></i>
                    </div>
                    <div class="col-md-3 text-center">
                        <i class="fas fa-child fa-3x"></i>
                    </div>
                    <div class="col-md-3 text-center">
                        <i class="fas fa-child fa-3x"></i>
                    </div>
                    <div class="col-md-3 text-center">
                        <i class="fas fa-child fa-3x"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <p class="ml-5"><span class="highlight">Près de 4 enfants sur 10</span> (36%) de moins de
                    6 mois ne sont pas allaités exclusivement au lait maternel. </p>
            </div>
        </div>
    </div><br><br>


    <style>
        .custom-icon {
            color: orange;
        }
    </style>

     </section><br><br>



<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-3 col-md-6 footer-contact">
            <h2>Songre</h2>
            <h6><strong>Grandir avec tous les soins primaires est notre priorité</strong></h6>
            <p>
              <strong>Phone:</strong> +226 69 79 99 49/65 60 01 77<br><br>
              <strong>Email:</strong> sombougmaedwige@gmail.com<br>
            </p>
          </div>
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Fonctionnalités Clés</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Suivi de croissance</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Rappels de Notifications</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Statistiques de santé</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="container d-flex justify-content-between align-items-center py-4">
        <div class="copyright">
          &copy; Copyright 2023 <strong><span>Songre</span></strong>. Tout droits réservés
        </div>
        <div class="d-none d-lg-flex social-links align-items-center">
            <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
            <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
            <a href="#" class="linkedin"><i class="fab fa-linkedin"></i></a>
        </div>
      </div>
  </footer><!-- fin footer -->



  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/glightbox/1.0.1/js/glightbox.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@6.8.4/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/purecounter@1.1.0/purecounter_vanilla.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/php-email-form@3.1.1/validate.js"></script>
  <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>

