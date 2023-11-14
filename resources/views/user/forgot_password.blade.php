@extends('user_layout.master')
@section('title')
Change Password
@endsection
@section('content')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
    
        <h2 class="responsive-heading" style="font-weight: bold; font-size: 40px; " >MODIFICATION</h2>
        
        <ol>
            <li><a href="{{route('index')}}">Accueil</a></li>
            <li class="white-text">Demande de code</li>
        </ol>
        
      </div>
    </div>
    <!-- End Breadcrumbs -->

      <!-- Center the forgot password form and move it a bit to the top -->
    <div class="container" style="height: 50vh; display: flex; justify-content: center; align-items: center; margin-top: 50px;">
    <div class="col-lg-6" data-aos="fade-up">
      <form class="forgot-password-form" method="post" action="{{ route('request_reset')}}" id="password-reset-form" onsubmit="redirectToVerificationPage()">
        @csrf
        <div class="input-group">
          <span class="input-group-text"><i class="fas fa-envelope"></i></span>
          <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
        </div>
        <br><br>
        <div style="display: flex; justify-content: space-between; align-items: center;">
          <button type="submit" class="btn btn-primary btn-yellow" style="margin-top: 10px;">Recevoir</button>
          <a href="{{route('login')}}" style="color: blue;">Retour</a>
        </div>
      </form>
      
    
        <br><br><br>
        <p style="color: gray; font-family: Arial, sans-serif;">
            <!-- Don't have an account? <a href="register.html">Create one here</a> -->
        </p>
    </div>
    </div>



   
  </main><!-- End #main -->

  
 @endsection