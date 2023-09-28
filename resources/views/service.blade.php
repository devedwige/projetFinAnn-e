<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Projet de suivis de la croissance des enfants</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  {{-- <link href="https://cdn.jsdelivr.net/npm/@fotawesome/fontawesome-free@5.15.3/css/all.min.css" rel="stylesheet"> --}}
  <link href="https://cdn.jsdelivr.net/npm/animate.css@3.7.2/animate.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.2.1/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.7/dist/boxicons.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/glightbox@1.0.1/dist/css/glightbox.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/swiper@6.8.4/swiper-bundle.min.css" rel="stylesheet">
    <!-- Template Main CSS File -->
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
                <li><a class="nav-link scrollto" href="{{ route('consultation') }}">Consultation</a></li>
                <li><a class="nav-link scrollto" href="{{ route('vac') }}">Vaccination</a></li>
                <li><a class="nav-link scrollto" href="{{ route('suivi') }}">Suivis de Croissance</a></li>
                <li><a class="nav-link scrollto" href="{{ route('rende') }}">Rendez-vous</a></li>
            </ul>
            <a href="{{ route('enfant') }}" class="appointment-btn scrollto btn-blue" id="connexionBtn">
                <span class="d-none d-md-inline" style="color: white;">Inscription</span>
            </a>
            <form id="logoutForm" action="  " method="">
                {{-- {{ route('logout') }} --}}

                @csrf
                <a href="{{ route('login') }}" class="btn btn-danger ml-4" id="conneBtn" onclick="document.getElementById('logoutForm').submit();">
                    <span class="d-none d-md-inline">Se déconnecter</span>
                </a>
            </form>
        </nav>
      </div>
  </header>
   <!-- End Header -->
   <section id="hero1" class="d-flex align-items-center">
    <div class="container">
      {{-- <h1>BIENVENUE CHEZ SONGRE</h1> --}}
      <p class="text-center"><strong>SONGRE, Plateforme idéale pour le suivi et la croissance des enfants</strong></p>
    </div>
  </section>
  <section><br><br>
    <h1  class="text-center">Veuillez procéder à l'inscription de l'enfant avant de commencer la consultation ou toute autre procédure.</h1>
  </section>

  @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

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
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/purecounter@1.1.0/purecounter_vanilla.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/glightbox@1.0.1/dist/js/glightbox.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@6.8.4/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/php-email-form@3.1.1/validate.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>

