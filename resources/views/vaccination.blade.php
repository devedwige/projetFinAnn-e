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

                <!-- <li><a class="nav-link scrollto" href="#">A propos</a></li> -->
                <li><a class="nav-link scrollto" href="{{ route('croissance')}}">Suivi de croissance</a></li>

                {{-- <li><a class="nav-link scrollto" href="#">Suivis de Croissance</a></li> --}}
              </ul>

            <a href="{{ route('parentlogin') }}" class="btn btn-danger ml-4" id="conneBtn"><span class="d-none d-md-inline">Déconnexion</span></a>
        </nav><!-- .navbar -->
      </div>
  </header>
   <!-- End Header -->
   <section id="hero5" class="d-flex align-items-center">
    <div class="container">
      {{-- <h1>BIENVENUE CHEZ SONGRE</h1> --}}
      <p class="text-center"><strong>
        Calendrier vaccinal pour les enfants de 0 à 15 mois
    </strong></p>
      <h1 class="text-center">La vaccination de routine est gratuite et obligatoire pour tous les enfants.</h1>
    </div>
  </section>
   <section id="hero6">
<h5 class="text-center text-marge">Les vaccins sont des gardiens vigilants de la santé de votre enfant, offrant une protection <br> cruciale contre des maladies potentiellement dévastatrices, parfois même mortelles. <br> Chaque année, ils préservent entre deux et trois millions de vies à travers le monde.</h5>
   </section>
<section id="hero7">
    <hr class="ligne">
    <p class="text-center text-marge"><strong>Suivre rigoureusement le calendrier vaccinal s'avère être l'un des moyens les plus efficaces pour garantir <br> la santé et le bien-être de votre enfant. Chaque fois qu'un vaccin est différé, c'est autant <br> de temps durant lequel votre enfant reste vulnérable face à ces maladies.</strong> </h5>
    <hr class="ligne1">
