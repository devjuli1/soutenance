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