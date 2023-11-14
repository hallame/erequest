@extends('user_layout.master')
@section('title')
Register
@endsection
@section('content')

  <main id="main">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
        <h2 style="font-weight: bold; font-size: 40px; ">INSCRIPTION</h2>
        <ol>
            <li><a href="{{route('index')}}">Accueil</a></li>
            <li class="white-text">Inscription</li>
        </ol>
      </div>
    </div><!-- End Breadcrumbs -->

       <!-- Registration Form -->
       <section id="registration-form" class="registration-form">
        <div class="container" data-aos="fade-up">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <form class="registration-form" action="{{ route('register')}}" method="post">
                @csrf
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                    <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Prénom" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                    <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Nom" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                    <input type="text" id="matricule" name="mat_number" class="form-control" placeholder="Numéro matricule" required maxlength="8">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    <input type="tel" id="phone" name="phone" class="form-control" placeholder="Téléphone" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Mot de passe" required>
                    <button id="togglePassword" type="button" class="btn btn-toggle-password"><i class="fas fa-eye"></i></button>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                    <input type="password" id="confirmPassword" name="confirmPassword" class="form-control" placeholder="Confirmez le mot de passe" required>
                    <button id="toggleConfirmPassword" type="button" class="btn btn-toggle-password"><i class="fas fa-eye"></i></button>
                  </div>
                </div>
                <div class="form-group" style="margin-top: 10px; margin-left: auto; margin-right: auto; text-align: center;">
                    <button type="submit" id="register" class="btn btn-primary">S'inscrire</button>
                </div>
                <br><br>
                <p style="color: black">Déjà inscrit ? <a href="{{ route('login')}}">Connectez-vous</a></p>
              </form>
            </div>
          </div>
        </div>
      </section>
    <!-- End Registration Form -->
  </main>

  @endsection