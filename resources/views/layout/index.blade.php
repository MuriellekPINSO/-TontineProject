
@extends('layout.main')
@section('content')
    <section class=" barner d-flex justify-content-center align-items-center pt-5">
      <div class="container py-5 my-5">
        <div class="row">
          <div class="col-md-6"></div>
          <div class="col-md-6">
            <h1 class="text-capitalize py-3 barner-desc  redressed">
              Lorem ipsum dolor sit amet consectetur, <br>
            Iure vero, rto optio. Qui aut, sed aspo!
            </h1>
            <p>
             <button class="btn btn-outline-info btn-lg rounded-5 merriweather">En savoir plus
            
             </button>
            </p>
            
          </div>

        </div>
      </div>
    </section>
    <section class="presentation py-5">
      <div class="container">
        <div class="row">
          <div class="card mb-3 border-0 rounded-0" >
            <div class="row ">
              <div class="col-md-6">
                <img src="img/homme.avif" class="img-fluid image-card " alt="...">
              </div>
              <div class="col-md-6">
                <div class="card-body">
                  <h5 class="card-title">C'est quoi DigitalTontine?</h5>
                  <p class="card-text">DigitalTontine est une plateforme en ligne autogérée qui 
                    vous aide à mieux administrer vos tontines et vos associations.</p> 
                 
                  <p class="text-muted">Cette plateforme automatise les calculs financiers, favorise la participation des membres à la gestion de l'associaition
                     et donne à ces derniers l'accès en temps réel aux informations qui les concerne.</p>
                </div>
              </div>
            </div>
            
          </div> 

        </div>
        <div class="card my-5 border-0 rounded-0" >
          <div class="row ">
            
            <div class="col-md-6">
              <div class="card-body">
                <h5 class="card-title">Nos exploire</h5>
                <p class="card-text">DigitalTontine ne vous reserve que du meilleure.</p>
                <p class="card-text"><a href=" " class="text-muted btn " >Je m'inscrire?</a></p>
              </div>
            </div>
            <div class="col-md-6">
              
              <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                   
                    <img src="img/enfant.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Grâce a la tontine j'ai facilement gerer la rentrée scolaire</h5>
                      <p>DigitalTontine vous aide a mieux gerer l'épargne /crédit</p>
                  </div>
                  </div>
                  <div class="carousel-item">
                    <img src="img/famille.jpeg" class="d-block w-100 img1" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Grâce a la tontine nous avons realiser notre projet</h5>
                      <p>DigitalTontine vous facilite la gestion de plusieur activités</p>
                  </div>
                  </div>
                  <div class="carousel-item">
                    <img src="img/ouvrier.jpeg" class="d-block w-100 img1" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Grâce a la tontine j'ai bati mon immeuble</h5>
                      <p>DigitalTontine vous aide a mieux gerer vos finances</p>
                  </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
          </div>
          
        </div> 
      </div>
    </section>
    <section class="historique">
      <div class="container px-5">
        <div class="row">
          
          <div class="col md-6 merriweather ">
            <H3 class="py-3 ">Pourquoi DigitalTontine ?</H3>
            <p>La tontine digitale offre de nombreux avantages
               par rapport aux tontines traditionnelles.
                Tout d'abord, elle permet une gestion plus facile
                 et sécurisée des contributions et des paiements. 
                 En effet, tout se fait en ligne, ce qui évite les risques de perte
                  ou de vol d'argent. De plus, la tontine digitale offre une plus 
                  grande transparence et traçabilité des transactions, ce qui rassure les participants.
                   Enfin, elle permet également une plus grande flexibilité 
              dans la gestion des cotisations et des bénéfices, 
              facilitant ainsi la participation de chacun.</p>
              <p>
                <button class="btn btn-outline-info btn-lg rounded-5 merriweather button1-marche ">comment ca marche
               
                </button>
               </p>

          </div>
          <div class="col md-6 d-flex ">
            <div class="col md-6 ">
              <div class="atout-section my-3 py-3">
                <i class="fa-solid fa-file-invoice-dollar image-section"></i>
                <h3>Transparence financiére</h3>
                <p class="text-muted text">Garder une trace des translation financiere</p>
              </div >
              <div  class="atout-section atout-section3 py-3 ">
                <i class="fa-solid fa-info image-section"></i>
                <h3>Acces a l'informations</h3>
                <p class="text-muted text">Rendre les information disponibles et acessible</p>
              </div>
              
            </div>
            <div class="col md-6">
              <div class="atout-section atout-section2 my-3 py-3">
                <i class="fa-solid fa-check image-section"></i>
                <h3>Exactitude des calculs</h3>
                <p class="text-muted fs-9 text">Flexibilité dans la gestion des cotisations et des bénéfices.</p>
              </div>
              <div class="atout-section atout-section1 my-3 py-3">
                <i class="fa-solid fa-database image-section"></i>
                <h3>Péreniter des données</h3>
                <p class="text-muted text">Sauvegarder les donnes actuel et historique.</p>
              </div>
             
            </div>
            
          </div>
        </div>
      </div>
      
    </section>
    <section>
      <div class="container">
        <div class="row  py-3 my-5 ">
          
          
          <div class=" col-md-6 p-3 ">
            <h3 class="">Télécharger pour le mobile</h3>
            <p class=" merriweather fs-6"> En plus de l'interface web accessible à partir d'un navigateur,
               DigitalTontine possède une application mobile qui permet aux membres 
               de rester connecté à l'association en tout temps. Bien que disposant 
               de quelques fonctions administratives, l'application mobile est optimisée 
               pour une utilisation par les membres. Elle est disponible sur Google Play store et sur l’App store.


            </p>
            <a href="#" class="  btn btn-warning rounded-5"> <i class="fa-brands fa-android"></i>Telecharger pour android</a>

            <a href="#" class="   btn btn-success rounded-5"> <i class="fa-brands fa-apple"></i>Telecharger pour ios</a>
          </div>
          <div class="col-md-6 p-3 px-4 ">
            <img  class="image-section1"src="img/phone.jpeg" alt="">
          </div>
        </div>
      </div>
    </section>
    @stop
   