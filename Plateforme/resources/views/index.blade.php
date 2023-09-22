<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Accueil</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid py-2 border-bottom d-none d-lg-block">
        <div class="container">
            <div class="row">
                <a href="index" class="navbar-brand">
                    <h1 class="m-0 text-uppercase text-primary" text-center><img src="../Images/logo 2.jpg" alt="logo" width="70px";>Le lieu idéal pour résoudre vos problèmes</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                <div class="row flex-grow">
                <a href="{{route('connexion')}}" class="login"><i class="icofont-user"></i> <span>SE CONNECTER </span> </a>
                <a href="{{route('deconnexion')}}" class="signup"><i class="icofont-users"></i> <span>SE DECONNECTER</span> </a>
                </div>
                </button>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top bg-white shadow-sm">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
                <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-decoration-none text-body pe-3" href=""><i class="bi bi-telephone me-2"></i>+22662810499</a>
                        <span class="text-body">|</span>
                        <a class="text-decoration-none text-body px-3" href=""><i class="bi bi-envelope me-2"></i>jukyelem25@gmail.com</a>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="/" class="nav-item nav-link">Accueil</a>
                        <a href="{{ route('Nos_services') }}" class="nav-item nav-link"></a>
                        <div class="nav-item dropdown">
                            <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                            <div class="dropdown-menu m-0">
                                <!-- <a href="blog.html" class="dropdown-item">Blog Grid</a> -->
                                <a href="{{ route('meet') }}" class="dropdown-item">Rendez-Vous</a>
                                <a href="{{ route('temoin') }}" class="dropdown-item">Temoignages</a>
                                <div class="nav-item dropdown">
                                 <a href="{{ route('offre') }}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Offres</a>
                                   <div class="dropdown-menu m-0">
                                       <a href="{{ route('domaines') }}" class="dropdown-item">Catégories</a>
                                       <a href="{{ route('specialiste') }}" class="dropdown-item">Spécialistes</a> 
                                       <a href="{{ route('theme_psy') }}" class="dropdown-item">Thèmes_psy</a>
                                   </div>
                                </div>
                            </div>
                        </div> 
                        <a href="{{ route('propos') }}" class="nav-item nav-link">A propos</a>
                        <a href="{{ route('blog') }}" class="nav-item nav-link">Blog</a>
                        <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-12 text-center text-lg-start">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5" style="border-color: rgba(256, 256, 256, .3) !important;">Bienvenus sur santé mentale  
                       <img src="Images/accueil.png"width='100%' alt="fiche">
                    </h4>
                    <h4 class="display-1 text-white mb-md-5">Yolesg roogo, la solution à votre porte!
                        <span>Etes-vous patient ou psychologue?</span>
                    </h4>
                    <div class="pt-2">
                        <a href="{{route('connexion')}}" class="btn btn-light rounded-pill py-md-3 px-md-5 mx-2">psychologue</a>
                        <a href="{{route('espaceClient')}}" class="btn btn-outline-light rounded-pill py-md-3 px-md-5 mx-2">Patient</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    

    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Services</h5>
                <h1 class="display-4">Les meilleurs services pour votre bien-être</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <h4 class="mb-3">Ecoute</h4>
                        <h6>Comment se faire écouter?</h6>
                        <p class="m-0">Ayez juste la volonté de se faire écouter, de parler de vos soucis à un expert en la domaine.</p>
                        <a class="btn btn-lg btn-primary rounded-pill" href="{{route('meet')}}">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">  
                        <h4 class="mb-3">Conseils </h4>
                        <h6>Comment bénéficier de nos conseils?</h6>
                        <p class="m-0">Pour bénéficier de nos conseils, faites-vous écouter d'abord. Il y'a des professionnels à votre disposition. Remplissez juste le formulaire de rendez-vous et vous serez satisfait.</p>                        
                        <a class="btn btn-lg btn-primary rounded-pill" href="{{route('meet')}}">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <h4 class="mb-3">Suivi psychologique</h4>
                        <h6>Comment bénéficier d'un suivi psychologique sur notre plateforme?</h6>
                        <p class="m-0">Cliquez ici, <br>choisissez le motif de votre consultation, <br>choisissez le psychologue de votre choix, <br>cliquez sur le bouton Prendre un rendez-vous.</p>
                        <a class="btn btn-lg btn-primary rounded-pill" href="{{route('meet')}}">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->

    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Nos psychologues</h5>
                <h1 class="display-4">Des experts en santé mentales</h1>
            </div>
            <div class="owl-carousel team-carousel position-relative">
                <div class="team-item">
                    <div class="row g-0 bg-light rounded overflow-hidden">
                        <div class="col-12 col-sm-5 h-100">
                            <img class="img-fluid h-100" src="Images/Screenshot_20230901-195100.png" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                            <div class="mt-auto p-4">
                                <h3>Psy Edmond KAM</h3>
                                <h6 class="fw-normal fst-italic text-primary mb-4">psychologue du travail</h6>
                                <p class="m-0">Spécialiste en psychologie de travail, psy Edmond est operationnel en tout ce qui concerne le monde du travail, de l'entrprise. De l'organisation à la promotion des services, de la gestion du personnel à la productivité du personel. Vous vous sentez mal à l'aise dans votre service, vos études ne vont pas comme vous le souhaitez,vous avez des difficultés pour vous trouver un emploi stable et épanouissant? En voici un expert en la domaine.</p>
                            </div>
                            <div class="d-flex mt-auto border-top p-4">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <div class="row g-0 bg-light rounded overflow-hidden">
                        <div class="col-12 col-sm-5 h-100">
                            <img class="img-fluid h-100" src="Images/IMG_20220724_163512_949.jpg" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                            <div class="mt-auto p-4">
                                <h3>Psy Julène KYELEM</h3>
                                <h6 class="fw-normal fst-italic text-primary mb-4">Psychologue clinicienne</h6>
                                <p class="m-0">Psy Julène est une psychothérapeute. Elle s'est spécialisée en psychologie positive et de la personnalité. Vous avez besoin d'être écouter, de conseil sur votre vie privée, vous voulez mieux vous connaitre, vous comprendre, avoir de l'energie pour avancer malgré les difficultés? Elle est là.</p>
                            </div>
                            <div class="d-flex mt-auto border-top p-4">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <div class="row g-0 bg-light rounded overflow-hidden">
                        <div class="col-12 col-sm-5 h-100">
                            <img class="img-fluid h-100" src="Images/Screenshot_20230901-194928.png" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                            <div class="mt-auto p-4">
                                <h3>Psy Clarisse </h3>
                                <h6 class="fw-normal fst-italic text-primary mb-4">psychologue</h6>
                                <p class="m-0">Psy Clarisse est spécialiste en gestion émotionnelle. Elle évolue également dans la gestion des émotions et la prise en charge des problèmes relationnels. Vous vous sentez mal à l'aise dans votre couple, vous n'arrivez pas à maitriser vos sentiments de colère, de joie, Ce psy est le meilleur pour vous. </p>
                            </div>
                            <div class="d-flex mt-auto border-top p-4">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->



    <!-- Footer Start -->
 <div class="container-fluid bg-dark text-light mt-5 py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <a href="#"class="mb-2"><i class="fa fa-envelope text-primary me-3"></i>jukyelem25@gmail.com</a>
                    <a href="#"class="mb-0"><i class="fa fa-phone-alt text-primary me-3"></i>+22662810499</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">Lien rapide</h4>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="/"><i class="fa fa-angle-right me-2"></i>Accueil</a>
                        <a class="text-light mb-2" href="{{route('propos')}}"><i class="fa fa-angle-right me-2">A propos</i></a>
                        <a class="text-light mb-2" href="{{route('Nos_services')}}"><i class="fa fa-angle-right me-2">Services</i></a>
                        <a class="text-light mb-2" href="{{route('blog')}}"><i class="fa fa-angle-right me-2"></i>Blog</a>
                        <a class="text-light" href="#"><i class="fa fa-angle-right me-2"></i>Contactez-nous</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-light border-top border-secondary py-4">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">&copy; <a class="text-primary" href="#">Santé mentale</a>. Tout droit réservé.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
    </body>

</html>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="path-to/node_modules/bootstrap-table/dist/bootstrap-table.min.js"></script>
     <!-- partial -->
     </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/jquery.cookie.js" type="text/javascript"></script>
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->