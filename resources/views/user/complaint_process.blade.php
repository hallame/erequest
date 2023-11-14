@extends('user_layout.master2')
@section('title')
Change Password
@endsection
@section('content')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2 style="font-weight: bold; font-size: 40px; ">DEMARCHE</h2>
        <ol>
            <li><a href="{{route('index')}}">Accueil</a></li>
            <li class="white-text">Réclamation de note</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->



    <!-- ======= Servie Cards Section ======= -->
    <section id="services-cards" class="services-cards">
      <div class="container" data-aos="fade-up">

        <div class="row gy-12">

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <!-- <h2 style="display: block; align-items: center; justify-content: center; align-items: center;">DEMARCHE A SUIVRE POUR FAIRE UNE RECLAMATION</h2> -->
            <p>
              Pour pouvoir faire une réclamation de note, vous êtes appelé à procéder comme suit:
            </p>

            <ul class="list-unstyled">
             
              <li><i class="bi bi-check2"></i> <span>Scannez (prenez une photo claire de) votre fiche de preinscription validée de l'année <br> academique en cours.</span></li>
              <li><i class="bi bi-check2"></i> <span> <a href="login.html">Connectez-vous</a> sur la plateforme.</span></li>
              <li><i class="bi bi-check2"></i> <span>Rendez-vous dans Menu; accédez à la section SERVICES. Ensuite selectionnez RECLAMATION</span></li>

              <li><i class="bi bi-check2"></i> <span>Remplissez soigneusement le <a href="complaint.html"> formulaire</a> de réclamation
                de note. Suivez les instructions  <br>jusqu'à l'etape de paiement </span></li>
                <!-- <li><i class="bi bi-check2"></i> <span>Passez à l'étape suivante en cliquant sur le boutton SUIVANT </span></li> -->
                <li><i class="bi bi-check2"></i> <span>Renseigner les information relatives aux paiement en remplissant le formulaire de paiement.</span></li>
                <li><i class="bi bi-check2"></i> <span>Validez votre reclamation en confirmant la transaction  </span></li>
                <!-- <li><i class="bi bi-check2"></i> <span>Un message de confirmation sera envoyé sur votre numéro de téléphone.Veuillez confirmez <br> la transaction en
                renseignant votre code secret. Rassurez-vous d'avoir un solde suffisant sinon <br> le payement echouera et votre dossier sera rejeté </span></li>
                <li><i class="bi bi-check2"></i> <span>Aprés confirmation de la transaction, vous receverez la quittance de paiement dans votre boite <br> élèctronique.
                Veuillez la télécharger et la conserver jalousement. Elle pourra vous servir plutard </span></li> -->
            </ul>
          </div><!-- End feature item-->

        </div>

        <!-- <div class="header-buttons" id="auth_button">
          <a href="login.html" class="login-button">J'ai compris!</a>
        </div> -->
        <div class="header-buttons" id="auth_button" style="margin-bottom: 1px; position: relative; align-items: center; justify-content: center;">
            <a href="{{ route('login')}}" class="login-button">J'ai compris!</a>
          </div>
        
      </div>
    </section>
    
    <!-- End Servie Cards Section -->

   
  </main><!-- End #main -->

  
  @endsection