

@include('component.nav') 

    
    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Services</h5>
                <h1 class="display-4">Des soins mentales de tailles!</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <h4 class="mb-3">Ecoute</h4>
                        <h6>Comment se faire écouter?</h6>
                        <p class="m-0">Ayez juste la volonté de se faire écouter, de parler de vos soucis à un expert en la domaine.</p>
                        <a class="btn btn-lg btn-primary rounded-pill" href="{{route('inscriptionClient')}}">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">  
                        <h4 class="mb-3">Conseils </h4>
                        <h6>Comment bénéficier de nos conseils?</h6>
                        <p class="m-0">Pour bénéficier de nos conseils, faites-vous écouter d'abord. Il y'a des professionnels à votre disposition. Remplissez juste le formulaire de rendez-vous et vous serez satisfait.</p>                        
                        <a class="btn btn-lg btn-primary rounded-pill" href="{{route('inscriptionClient')}}">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <h4 class="mb-3">Suivi psychologique</h4>
                        <h6>Comment bénéficier d'un suivi psychologique sur notre plateforme?</h6>
                        <p class="m-0">Cliquez ici, <br>choisissez le motif de votre consultation, <br>choisissez le psychologue de votre choix, <br>cliquez sur le bouton Prendre un rendez-vous.</p>
                        <a class="btn btn-lg btn-primary rounded-pill" href="{{route('inscriptionClient')}}">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->

<!--Appointment Start -->
    <div class="container-fluid bg-primary my-5 py-5">
        <div class="container py-5">
            <div class="row gx-5">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h1 class="d-inline-block text-white text-uppercase border-bottom border-5 center">Espace de <rendez-vous>
                            <img src="Images/télécharger (1).jpeg" alt="">
                        </rendez-vous></h1>
                        <h4 class="display-4">Faites vos rendez-vous ici</h4>
                    </div>
                    <div class="pt-2">
                       <p class="text-white mb-5"><h5 class="text-white fw-normal">Nos psychologues dotés d'une grande capacité d'écoute, préviennent, conseillent et accompagnent des patients souffrant de troubles du comportement ou de personnalité, des troubles moraux, psychiques, ponctuels ou chroniques, traversant des situations difficiles comme problèmes de relation amoureuse, deuil, incapacité de se positionner. Ils aident les professionnels soumis à une certaine pression, s'occupent de la prévention des risques professionnels, permettent des bilans de compétences, de la gestion de carriere, de la mobilité professionnelle, mettent en place des thérapies individuelles ou collectives adoptées dans le respect et le developpement du droit des personnes et de leur dignité.Nos spécialistes adressent à tous d'être en meilleure santé mentale, plus performants, engagés créatifs et équilibrés. Que tu sois enfant, adolescents, adultes, handicapés...</h5> </p>
                           <a href="{{route('specialiste')}}" class="btn btn-light rounded-pill py-md-3 px-md-5 mx-2">Quel psychologue me convient?</a>
                           <a href="{{route('domaines')}}" class="btn btn-outline-light rounded-pill py-md-3 px-md-5 mx-2">Découvrir quelques termes de la psychologie</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-white text-center rounded p-5">
                        <h1 class="mb-4">Le formulaire du rendez-vous</h1>
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <select class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected>le motif de votre consultation</option>
                                        <option value="1">Problèmes relationnels </option>
                                        <option value="1">Gestion des émotions </option>
                                        <option value="1">Confiance en soi </option>
                                        <option value="1">Difficultés de communication</option>
                                        <option value="1">Problèmes de couple </option>
                                        <option value="1">Problèmes familiaux </option>
                                        <option value="1">Problèmes professionnels</option>
                                        <option value="1">Phobies  </option>
                                        <option value="1">Mal-être / dépression </option>
                                        <option value="1">Stress / anxiété </option>
                                        <option value="1">Problèmes sexuels  </option>
                                        <option value="1">Deuil</option>
                                        <option value="1">Traumatismes</option>
                                        <option value="1">Troubles psychiques</option>
                                        <option value="1">Troubles alimentaires</option>
                                        <option value="2">Addictions</option>
                                        <option value="3">Autres péoccupations</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected>Selectionner un Psychologue</option>
                                        <option value="1">Psy Edmond KAM</option>
                                        <option value="2">Psy julène KYELEM</option>
                                        <option value="3">Psy Clarisse</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" name="nom" class="form-control bg-light border-0" placeholder="Votre Nom" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" name="prenom" class="form-control bg-light border-0" placeholder="Votre Prenom" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" name="email" class="form-control bg-light border-0" placeholder="Votre Email" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="password" name="password" class="form-control bg-light border-0" placeholder="Votre mot de passe" style="height: 55px;">
                                </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Prendre rendez-vous</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->
    
 <!-- Testimonial Start -->
 <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Temoignages</h5>
                <h1 class="display-4">Patients parlent de nos services</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto" src="img/testimonial-1.jpg" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-4 fw-normal">Je souffrais d'une faiblesse sexuel et cela a provoquer un  deséquilibre sur tous les domaines de ma vie. Honteux que ce soit je ne pouvais à personne et je voyais génant de partir en consultation. Grâce à cette pateforme et à ces services en ligne, j'ai pu me depasser de ma honte et Dieu merci j'aitrouver solution à mon problème.</p>
                            <hr class="w-25 mx-auto">
                            <h3>Miky</h3>
                            <h6 class="fw-normal text-primary mb-3">DRH</h6>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto" src="img/testimonial-2.jpg" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-4 fw-normal">Je suis étudiant né dans une basse famille. La pression de la vie, du campus, les mauvais compagnies face à mon incapacité interne de s'adapter, m'avaient rendu délinquent, consommateur de stupéfiants. Cette plateforme m'a ouvert les yeux . je sais maintenant vers  où orienter ma vie.</p>
                            <hr class="w-25 mx-auto">
                            <h3>Jules</h3>
                            <h6 class="fw-normal text-primary mb-3">Etudiant</h6>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto" src="img/testimonial-3.jpg" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-4 fw-normal">J'étais victime de l'harcelement et de la violence sexuelle. j'etais renfermée en moi même, nerveuse, facilement influençable et cela me detruisais interieurement, et m'empechais d'être productive au service sans que je ne puisse parler à personne. La decouverte de cette plateforme et leur service m'a donné un nouveau rayon de vie et m'a aidé à reprendre les rènes de ma vie.</p>
                            <hr class="w-25 mx-auto">
                            <h3>Mao</h3>
                            <h6 class="fw-normal text-primary mb-3">Profession</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    @include('component.footer')

