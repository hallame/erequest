<script>
    let currentStep = 1;
    const progressBar = document.getElementById('progress-bar');

    function updateProgressBar() {
      const totalSteps = 5; // Total number of steps
      const progress = (currentStep - 1) / (totalSteps - 1) * 100;
      progressBar.style.width = progress + '%';
      progressBar.setAttribute('aria-valuenow', progress);
    }

    function showStep(step) {
      const formSteps = document.querySelectorAll('.form-step');
      formSteps.forEach((stepElement) => {
        stepElement.style.display = 'none';
      });

      document.getElementById(`step${step}`).style.display = 'block';
      currentStep = step;
      updateProgressBar();
    }

    function nextStep(step) {
      if (step <= 5 && step > currentStep) {
        showStep(step);
      }
    }

    function prevStep(step) {
      if (step >= 1 && step < currentStep) {
        showStep(step);
      }
    }

    showStep(1);

    // Add an event listener for the payment button
    const paymentButton = document.getElementById('paymentButton');
    paymentButton.addEventListener('click', () => {
      // Add the Fedapay payment script here
      // Example script you provided:
      const script = document.createElement('script');
      script.src = "https://checkout.fedapay.com/js/checkout.js";
      script.setAttribute("data-public-key", "pk_live_NVw62EiQ_Yu6mvPq13vuUapq");
      script.setAttribute("data-button-text", "Payez 1222Fcfa");
      script.setAttribute("data-button-class", "button-class");
      script.setAttribute("data-transaction-amount", "1200");
      script.setAttribute("data-transaction-description", "Paiement des frais de réclamation");
      script.setAttribute("data-currency-iso", "XOF");
      script.setAttribute("callback_url", "https://honeybee-right-shortly.ngrok-free.app/dissertation_UI/index_redirect.html");
      script.setAttribute("data-widget-description", "Facilement et simplement, réclamez en ligne");
      script.setAttribute("data-widget-image", "E:\P_Projects\dissertation-main\public\dissertation_UI\assets\img\logo.jpeg");
      script.setAttribute("data-widget-title", "eGraC");
      document.body.appendChild(script);
    });
  </script>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.j')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.j')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.j')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.j')}}"></script>
  <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.j')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.j')}}"></script>
  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>