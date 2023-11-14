@extends('user_layout.error_master')
@section('title')
Change Password
@endsection
@section('content')
  <div class="popup-content" id="popup">
    <i class="bi bi-check-circle popup-icon" style="font-size: xx-large;">Oups😤</i>
    <p style="color: #333; font-family: Arial, sans-serif; font-size: 20px;">
      Veuillez vous connecter afin de pouvoir faire une réclamation.</p>
    <button class="popup-button" onclick="window.location.href='{{ route('login')}}'">OK</button>
  </div>
@endsection
