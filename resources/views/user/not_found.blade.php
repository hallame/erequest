@extends('user_layout.error_master')
@section('title')
Not Fount
@endsection
@section('content')
  <div class="popup-content" id="popup">
    <i class="bi bi-check-circle popup-icon " style="font-size: xx-large;">Error!</i>
    <p style="color: #333; font-family: Arial, sans-serif; font-size: 20px;">
      L'utilisateur que vous avez specifié n'existe pas.Veuillez vérifier l'email ou le numéro matricule
    </p>
    <button class="popup-button" onclick="window.location.href='{{ route('register')}}'">OK</button>
  </div>
@endsection