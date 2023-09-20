
@include('component.nav')

   <!-- Contact Start -->
   <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h1 class="display-4">INSCRIVEZ VOUS ICI</h1>
            </div>
            <div class="row">
                <div class="col-12" style="height: 500px;">
                  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                          <div class="carousel-item active" data-bs-interval="10000">
                            <img src="Images/OIP (2).jpeg" class="d-block w-100" alt="OIP (2)">
                          </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                </div>
            </div>
            <div class="row justify-content-center position-relative" style="margin-top: -200px; z-index: 1;">
                <div class="col-lg-8">
                    <div class="bg-white rounded p-5 m-5 mb-0">
                        <form action="{{route('storeClient')}}" method='post'>
                            @csrf
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" name='nom' class="form-control bg-light border-0" placeholder="Votre Nom" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" name='prenom' class="form-control bg-light border-0" placeholder="Votre Prenom" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="file" name='photo' class="form-control bg-light border-0" placeholder="Inserer votre photo" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                <select name="ville" class="form-control bg-light border-0" style="height: 55px;">
                                      <option>Votre ville</option>
                                      <option>Koudougou</option>
                                      <option>Koupela</option>
                                      <option>Bobo</option>
                                      <option>Ouagadougou</option>
                                      <option>Yanyan</option>
                                </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="number" name='age' min="15" class="form-control bg-light border-0" placeholder="Votre Age" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" name='profession' class="form-control bg-light border-0" placeholder="Votre Profession" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" name='email' class="form-control bg-light border-0" placeholder="Votre Email" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6" >
                                    <input type="password" name='password'class="form-control bg-light border-0" placeholder="Mot de passe" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="checkbox"> Je jure que toutes les informations renseignées sont vraies et je repondrai en cas de tentative de falcification </label> 
                                </div>
                                <div class="col-12 col-sm-6">
                                    <button class="btn btn-primary w-100 py-3" type="submit">S'inscrire</button>
                                </div>
                                 <div class="col-12 col-sm-6">
                                 Avez-vous déjà un compte? <a href=""class="text-primary">Se connecter</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    @include('component.footer')