</section>
<section id="hero8">
    <h5 class="text-center text-marge">Les vaccins de routine contribuent activement à l'épanouissement en bonne <br> santé de votre enfant. Malgré les éventuelles contraintes, il est impératif de respecter <br> les six rendez-vous de vaccination recommandés. Chacun d'entre eux est une pierre angulaire de la santé <br> et du développement de votre enfant.
    </h5>
    <ul>
        <li><a href="#"><strong>À la naissance</strong></a></li>
        <li><a href="#"><strong>À 1 mois et demi</strong></a></li>
        <li><a href="#"><strong>À 2 mois et demi</strong></a></li>
        <li><a href="#"><strong>À 3 mois et demi</strong></a></li>
        <li><a href="#"><strong>À 9 mois</strong></a></li>
        <li><a href="#"><strong>À 15 mois</strong></a></li>
    </ul><br><br>

    <div class="bg-gray" style="height: 90%; width: 100%;">
        <div class="container"><br><br>
        <div class="row align-items-center justify-content-center">
            <div class="col-md-4">
                <img src="{{ asset('assets/images/rappel1.png') }}" alt="Mon Image" class="img-fluid">
            </div>
            <div class="col-md-5">
                <div class="text-center">
                    <p class="text-white" style="font-size: 20px;"><strong>Lors de son premier rendez-vous vaccinal, votre enfant recevra deux
                        vaccins pour le protéger contre :</strong>
                    </p>
                    <ul class="list-unstyled " style="font-size: 18px;">
                        <li style="color: #E94E1A;"><i class="fas fa-lungs"></i> la tuberculose (BCG)</li>
                        <li style="color: #E94E1A;"><i class="fas fa-biohazard"></i> la poliomyélite (VPO)</li>
                    </ul>
                </div>
            </div>
        </div>
    </div><br><br>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-4">
                <img src="{{ asset('assets/images/rappels2.png') }}" alt="Mon Image" class="img-fluid">
            </div>
            <div class="col-md-5">
                <div class="text-center">
                    <p class="text-white" style="font-size: 20px;"><strong>Lors de son deuxième rendez-vous vaccinal, votre enfant recevra quatre
                        <ul class="list-unstyled" style="font-size: 18px; color: #951B81;">
                            <li class="d-flex align-items-center"><i class="fas fa-lungs"></i> les infections à pneumocoque (Pneumo)</li>
                            <li class="d-flex align-items-center"><i class="fas fa-biohazard"></i> la poliomyélite (VPO)</li>
                            <li class="d-flex align-items-center"><i class="fas fa-virus"></i> la diphtérie, le tétanos, la coqueluche, l’hépatite virale B et la méningite (Pentavalent, DTC-HepB-Hib)</li>
                            <li class="d-flex align-items-center"><i class="fas fa-virus"></i> les diarrhées (Rotasiil)</li>
                        </ul>
                      <p class="text-white" style="font-size: 20px;"><strong>Les mêmes vaccins seront administrés lors du prochain rendez-vous.</strong>
                    </p>

                </div>
            </div>
        </div>
    </div><br><br>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-4">
                <img src="{{ asset('assets/images/rappels3.png') }}" alt="Mon Image" class="img-fluid">
            </div>
            <div class="col-md-5">
                <div class="text-center">
                    <p class="text-white" style="font-size: 20px;"><strong>Lors de son troisième rendez-vous vaccinal, votre enfant recevra quatre
                        vaccins pour le protéger contre :</strong>
                        <ul class="list-unstyled" style="font-size: 18px; color: #F9AE07;">
                            <li class="d-flex align-items-center"><i class="fas fa-lungs"></i> les infections à pneumocoque (Pneumo)</li>
                            <li class="d-flex align-items-center"><i class="fas fa-biohazard"></i> la poliomyélite (VPO)</li>
                            <li class="d-flex align-items-center"><i class="fas fa-virus"></i> la diphtérie, le tétanos, la coqueluche, l’hépatite virale B et la méningite (Pentavalent, DTC-HepB-Hib)</li>
                            <li class="d-flex align-items-center"><i class="fas fa-virus"></i> les diarrhées (Rotasiil)</li>
                        </ul>
                </div>
            </div>
        </div>
    </div><br><br>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-4">
                <img src="{{ asset('assets/images/rappels4.png') }}" alt="Mon Image" class="img-fluid">
            </div>
            <div class="col-md-5">
                <div class="text-center">
                    <p class="text-white" style="font-size: 20px;"><strong>Lors de son quatrième rendez-vous vaccinal, votre enfant recevra
                        plusieurs vaccins pour le protéger contre :
                        </strong>
                        <ul class="list-unstyled text-white" style="font-size: 18px;">
                            <li class="d-flex align-items-center text-success"><i class="fas fa-syringe"></i>&nbsp;&nbsp;les infections à pneumocoque (Pneumo)</li>
                            <li class="d-flex align-items-center text-success"><i class="fas fa-syringe"></i>&nbsp;&nbsp;la poliomyélite (VPO et VPI)</li>
                            <li class="d-flex align-items-center text-success"><i class="fas fa-syringe"></i>&nbsp;&nbsp;la diphtérie, le tétanos, la coqueluche, l’hépatite virale B et la méningite (Pentavalent, DTC-HepB-Hib)</li>
                            <li class="d-flex align-items-center text-success"><i class="fas fa-syringe"></i>&nbsp;&nbsp;les diarrhées (Rotasiil)</li>
                        </ul>
                </div>
            </div>
        </div>
    </div><br><br>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-4">
                <img src="{{ asset('assets/images/rappels5.png') }}" alt="Mon Image" class="img-fluid">
            </div>
            <div class="col-md-5">
                <div class="text-center">
                    <p class="text-white" style="font-size: 20px;"><strong>Lors de son cinquième rendez-vous vaccinal, votre enfant recevra trois
                        vaccins pour le protéger contre :
                        </strong>
                        <ul class="list-unstyled text-white" style="font-size: 18px;">
                            <li class="d-flex align-items-center" style="color: #26358C;"><i class="fas fa-microscope"></i>&nbsp;&nbsp;la poliomyélite (VPI)</li>
                            <li class="d-flex align-items-center" style="color: #26358C;"><i class="fas fa-virus"></i>&nbsp;&nbsp;la rougeole/rubéole (VAR/RR)</li>
                            <li class="d-flex align-items-center" style="color: #26358C;"><i class="fas fa-temperature-high"></i>&nbsp;&nbsp;la fièvre jaune (VAA)</li>
                        </ul>
                </div>
            </div>
        </div>
    </div><br><br>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-4">
                <img src="{{ asset('assets/images/rappels6.png') }}" alt="Mon Image" class="img-fluid">
            </div>
            <div class="col-md-5">
                <div class="text-center">
                    <p class="text-white" style="font-size: 20px;"><strong>Lors de son sixième et dernier rendez-vous vaccinal, votre enfant
                        recevra un dernier vaccin pour le protéger contre :
                        </strong>
                        <ul class="list-unstyled text-white" style="font-size: 18px;">
                            <li class="d-flex align-items-center" style="color: #D5699B;"><i class="fas fa-head-side-mask"></i>&nbsp;&nbsp;la rougeole/rubéole (VAR/RR)</li>
                        </ul>
                </div>
            </div>
        </div>
    </div><br><br>
