@extends('user_layout.master')
@section('title')
Test Certification
@endsection
@section('content')
  <div class="popup-content" id="popup">
    <i class="bi bi-check-circle popup-icon"></i>
    <p style="color: #333; font-family: Arial, sans-serif; font-size: 20px;">
      En cliquant sur PAYER vous accepter les termes de paiement des frais de demande d'attestation   <!-- Vous pouvez désormais vous <a href="login.html" style="color: #333; font-weight: bold;">connecter</a> avec votre Nouveau
      mot de passe -->
    </p>
          <form action="payment_success.html" method="POST" style="margin-left: 30px;">
        <script
          src="https://checkout.fedapay.com/js/checkout.js"
          data-public-key="pk_live_NVw62EiQ_Yu6mvPq13vuUapq"
          data-button-text="PAYER"
          data-button-class="button-class"
          data-transaction-amount="100"
          data-transaction-description="Paiement des frais de réclamation"
          data-currency-iso="XOF"   
          data-widget-description="Facilement et simplement, réclamez et faites vos demande d'acte academique  en ligne"
          data-widget-image="E:\P_Projects\dissertation-main\public\dissertation_UI\assets\img\logo.jpeg"
          data-widget-title="eGraC">
        </script>
       </form>
  </div>

  <script>
    window.onload = function () {
      document.getElementById("popup").style.display = "block";
    };
  </script>
@endsection





