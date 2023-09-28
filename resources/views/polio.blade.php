<!DOCTYPE html>
<html lang="en">
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
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.2.1/font/bootstrap-icons.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.7/dist/boxicons.min.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/glightbox@1.0.1/dist/css/glightbox.min.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/swiper@6.8.4/swiper-bundle.min.css" rel="stylesheet">
        <!-- Template Main CSS File -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <style>

       .card-container {
            display: flex;
            justify-content: center; /* Centrer horizontalement */
            align-items: center; /* Centrer verticalement */
            height: 100vh; /* Définir la hauteur à 100% de la vue */
        }
        .card {
    border: 1px solid #ccc;
    border-radius: 8px;
    padding: 10px;
    box-sizing: border-box;
    margin: 10px; /* Espacement entre les cartes */
}
        .image-card {
            width: 60%; /* Le card de l'image est plus large */
        }

        .text-card {
            background-color: #ccc; /* Couleur de fond grise */
            width: 40%; /* Le card du texte est plus étroit */

        }
        .card img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
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
                <li><a class="nav-link scrollto" href="{{ route('consultation') }}"></a></li>

                {{-- <li><a class="nav-link scrollto" href="#">Vaccination</a></li>
                <li><a class="nav-link scrollto" href="#">Suivis de Croissance</a></li>
                <li><a class="nav-link scrollto" href="#">Rendez-vous</a></li> --}}
              </ul>
              <a href="#" class="btn btn-danger ml-4" id="conneBtn"><span class="d-none d-md-inline">Déconnexion</span></a>
            </nav><!-- .navbar -->
          </div>
      </header><br>
<section>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card border-0">
                    <div class="card-body text-center">
                        <h1 class="card-title">Le Burkina Faso compte vacciner 4,6 millions d'enfants contre la poliomyélite en partenariat avec L'UNICEF et L'OMS!!!</h1>
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
      <img src="{{ asset('assets/images/polio.png') }}" class="d-block w-100" alt="Image 1">
      <div class="carousel-caption d-none d-md-block">
        <h1 class="text-black">Protéger les enfants contre la poliomyélite, goutte après goutte</h1>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('assets/images/malbb.jpg') }}" class="d-block w-100" alt="Image 2">
      <div class="carousel-caption d-none d-md-block">
        <h1 class="text-center">Protégez l'avenir de votre enfant : Vaccinez-le contre la polio dès ses premiers jours de vie!!!</h1>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('assets/images/vieux.jpg') }}" class="d-block w-100" alt="Image 3">
      <div class="carousel-caption d-none d-md-block">
        <h1 class="text-center">L'UNICEF s'engage aux côtés du Gouvernement burkinabé dans la lutte acharnée pour éradiquer la polio et garantir un avenir sans cette maladie dévastatrice au Burkina Faso.</h1>
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
<h1 class="text-center">L'UNICEF en action</h1>
<p class="text-center">14 juillet 2023</p>
<div class="card-container d-flex align-items-stretch">
    <div class="card border-0">
        <img src="{{ asset('assets/images/unipolio.png') }}" class="card-img-top" alt="Image 1">
        <div class="card-footer border-0">
            <p><strong>Saidou Diallo, chef de la santé à l'UNICEF Burkina Faso vaccine un enfant contre la polio.</strong></p>
        </div>
    </div>
    <div class="card border-0">
        <div class="card-body">
            <h1 class="card-title">Contacts presse</h1>
            <p class="card-text">
                <strong>Ndiaga Seck</strong><br>
                Chief Advocacy and Communications UNICEF Burkina Faso <br><br>
                Tél: +226.05.25.58.98 <br>
                Adresse électronique <a href="#">: nseck@unicef.org</a> <br><br>
                <strong>Bruno Sanogo</strong><br><br>
                Spécialiste de la Communication UNICEF Burkina Faso <br><br>
                Tel:+226.56.41.15.15 <br>
                Adresse électronique <a href="#">: ssanogo@unicef.org</a>
            </p>
        </div>
    </div>
</div>


    <div class="vaccination-info" style="text-align: center;">
        <h2 style="color: black;">Campagne de Vaccination au Burkina Faso</h2><br>
        <div class="container">
            <p class="text-center" style="font-size: 24px;">La cérémonie officielle de lancement de la campagne de vaccination contre la poliomyélite a eu lieu le 15 juillet 2023 à Diébougou, dans la région du Sud-Ouest. Le Dr Robert Lucien Jean-Claude Kargougou, ministre de la Santé et de l’Hygiène publique, présidait l'événement. Étaient présents le Gouverneur de la région, des représentants de l’OMS et de l’UNICEF, ainsi que des autorités locales, des professionnels de la santé et la population de Diébougou.</p>
        </div><br>
        <div class="container">
            <p class="text-center" style="font-size: 24px;">Le choix de Diébougou pour ce lancement a été salué par le Gouverneur et le Haut-commissaire de la Bougouriba. Malgré les campagnes précédentes, la poliomyélite reste une préoccupation dans leur région. Ils ont encouragé la population à s'impliquer activement dans cette campagne.</p>
        </div><br>
        <div class="container">
            <p class="text-center" style="font-size: 24px;">Le Burkina Faso, comme d'autres pays de la région, fait face à la réapparition de cas de polio, principalement en raison du manque de vaccination. Depuis 2019, des cas de poliomyélite causés par d'autres types de virus sont signalés dans la région africaine. Actuellement, le Burkina Faso compte 72 cas de paralysie flasque aiguë, ainsi qu'un cas détecté grâce à la surveillance des eaux usées. La campagne en cours vise à réduire ce nombre de 72 à zéro d'ici la semaine 22 de l'année 2023, selon les autorités sanitaires.</p>
        </div><br>

    </div><br>

<section class="bg-light py-5">
    <div class="container">
        <div class="card-group">
          <div class="card border-0">
            <img src="{{ asset('assets/images/kargougou.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">« En vue de consolider la circulation du poliovirus, nous devons poursuivre le renforcement de la protection de nos enfants contre cette maladie invalidante à travers la vaccination », déclare Dr Kargougou.</p>
              <p class="card-text"><strong style="color: black;">Dr Robert Lucien Jean-Claude Kargougou, le ministre de la Santé et de l’hygiène publique.</strong></p>


            </div>
          </div>
          <div class="card border-0">
            <img src="{{ asset('assets/images/temion.png') }}" class="card-img-top" alt="...">
            <div class="card-body">

              <p class="card-text">« La menace est persistante et nécessite que l’on continue d’être vigilant », alerte Dr Ramatou Sawadogo représentant le chef de bureau de l’OMS au Burkina Faso lors de sa prise de parole, au nom des partenaires de l’Initiative Mondiale de l’Eradication de la Polio (IMEP). « La santé de nos populations en général et celle de nos enfants en particulier est l’affaire de tous. Ensemble, mobilisons-nous pour que tous les parents comprennent l’importance de la vaccination et que tous les enfants, y compris les nouveau-nés, soient présentés aux vaccinateurs lors de leur passage dans les ménages », ajoute-elle.</p>
              <p class="card-text"><strong style="color: black;">Dr Ramatou Sawadogo représentant le chef de bureau de l’OMS au Burkina Faso.</strong></p>

            </div>
          </div>
        </div>
    </div>


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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/purecounter@1.1.0/purecounter_vanilla.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/glightbox@1.0.1/dist/js/glightbox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@6.8.4/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/php-email-form@3.1.1/validate.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>

