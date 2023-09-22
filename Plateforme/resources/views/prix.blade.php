


@include('component.nav')
<div class="card container bg-light my-5 py-5 text-uppercase rounded-pill center" style="font-size:250">
  <div class="position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-circle d-flex flex-column align-items-center justify-content-center">
    <h5 class="text-center">Concernant nos tarifs</h5>
    <p class="text-dark">
    Le coût des séances de psychothérapies n'est pas fixe. Il varie en fonction des tarifs pratiqués par le ou la psychothérapeute.Ces thérapeutes exercent le plus souvent en cabinet libéral.

    les “psys” utilisent des méthodes différentes selon leur formation. Une méthode qui convient à une personne peut ne pas convenir à une autre. Aussi il est utile, avant de prendre rendez-vous ou lors de la première rencontre avec un “psy”, de lui demander quelle est son approche : cognitive et comportementale, psychanalytique ou autre.  Toutefois, cette possibilité varie beaucoup d’un service à l’autre.Raison pour laquelle il est dur de donner un tarif fixe pour les consultations. Notre  objectif premier est de vous faciliter l'accès aux services de soins psychologiques.</p>
  </div>
</div>


    
    <div class="container bg-primary my-5 py-5">
        <div class="container py-5">
            <div class="row gx-5">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h1 class="d-inline-block text-white text-uppercase border-bottom border-5 center">R.D.V</h1>
                        <h4 class="display-4">Faites vos rendez-vous ici</h4>
                    </div>
                    <p class="text-white mb-5"><h5 class="text-white fw-normal">Nos psychologues dotés d'une grande capacité d'écoute, préviennent, conseillent et accompagnent des patients souffrant de troubles du comportement ou de personnalité, des troubles moraux, psychiques, ponctuels ou chroniques, traversant des situations difficiles comme problèmes de relation amoureuse, deuil, incapacité de se positionner. Ils aident les professionnels soumis à une certaine pression, s'occupent de la prévention des risques professionnels, permettent des bilans de compétences, de la gestion de carriere, de la mobilité professionnelle, mettent en place des thérapies individuelles ou collectives adoptées dans le respect et le developpement du droit des personnes et de leur dignité.Nos spécialistes adressent à tous d'être en meilleure santé mentale, plus performants, engagés créatifs et équilibrés. Que tu sois enfant, adolescents, adultes, handicapés...</h5> </p>
                         <a class="btn btn-dark display-4 rounded-pill mx-2 me-2 " href="{{route('list_psy')}}">Quel psychologue me convient?</a>
                         <a class="btn btn-outline-dark display-4 rounded-pill  " class="col-md-6 text-center text-" href="{{route('domaines')}}">Découvrir quelques termes de la psychologie</a>
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
                                <h4 class="fw-normal fst-italic text-primary mb-4">psychologue du travail</h4>
                                <p class="text-dark">Spécialiste en psychologie de travail, psy Edmond est operationnel en tout ce qui concerne le monde du travail, de l'entrprise. De l'organisation à la promotion des services, de la gestion du personnel à la productivité du personel. Vous vous sentez mal à l'aise dans votre service, vos études ne vont pas comme vous le souhaitez,vous avez des difficultés pour vous trouver un emploi stable et épanouissant? En voici un expert en la domaine.</p>
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
                                <p class="text-dark">Psy Julène est une psychothérapeute. Elle s'est spécialisée en psychologie positive et de la personnalité. Vous avez besoin d'être écouter, de conseil sur votre vie privée, vous voulez mieux vous connaitre, vous comprendre, avoir de l'energie pour avancer malgré les difficultés? Elle est là.</p>
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
                                <p class="text-dark">Psy Clarisse est spécialiste en orientation professionnelle. Elle évolue également dans la gestion des émotions et la prise en charge des problèmes relationnels. Vous vous sentez mal à l'aise dans votre couple, vous n'arrivez pas à maitriser vos sentiments de colère, de joie, Ce psy est le meilleur pour vous. </p>
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


    @include('component.footer')