</div><br><br>
<div class="video-container" style="text-align: center;">
    <h1 style="color: black;">Fonctionnement des vaccins</h1><br><br>

    <p>Un vaccin est une substance biologique conçue pour stimuler le système immunitaire contre des agents pathogènes spécifiques, <br>tels que des virus ou des bactéries, responsables de maladies. Il contient soit des parties inactivées <br> ou affaiblies de l'agent pathogène, soit des composants synthétiques qui imitent leur structure. Ces éléments <br> sont sans danger et incapables de causer la maladie, mais ils sont suffisamment similaires pour <br> inciter le système immunitaire à réagir.</p><br><br>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/56mDk5Ckqkw" frameborder="0" allowfullscreen></iframe>
</div>
</section>
<div class="savoir" style="height: 90%;"><br>
    <h1 class="text-center" style="color: black;">En savoir plus sur les vaccins</h1><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="{{ asset('assets/images/vaccin.png') }}" class="card-img-top" alt="Image 2">
                    <div class="card-body">
                        <h4>Chers parents,</h4>
                        <p class="card-text">Protéger la santé de votre enfant est l'une des choses les plus importantes que vous puissiez faire. Le calendrier vaccinal offre une protection essentielle contre de graves maladies. Voici pourquoi il est crucial de suivre ce calendrier </p>
                        <a href="{{ route('vaccin') }}" class="btn btn-primary">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="{{ asset('assets/images/polio.png') }}" class="card-img-top" alt="Image 1">
                    <div class="card-body">
                        <p class="card-text">La poliomyélite, bien que rare de nos jours, reste une maladie potentiellement dévastatrice. Cependant, grâce à la vaccination, nous avons le pouvoir de l'éradiquer complètement. Pour cela, il est crucial que chaque enfant reçoive l'ensemble des doses recommandées du vaccin contre la poliomyélite.</p>
                        <a href="{{ route('polio') }}" class="btn btn-primary">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="{{ asset('assets/images/mini.png') }}" class="card-img-top" alt="Image 3">
                    <div class="card-body">
                        <p class="card-text">Votre dévouement et votre expertise sont les piliers de notre système de soins de santé. Chaque jour, vous êtes en première ligne, apportant confort, guérison et espoir à ceux qui en ont le plus besoin. Votre compassion et votre professionnalisme ne passent pas inaperçus.</p>
                        <a href="{{ route('agent') }}" class="btn btn-primary">En savoir plus</a>
                    </div>
                </div>
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



  <script src="https://cdn.jsdelivr.net/npm/purecounter@1.1.0/purecounter_vanilla.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/glightbox@1.0.1/dist/js/glightbox.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@6.8.4/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/php-email-form@3.1.1/validate.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>

