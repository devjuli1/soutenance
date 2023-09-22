@include('component.nav')


     <!-- Appointment Start -->
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
                    <p class="text-white mb-5"><h5 class="text-white fw-normal">Nos psychologues dotés d'une grande capacité d'écoute, préviennent, conseillent et accompagnent des patients souffrant de troubles du comportement ou de personnalité, des troubles moraux, psychiques, ponctuels ou chroniques, traversant des situations difficiles comme problèmes de relation amoureuse, deuil, incapacité de se positionner. Ils aident les professionnels soumis à une certaine pression, s'occupent de la prévention des risques professionnels, permettent des bilans de compétences, de la gestion de carriere, de la mobilité professionnelle, mettent en place des thérapies individuelles ou collectives adoptées dans le respect et le developpement du droit des personnes et de leur dignité.Nos spécialistes adressent à tous d'être en meilleure santé mentale, plus performants, engagés créatifs et équilibrés. Que tu sois enfant, adolescents, adultes, handicapés...</h5> </p>
                         <a class="btn btn-dark display-4 rounded-pill mx-2 me-2 " href="">Quel psychologue me convient?</a>
                         <a class="btn btn-outline-dark display-4 rounded-pill  " class="col-md-6 text-center text-" href="">Découvrir quelques termes de la psychologie</a>
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
                                    <input type="text" name="prenom" class="form-control bg-light border-0" placeholder="Votre prenom" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" name="email" class="form-control bg-light border-0" placeholder="Votre Email" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="password" name="password" class="form-control bg-light border-0" placeholder="Votre mot de passe" style="height: 55px;">
                                </div>

                                <fieldset id="field_9_5" class="gfield gfield--type-radio gfield--type-choice gf_list_inline gfield_contains_required field_sublabel_below gfield--has-description field_description_above gfield_visibility_visible" data-js-reload="field_9_5">
                                  <legend class="gfield_label gform-field-label">La consultation est-elle pour vous-même ou pour une autre personne?<span class="gfield_required">
                                    <span class="gfield_required gfield_required_asterisk">*</span>
                                  </legend>
                                   <div class="ginput_container ginput_container_radio">
                                    <div class="gfield_radio" id="input_9_5 col-12">
			                          <div class="gchoice gchoice_9_5_0 col-12 col-sm-6">
					                    <input class="gfield-choice-input" name="input_5" type="radio" value="Moi-même" id="choice_9_5_0" onchange="gformToggleRadioOther( this )" aria-describedby="gfield_description_9_5">
					                    <label for="choice_9_5_0" id="label_9_5_0" class="gform-field-label gform-field-label--type-inline">Moi-même</label>
			                          </div>
			                          <div class="gchoice gchoice_9_5_1 col-12 col-sm-6">
					                    <input class="gfield-choice-input" name="input_5" type="radio" value="Une autre personne" id="choice_9_5_1" onchange="gformToggleRadioOther( this )">
					                    <label for="choice_9_5_1" id="label_9_5_1" class="gform-field-label gform-field-label--type-inline">Une autre personne</label>
			                          </div>
                                    </div>
                                   </div>                               
                                </fieldset>
                                <div id="field_9_10" class="gfield gfield--type-html gfield_html gfield_html_formatted gfield_no_follows_desc field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible" data-js-reload="field_9_10"><h3>Politique de confidentialité</h3>
                                        <p>Veuillez prendre note que ce courriel est traité en toute confidentialité par l'équipe d'accueil de notre plateforme.</p>
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
                            <img class="img-rounded-circle h-100" src="Images/Screenshot_20230901-195100.png" style="object-fit: cover;">
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



    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Blog Post</h5>
                <h1 class="display-4">Our Latest Medical Blog Posts</h1>
            </div>
            <div class="row g-5">
                <div class="col-xl-4 col-lg-6">
                    <div class="bg-light rounded overflow-hidden">
                        <img class="img-fluid w-100" src="img/blog-1.jpg" alt="">
                        <div class="p-4">
                            <a class="h3 d-block mb-3" href="">Dolor clita vero elitr sea stet dolor justo  diam</a>
                            <p class="m-0">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                rebum clita rebum dolor stet amet justo</p>
                        </div>
                        <div class="d-flex justify-content-between border-top p-4">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-2" src="img/user.jpg" width="25" height="25" alt="">
                                <small>John Doe</small>
                            </div>
                            <div class="d-flex align-items-center">
                                <small class="ms-3"><i class="far fa-eye text-primary me-1"></i>12345</small>
                                <small class="ms-3"><i class="far fa-comment text-primary me-1"></i>123</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="bg-light rounded overflow-hidden">
                        <img class="img-fluid w-100" src="img/blog-2.jpg" alt="">
                        <div class="p-4">
                            <a class="h3 d-block mb-3" href="">Dolor clita vero elitr sea stet dolor justo  diam</a>
                            <p class="m-0">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                rebum clita rebum dolor stet amet justo</p>
                        </div>
                        <div class="d-flex justify-content-between border-top p-4">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-2" src="img/user.jpg" width="25" height="25" alt="">
                                <small>John Doe</small>
                            </div>
                            <div class="d-flex align-items-center">
                                <small class="ms-3"><i class="far fa-eye text-primary me-1"></i>12345</small>
                                <small class="ms-3"><i class="far fa-comment text-primary me-1"></i>123</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="bg-light rounded overflow-hidden">
                        <img class="img-fluid w-100" src="img/blog-3.jpg" alt="">
                        <div class="p-4">
                            <a class="h3 d-block mb-3" href="">Dolor clita vero elitr sea stet dolor justo  diam</a>
                            <p class="m-0">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                rebum clita rebum dolor stet amet justo</p>
                        </div>
                        <div class="d-flex justify-content-between border-top p-4">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-2" src="img/user.jpg" width="25" height="25" alt="">
                                <small>John Doe</small>
                            </div>
                            <div class="d-flex align-items-center">
                                <small class="ms-3"><i class="far fa-eye text-primary me-1"></i>12345</small>
                                <small class="ms-3"><i class="far fa-comment text-primary me-1"></i>123</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->
    

    @include('component.footer')