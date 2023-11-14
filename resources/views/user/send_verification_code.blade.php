@extends('user_layout.master')
@section('title')
Verification
@endsection
@section('content')
  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
        <h2 style="font-weight: bold; font-size: 40px; ">VERIFICATION</h2>
        <ol>
            <li><a href="{{route('index')}}">Accueil</a></li>
            <li class="white-text">Vérification du code</li>
        </ol>
      </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Center the forgot password form and move it a bit to the top -->
    <div class="container" style="height: 50vh; display: flex; justify-content: center; align-items: center; margin-top: 50px;">
      <div class="col-lg-6" data-aos="fade-up">
        <form class="forgot-password-form" method="post" action="{{ route('verify_code')}}" >
          @csrf
          <div class="form-group">
            <label for="email">Code:</label>
            <input type="text" id="code" name="verification_code" class="form-control" placeholder="Renseignez le code reçu par mail" required>
          </div><br><br>
          <div class="d-flex justify-content-between align-items-center">
            <button type="submit" class="btn btn-primary btn-yellow">Valider</button>
            <div class="ml-2"><a href="{{ route('forgot_password')}}">Réessayer</a></div>
          </div>
        </form>
        <br><br><br>
        <p style="color: gray; font-family: Arial, sans-serif;">
          <!-- Don't have an account? <a href="register.html">Create one here</a> -->
        </p>
      </div>
    </div>
  </main>
  <!-- End #main -->

 @endsection