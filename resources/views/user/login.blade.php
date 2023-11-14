@extends('user_layout.master')
@section('title')
Change Password
@endsection
@section('content')
  <main id="main">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs d-flex align-items-center"
         style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
        <h2 class="responsive-heading" style="font-weight: bold; font-size: 40px; " >CONNEXION</h2>
        <ol>
          <li><a href="{{ route('index')}}" style="color: blue;">Accueil</a></li>
          <li class="white-text">Connexion</li>
        </ol>
      </div>
    </div><!-- End Breadcrumbs -->

    
<!-- Centrez le formulaire de connexion et décalez-le légèrement vers le haut -->
<div class="container" style="height: 70vh; display: flex; justify-content: center; align-items: center; margin-top: 50px;">
  <div class="col-lg-6 login-box" data-aos="fade-up">
    <i class="fas fa-user fa-4x" style="color: blue; display: block; margin-left: 45%; margin-top: 10px;"></i><br><br>
    <!-- Icône de personne centrée -->
    <!-- Login Form -->

    @guest

    <form class="login-form" method="post" action="{{ route('login_post')}}">
      
      @csrf

      <div class="form-group">
        <div class="input-group">
          <span class="input-group-text"><i class="fas fa-envelope"></i></span>
          <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
        </div>
      </div><br>

      <div class="form-group mb-3"> <!-- Ajout de la classe mb-3 pour la marge inférieure -->
        <div class="input-group">
          <span class="input-group-text"><i class="fas fa-lock"></i></span>
          <input type="password" id="password" name="password" class="form-control" placeholder="Mot de passe" required>
          <!-- <button id="togglePassword" type="button" class="btn btn-toggle-password"><i class="fas fa-eye"></i></button> -->
        </div>
      </div>

      <div class="d-flex justify-content-between align-items-center">
        <button type="submit" class="btn btn-primary btn-yellow" style="margin-bottom: 60px; height: 40px; width: 135px;">Se connecter</button>
        <a href="{{ route('forgot_password')}}" style="color: blue; margin-bottom: 30px; height: 55px; margin-left: 10px;">Mot de passe oublié?</a>
      </div>
    </form>
    <!-- End Login Form -->

    @else

    {{-- <p>Welcome, {{ Auth::user()->name }}</p> --}}
    <form class="login-form" method="post" action="{{ route('login_post')}}">
      
      @csrf

      <div class="form-group">
        <div class="input-group">
          <span class="input-group-text"><i class="fas fa-envelope"></i></span>
          <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
        </div>
      </div><br>

      <div class="form-group mb-3"> <!-- Ajout de la classe mb-3 pour la marge inférieure -->
        <div class="input-group">
          <span class="input-group-text"><i class="fas fa-lock"></i></span>
          <input type="password" id="password" name="password" class="form-control" placeholder="Mot de passe" required>
          <!-- <button id="togglePassword" type="button" class="btn btn-toggle-password"><i class="fas fa-eye"></i></button> -->
        </div>
      </div>

      <div class="d-flex justify-content-between align-items-center">
        <button type="submit" class="btn btn-primary btn-yellow" style="margin-bottom: 60px; height: 40px; width: 135px;">Se connecter</button>
        <a href="{{ route('forgot_password')}}" style="color: blue; margin-bottom: 30px; height: 55px; margin-left: 10px;">Mot de passe oublié?</a>
      </div>
    </form>
    <!-- End Login Form -->

    @endguest


    <br><br><br>
    <p style="color: gray; font-family: Arial, sans-serif; margin-bottom: 1000px;">
      N'avez-vous pas de compte ? <a href="{{ route('register')}}">  Créez-en un</a>
    </p>
  </div>
</div>
  </main>

 @endsection