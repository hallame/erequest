@extends('user_layout.error_master')
@section('title')
Change Password
@endsection
@section('content')
  <div class="popup-content" id="popup">
    <i class="bi bi-check-circle popup-icon" style="font-size: xx-large";>🥳Super!</i>
    <p style="color: #333; font-family: Arial, sans-serif; font-size: 20px;">
      Votre mot de passe a été réinitialisé avec succès.
      <!-- Vous pouvez désormais vous <a href="login.html" style="color: #333; font-weight: bold;">connecter</a> avec votre Nouveau
      mot de passe -->
    </p>
    <button class="popup-button" onclick="window.location.href='{{ route('login')}}'">OK</button>
  </div>
@endsection
