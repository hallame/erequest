@extends('user_layout.master')
@section('title')
Transcript Redirect
@endsection
@section('content')
  <div class="popup-content" id="popup">
    <i class="bi bi-check-circle popup-icon" style="font-size: xx-large;">Oups😤</i>
    <p style="color: #333; font-family: Arial, sans-serif; font-size: 20px;">
      Veuillez vous connecter afin de pouvoir faire la demande de bulletin .</p>
      <button class="popup-button" onclick="window.location.href='{{ route('login')}}'">OK</button>
    </div>

  <script>
    window.onload = function () {
      document.getElementById("popup").style.display = "block";
    };
  </script>
@endsection