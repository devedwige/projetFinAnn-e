<!DOCTYPE html>
<html lang="en">
<head>
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
            <li><a class="nav-link scrollto active" href="#">Accueil </a></li>
            <!-- <li><a class="nav-link scrollto" href="#">A propos</a></li> -->
            <li><a class="nav-link scrollto" href="#Fonctionnalités">Fonctionnalités</a></li>
            <li><a class="nav-link scrollto" href="#Partenaires">Partenaires</a></li>
            {{-- <li><a class="nav-link scrollto" href="#">Suivis de Croissance</a></li> --}}
          </ul>
          <a href="#" class="appointment-btn scrollto btn-blue" id="connexionBtn"><span class="d-none d-md-inline">Connexion</span></a>
        </nav><!-- .navbar -->
      </div>
  </header>
  <div id="myModal" class="modal">
    <div class="modal-dialog custom-modal-dialog">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <div class="custom-modal-content">
                <p>Veuillez cliquer sur le bouton Inscription pour pouvoir vous inscrire et sur le bouton connection pour vous connecter</p>
                <div class="d-flex justify-content-between custom-button-container mb-3">
                    <a href="register"><button class="btn btn-primary custom-btn">Inscription</button></a>
                    <a href="login"></a><button class="btn btn-success custom-btn" onclick="openLogin()">Connexion</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
  <!-- End Header -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>BIENVENUE CHEZ SONGRE</h1>
      <h2>Plateforme de suivi de la croissance des enfants</h2>
    </div>
  </section>
  <main id="main">
    <section id="why-us" class="why-us">
        <style>
            .card {
              transition: transform 0.3s ease-in-out;
            }
            .card:hover {
              transform: scale(1.05);
            }
          </style>
      <div class="container">
        <div class="row justify-content-center"> <!-- Centrer les cartes -->
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content card" style="background-color: #87CEEB;"> <!-- Fond bleu clair -->
              <i class="bi bi-bar-chart"></i> <!-- Icône pour le suivi de la croissance -->
              <h3>Suivi de la Croissance</h3>
              <p>
                Le suivi de la croissance des enfants est essentiel pour garantir leur développement sain et leur bien-être. Notre plateforme Songre simplifie ce processus en permettant aux parents et aux professionnels de la santé de surveiller de manière précise et efficace la croissance des enfants.
              </p>
            </div>
          </div>
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content card" style="background-color: #87CEEB;"> <!-- Fond bleu clair -->
                <i class="fas fa-question-circle"></i>
                <!-- Icône pour "Pourquoi Choisir Songre?" -->
              <h3>Pourquoi Choisir Songre?</h3>
              <p>Songre se distingue par sa simplicité d'utilisation et son engagement envers la santé des enfants. Notre plateforme offre un suivi de la croissance précis, facilement accessible, et contribue à garantir un avenir sain pour les enfants du Burkina Faso. Choisissez Songre pour un partenariat en faveur de la santé de la prochaine génération.</p>
            </div>
          </div>
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content card" style="background-color: #87CEEB;"> <!-- Fond bleu clair -->
              <i class="bi bi-star"></i> <!-- Icône pour "L'Impact de Songre" -->
              <h3>L'Impact de Songre</h3>
              <p>Songre, en tant que nouvelle plateforme au Burkina Faso, aspire à avoir un impact positif sur la vie des enfants. Nous avons lancé notre initiative avec la vision de fournir des outils de suivi de croissance précis, améliorant ainsi la santé et le bien-être de la jeune génération. Soyez témoin de notre engagement envers la différence.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
