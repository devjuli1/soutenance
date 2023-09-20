@include('component.nav')

 <!-- Hero Start -->
 <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-12 text-center text-lg-start">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5" style="border-color: rgba(256, 256, 256, .3) !important;">Bienvenus sur santé mentale</h4>
                    <img src="Images/accueil.png"width='100%' alt="fiche">
                    <h4 class="display-1 text-white mb-md-5">Vous avez des problèmes psychologiques,plus de crainte! Vous êtes au bon lieu. 
                        <span>Etes-vous ancien ou nouveau?</span></h4>
                    <div class="pt-2">
                        <a href="{{route('connexion')}}" class="btn btn-light rounded-pill py-md-3 px-md-5 mx-2">Ancien</a>
                        <a href="{{route('inscriptionClient')}}" class="btn btn-outline-light rounded-pill py-md-3 px-md-5 mx-2">Nouveau</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="Images/OIP.jpeg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">About Us</h5>
                        <h1 class="display-4">Les meilleurs services pour votre bien-être</h1>
                    </div>
                    <p></p>
                    <div class="row g-3 pt-3">
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class=" mb-3"></i>
                                <h6 class="mb-0">Des professionnels<small class="d-block text-primary">Qualifiés</small></h6>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class=" mb-3"></i>
                                <h6 class="mb-0">ECOUTE<small class="d-block text-primary">Service</small></h6>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class=" mb-3"></i>
                                <h6 class="mb-0">CONSEILS<small class="d-block text-primary">Service</small></h6>  
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class=" mb-3"></i>
                                <h6 class="mb-0">SOINS PSYCHOLOGIQUES<small class="d-block text-primary">Service</small></h6>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    
    
 
  <!-- Team Start -->
  <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Nos psychologues</h5>
                <h1 class="display-4">Des experts en santé mentales</h1>
            </div>
            <div class="owl-carousel team-carousel position-relative px-15px ">
                <div class="team-item">
                    <div class="row g-0 bg-light rounded overflow-hidden">
                        <div class="col-12 col-sm-5 h-100">
                            <img class="img-fluid h-100" src="Images/Screenshot_20230901-195100.png" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                            <div class="mt-auto p-4">
                                <h3>Psy Edmond KAM</h3>
                                <h4 class="fw-normal fst-italic text-primary mb-4">psychologue du travail</h4>
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
                                <h4 class="fw-normal fst-italic text-primary mb-4">Psychologue clinicienne</h4>
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
                                <h4 class="fw-normal fst-italic text-primary mb-4">psychologue de l'orientation</h4>
                                <p class="m-0">Psy Clarisse est spécialiste en orientation professionnelle. Elle évolue également dans la gestion des émotions et la prise en charge des problèmes relationnels. Vous vous sentez mal à l'aise dans votre couple, vous n'arrivez pas à maitriser vos sentiments de colère, de joie, Ce psy est le meilleur pour vous. </p>
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



   <!-- Search Start -->
   <div class="container-fluid bg-primary my-5 py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-white text-uppercase border-bottom border-5">Concept  psychologique</h5>
                <h1 class="display-4 mb-4">Recherchons les concepts propre à la psychologie</h1>
              
            </div>
            <div class="mx-auto" style="width: 100%; max-width: 600px;">
                <div class="input-group">
                    <select class="form-select border-primary w-25" style="height: 60px;">
                        <option selected>Domaines</option>
                        <option value="1">Psychologue clinicien – psychothérapeute</option>
                        <option value="2">Psychiatre </option>
                        <option value="3">Neuropsychologue </option>
                        <option value="4">Psychanalyste</option>
                        <option value="5">Sexologue </option>
                        <option value="6">Psychopraticien(ne)</option>
                        <option value="7">Psychologue</option>
                        <option value="8">psychoergonome  </option>
                        <option value="9">psychopote</option>
                        <option value="10">Logothérapeute</option>
                        <option value="11">Problèmes sexuels  </option>
                        <option value="12">Deuil</option>
                        <option value="13">Traumatismes</option>
                        <option value="14">Troubles psychiques</option>
                        <option value="15">Troubles alimentaires</option>
                        <option value="16">Addictions</option>
                        <option value="17">depressions</option>
                    </select>
                    <!-- lien d'un site de dictionnaire psychologique -->
                    <a class="form-control border-primary w-50 border-0 w-25" href="#"  > Rechercher</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Search End -->



  
    
    @include('component.footer')