@extends('user_layout.master2')
@section('title')
Change Password
@endsection
@section('content')
  <main id="main">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
        <h2 style="font-weight: bold; font-size: 40px;">NOUVEAU</h2>
        <ol>
            <li><a href="{{route('index')}}">Accueil</a></li>
            <li class="white-text">Nouveau mot de passe</li>
        </ol>
      </div>
    </div><!-- End Breadcrumbs -->

    <div class="container" style="height: 50vh; display: flex; justify-content: center; align-items: center; margin-top: 50px;">
      <div class="col-lg-6" data-aos="fade-up">
        <form class="login-form" method="post" action="{{ route('reset_password')}}" onsubmit="return validateForm()">
          @csrf
          <div class="input-group">
            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
            <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
          </div><br>

          <div class="input-group">
            <span class="input-group-text"><i class="fas fa-lock"></i></span>
            <input type="password" id="password" name="password" class="form-control" placeholder="Mot de passe" required>
            <button id="togglePassword" type="button" class="btn btn-toggle-password" onclick="togglePasswordVisibility('password', 'togglePassword')"><i class="fas fa-eye"></i></button>
          </div><br>

          <div class="input-group">
            <span class="input-group-text"><i class="fas fa-lock"></i></span>
            <input type="password" id="confirmPassword" name="confirmPassword" class="form-control" placeholder="Confirmer le mot de passe" required>
            <button id="confirmtogglePassword" type="button" class="btn btn-toggle-password" onclick="togglePasswordVisibility('confirmPassword', 'confirmtogglePassword')"><i class="fas fa-eye"></i></button>
          </div><br>

          <div style="display: flex; justify-content: space-between; align-items: center;">
            <button type="submit" class="btn btn-primary btn-yellow" style="margin-top: 10px;">Modifier</button>
            <a href="{{ route('login')}}" style="color: blue;">Abandonner?</a>
          </div>
        </form>
      </div>
    </div>
  </main><!-- End #main -->

 @endsection