<section id="fonctionnalites-cles" class="py-5">
  <div class="container text-center">
    <h2>Fonctionnalités Clés</h2>
    <div class="row justify-content-center">
      <!-- Suivi de la Croissance -->
      <div class="col-md-4 mb-4">
        <div class="feature-card h-100">
          <i class="bi bi-bar-chart"></i> <!-- Icône de graphique pour le suivi de la croissance -->
          <h3>Suivi de la Croissance</h3>
          <p>Permettez aux parents de suivre la croissance de leurs enfants de manière précise et efficace.</p>
        </div>
      </div>
      <!-- Rappels de Notifications -->
      <div class="col-md-4 mb-4">
        <div class="feature-card h-100">
          <i class="bi bi-alarm"></i> <!-- Icône de cloche pour les rappels de notifications -->
          <h3>Rappels de Notifications</h3>
          <p>Envoyez des rappels aux parents pour les consultations de suivi de croissance et les vaccinations.</p>
        </div>
      </div>
      <!-- Statistiques sur les Maladies -->
      <div class="col-md-4 mb-4">
        <div class="feature-card h-100">
          <i class="bi bi-graph-up"></i> <!-- Icône de graphique pour les statistiques sur les maladies -->
          <h3>Statistiques de santé</h3>
          <p>Obtenez des statistiques détaillées sur la santé des enfants pour une meilleure gestion de la santé.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="partenaires" class="py-5">
    <div class="container text-center">
      <h2>Nos Partenaires</h2>
      <div class="row justify-content-center">
        <div class="col-lg-2 col-md-4 col-sm-6">
          <a href="lien-du-partenaire-1">
            <img src="{{ asset('img/images (1).png') }}" alt="Logo Partenaire 1" class="partner-logo img-fluid">
          </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6">
          <a href="lien-du-partenaire-2">
            <img src="{{asset('img/logo AUF.jpg') }}" alt="Logo Partenaire 2" class="partner-logo img-fluid">
          </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6">
            <a href="lien-du-partenaire-2">
              <img src="{{asset('img/université.png') }}" alt="Logo Partenaire 2" class="partner-logo img-fluid">
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6">
            <a href="lien-du-partenaire-4">
              <img src="{{asset('img/armoiries.png') }}" alt="Logo Partenaire 4" class="partner-logo img-fluid">
            </a>
         </div>
          <div class="col-lg-2 col-md-4 col-sm-6">
            <a href="lien-du-partenaire-5">
              <img src="{{asset('img/téléchargement.png') }}" alt="Logo Partenaire 5" class="partner-logo img-fluid">
            </a>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6">
            <a href="lien-du-partenaire-6">
              <img src="{{asset('img/images.unicef.png') }}" alt="Logo Partenaire 6" class="partner-logo img-fluid">
            </a>
          </div>
        </div>
      </div>
    </section>

  <!-- ======= Footer ======= -->
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
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Vendor JS Files -->
  <script src="https://cdn.jsdelivr.net/npm/purecounter@1.1.0/purecounter_vanilla.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/glightbox@1.0.1/dist/js/glightbox.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@6.8.4/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/php-email-form@3.1.1/validate.js"></script>
  <script src="{{ asset('js/main.js') }}"></script>
  {{-- // Fonction pour afficher le modal --}}
 <script>
    function showModal() {
      var modal = document.getElementById("myModal");
      modal.style.display = "block";
    }


    function closeModal() {
        var modal = document.getElementById('myModal');
        modal.style.display = "none";
    }

    function openLogin() {
        var modal = document.getElementById('myModal');
        modal.style.display = "none"; // Ferme le modal
        window.location.href = "login"; // Redirige vers la page de connexion
    }
    // Attacher un gestionnaire d'événement au bouton "Connexion"
    var connexionBtn = document.getElementById("connexionBtn");
    connexionBtn.addEventListener("click", showModal);

    // Attacher un gestionnaire d'événement au bouton de fermeture
    var closeBtn = document.getElementsByClassName("close")[0];
    closeBtn.addEventListener("click", closeModal);

    // Fermer le modal lorsque l'utilisateur clique en dehors du modal
    window.onclick = function (event) {
      var modal = document.getElementById("myModal");
      if (event.target == modal) {
        modal.style.display = "none";
      }
    };</script>
</body>
</html>
