@extends('user_layout.master')
@section('title')
Change Password
@endsection
@section('content')

  <main id="main">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
        <h2 style="font-weight: bold; font-size: 40px;">Services</h2>
        <ol>
            <li><a href="{{route('index')}}">Accueil</a></li>
            <li class="white-text">Services</li>
        </ol>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- New div to wrap service titles with shadow -->
    <div class="service-container">
      <div class="service-title">
        <i class="fas fa-graduation-cap fa-3x"></i>
        <h4 class="title"><a href="{{ route('complaint_form')}}">Réclamation de note</a></h4>
      </div>

      <div class="service-title">
        <i class="fas fa-file-alt fa-3x"></i>
        <h4 class="title"><a href="{{ route('transcript_form')}}">Demande de relevé de note</a></h4>
      </div>

      <div class="service-title">
        <i class="fas fa-certificate fa-3x"></i>
        <h4 class="title"><a href="{{ route('certificate_form')}}">Demande d'attestation</a></h4>
      </div>

      <div class="service-title">
        <i class="fas fa-award fa-3x"></i>
        <h4 class="title"><a href="{{ route('diploma_form')}}">Demande de diplôme</a></h4>
      </div>
    </div>

    <div style="text-align: center; position: relative; top: 50px; margin-bottom:10px; left: 50%; transform: translate(-50%, -50%);">
      <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="btn btn-danger" style="border-radius: 5px;">Deconnexion</button>
      </form>
  </div>
  
  </main>
 @endsection