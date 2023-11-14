@extends('user_layout.master')
@section('title')
Erequest
@endsection
@section('content')

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{url('/')}}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{asset('assets/img/logo.jpeg')}}" alt="FASEG">
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>

          <li><a href="{{url('/')}}">Accueil</a></li>
          <!-- <li><a href="{{url('/')}}">Demarche</a></li> -->
          <li class="dropdown"><a href=""><span>Démarches</span> <i
            class="bi bi-chevron-down dropdown-indicator"></i></a>
        <ul>
            <li><a href="{{url('/complaint_process') }}">Faire une Réclamation</a></li>
            <li><a href="{{url('/transcript_process')}}">Demande de Relevé de note</a></li>
          <li><a href="{{url('/certificate_process')}}">Demande d'Attestation</a></li>
          <li><a href="{{url('/diploma_process')}}">Demande de Diplôme</a></li>

        </ul>
      </li>

          <li class="dropdown"><a href="#"><span>Services</span> <i
                class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
                <li><a href="{{url('/complaint_index') }}">Faire une Réclamation</a></li>

              <li class="dropdown"><a href="#"><span>Demander un acte academique</span> <i
                    class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="{{url('/transcript_redirect')}}" >Relevé de note</a></li>
                  <li><a href="{{url('/certificat_redirect')}}" >Attestation de succès</a></li>
                  <li><a href="{{url('/diploma_redirect')}}">Diplôme</a></li>

                </ul>
              </li>
            </ul>
          </li>
          <li><a href="{{url('/')}}">A propos</a></li>
          <li><a href="{{url('/contact')}}">Contact</a></li>
          <div class="header-buttons" id="auth_button">
            <a href="{{url('/login')}}" class="login-button">Connexion</a>
            <a href="{{url('/register')}}" class="register-button">Inscription</a>
          </div>

        </ul>
      </nav><!-- .navbar -->

      <div id="login-modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Veuillez vous connecter</p>
            <button id="login-button">Login</button>
        </div>
    </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2 data-aos="fade-down" style="margin-top: 30px;">Bienvenue <span></span></h2>
            <p data-aos="fade-up">La FASEG à votre service autrement</p>
            <!-- <p data-aos="fade-up"> </p> -->

            <p data-aos="fade-up">Désormais, vos réclamations de note et demande d'actes academiques en toute simplicité et en toute facilité</p>

            <div id="popup" class="popup">
              <div class="popup-content">
                <span class="close-popup" onclick="closePopup()">&times;</span>
                <div id="popup-text"></div>
              </div>
            </div>

            <a data-aos="fade-up" data-aos-delay="200" href="{{url('/register')}}" class="btn-get-started">Commencer</a>
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active" style="background-image: url({{asset('assets/img/hero-carousel/hero-carousel-1.jpg')}})">
      </div>
      <div class="carousel-item" style="background-image: url({{asset('assets/img/hero-carousel/hero-carousel-2.jpg')}})"></div>
      <div class="carousel-item" style="background-image: url({{asset('assets/img/hero-carousel/hero-carousel-3.jpg')}})"></div>
      <div class="carousel-item" style="background-image: url({{asset('assets/img/hero-carousel/hero-carousel-4.jpg')}})"></div>
      <div class="carousel-item" style="background-image: url({{asset('assets/img/hero-carousel/hero-carousel-5.jpg')}})"></div>

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- End Hero Section -->
 @endsection