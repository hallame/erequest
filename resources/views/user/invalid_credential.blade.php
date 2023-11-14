@extends('user_layout.error_master')
@section('title')
Invalid Credentials
@endsection
@section('content')
  <div class="popup-content" id="popup">
    <i class="bi bi-check-circle popup-icon" style="font-size: xx-large;">😤Error!</i>
    <p style="color: #333; font-family: Arial, sans-serif; font-size: 20px;">
      Le mot de passe ou l'addresse email est incorrect.
    </p>
    <button class="popup-button" onclick="window.location.href='{{ route('login')}}'">OK</button>
  </div>
@endsection
