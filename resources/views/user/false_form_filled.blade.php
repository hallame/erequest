@extends('user_layout.error_master')
@section('title')
Change Password
@endsection
@section('content')
  <div class="popup-content" id="popup">
    <i class="bi bi-check-circle popup-icon" style="font-size: xx-large;">😤Error!</i>
    <p style="color: #333; font-family: Arial, sans-serif; font-size: 20px;">
      Veuillez bien renseigner les champs du formulaire et réessayer.
    </p>
    <button class="popup-button" onclick="window.location.href='{{ route('index_redirect')}}'">OK</button>
  </div>
@endsection