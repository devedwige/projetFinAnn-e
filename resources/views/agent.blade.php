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
        <img src="{{ asset('assets/images/logo.png') }}" class="logo" alt="Image 1">
        <nav id="navbar" class="navbar order-last order-lg-0">
          <ul>
            {{-- <li><a class="nav-link scrollto active" href="#">Accueil </a></li> --}}
            <!-- <li><a class="nav-link scrollto" href="#">A propos</a></li> -->
            <li><a class="nav-link scrollto" href="{{ route('agent') }}"></a></li>

            {{-- <li><a class="nav-link scrollto" href="#">Vaccination</a></li>
            <li><a class="nav-link scrollto" href="#">Suivis de Croissance</a></li>
            <li><a class="nav-link scrollto" href="#">Rendez-vous</a></li>
          </ul> --}}
          <a href="#" class="btn btn-danger ml-4" id="conneBtn"><span class="d-none d-md-inline">Déconnexion</span></a>

        </nav><!-- .navbar -->
      </div>
  </header>
<body>
    <div style="position: relative;">
        <img src="{{ asset('assets/images/sortie.png') }}" class="card-img-top" alt="Image 2" style="height: 700px;">
        <h1 class="text-center" style="color: white; position: absolute; top: 70%; left: 50%; transform: translate(-50%, -50%); background-color: rgba(0, 0, 0, 0.568); padding: 10px;">Lors de chaque sortie, nos agents de santé démontrent un engagement inébranlable envers la santé et le bien-être de la communauté, incarnant ainsi la véritable définition de la dévotion professionnelle</h1>
    </div>
    <section>
        <div class="container">
            <h1 class="text-center" style="color: black;">Les Efforts Inlassables de Nos Agents de Santé</h1><br>
            <p class="text-center">En dépit des défis sécuritaires persistants qui sévissent au Burkina Faso, nos courageux agents de santé se tiennent vaillamment en première ligne pour veiller à la santé et au bien-être de l'ensemble de la population, notamment des enfants. Leur engagement inébranlable et leur dévouement sans faille sont une source d'inspiration pour nous tous. Chaque jour, ils font preuve d'une résilience remarquable, travaillant sans relâche pour prodiguer des soins de qualité et sauver des vies. Leur détermination à surmonter les obstacles et à fournir des soins médicaux essentiels est une source de fierté pour notre nation.</p><br>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card h-100">
                        <img src="{{ asset('assets/images/mere.jpg') }}" class="card-img-top" alt="Image 1">
                        <div class="card-body">
                            <p class="card-text">La satisfaction inonde le cœur de l'agent de santé, rayonnant de joie, après avoir assisté la femme dans le miracle de la naissance et lui avoir prodigué les premiers soins. Cette expérience est empreinte d'une profonde gratification, car elle symbolise l'engagement et la dévotion de l'agent envers la santé et le bien-être de la mère et de son nouveau-né.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <img src="{{ asset('assets/images/salamata.png') }}" class="card-img-top" alt="Image 2">
                        <div class="card-body">
                            <p class="card-text">Salamata Zio cumule 21 ans de service de vaccination des enfants au Centre de Santé et de la Promotion Sociale de Bolomakoté, à Bobo Dioulasso. Elle est l’une des héros de la vaccination des enfants du Burkina Faso. Car pour elle, il est important que : « chaque enfant soit vacciné et mis à l’abri des maladies pouvant être prévenues. Nous donnons aussi des conseils aux mères pour le bon suivi du calendrier vaccinal national pour leurs enfants ».</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <img src="{{ asset('assets/images/mer.jpg') }}" class="card-img-top" alt="Image 2">
                        <div class="card-body">
                            <p class="card-text">Même sous une pluie battante, notre agent de santé à base communautaire demeure intrépide dans sa mission. Traversant courageusement le marigot débordant d'eau, il se dirige vers les villages éloignés pour apporter les médicaments vitaux aux enfants. Cet engagement indéfectible envers la santé des plus jeunes témoigne de la dévotion et du dévouement personnels de cet agent, qui voit chaque enfant comme une précieuse promesse d'avenir pour la communauté</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br>
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
