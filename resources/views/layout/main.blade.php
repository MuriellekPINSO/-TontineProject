<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tontine</title>
   
   
    <!-- <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"> -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('img/fontawesome-free-6.5.2-web/css/all.min.css')}}">
    @vite(['resources/sass/app.scss','resources/js/app.js'])
</head>
<body>
    <nav class=" tete-navbar navbar navbar-expand-lg navbar-dark position-fixed w-100">
        <div class="container">
          <a class="navbar-brand py-3 text-uppercase   fw-border " href="#">DigitalTontine</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item pe-4">
                <a class="nav-link active" aria-current="page" href="/acceuil">Acceuil</a>
              </li>
              <li class="nav-item pe-4">
                <a class="nav-link" href="/marche">Comment ca marche</a>
              </li>
              
              <li class="nav-item pe-4">
                <a class="nav-link" href="/contact" >Contact</a>
              </li>
            </ul>
           <ul class="navbar-nav ms-auto">
            <li class="nav-items">
              <a href="#" class=" btn-order  btn btn-success rounded-5">se connecter/s'inscrire</a>
            </li>     
           
          </ul>
          </div>
        </div>
    </nav>
    
    @yield('content')
   

    
   
    <footer class="bas-page merriweather">
      <div class="container">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-3">
            <h4>DigitalTontine</h4>
            <p>
             DigitalTontine est conçue pour automatiser et simplifier la gestion de vos associations tontinières. 
             Elle garantit la transparence dans l'administration de 
              votre association et favorise la cohésion entre les membres grâce à des outils modernes.
            </p>
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-youtube"></i>
          </div>
          <div class="col-md-3 ">
            <h4>Accés rapide</h4>
            <a href="">Inscription/Connexion</a> <br>
            <a href="">Comment ca marche</a> <br>
            <a href="">Télécharger pour android</a> <br>
            <a href="">Télécharger pour ios</a>
            
          </div>
          <div class="col-md-3">
            <h4>Contact</h4>
            <p> DigitalTontine est developpée et commercialisée par codingNode
              Basée au BENIN.</p>
            <p> Email: digitale@tontine.com</p>
           <p>tel:59350935</p>


          </div>
          
        
        </div>
      </div>
      <hr>
      <div class="container footer-section ">
          <p>DigitalTontine © 2024 Tous droits réservés </p>
      </div>
    </footer>
  
  <!--  <script src="asset/js/bootstrap.bundle.min.js"></script> -->
</body>
</html>