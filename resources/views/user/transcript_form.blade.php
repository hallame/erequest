@extends('user_layout.master')
@section('title')
Transcript
@endsection
@section('content')
  <main id="main">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
        <h2 style="font-weight: bold; font-size: 40px;">Bulletin</h2>
        <ol>
            <li><a href="{{route('index')}}">Accueil</a></li>
            <li class="white-text">demande de Bulletin</li>
        </ol>
      </div>
    </div>
    <!-- Registration Form Section -->
    <section id="registration-form" class="registration-form">
      <div class="container">
        <div class="progress-container">
          <div class="progress" id="progress-bar-container">
            <div class="progress-bar" role="progressbar" id="progress-bar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>

        <form action="{{ route('transcript')}}" method="post" enctype="multipart/form-data">
          @csrf
          <!-- Step 1: Information personnelle -->
          <div class="col-lg-4 form-container form-step" id="step1">
            <fieldset>
              <div class="form-group">
                <p style="align-items: center; justify-content: center; display: grid; font-size: larger; text-decoration: underline;">Information personnelle</p>
                <label for="ac_year">Année académique:</label>
                <select id="ac_year" class="form-control" name="ac_year">
                  <optgroup label="Veuillez sélectionner l'année académique">
                    <option value="2022-2023">2022-2023</option>
                    <option value="2023-2024">2023-2024</option>
                    <option value="2024-2025">2024-2025</option>
                    <option value="2025-2026">2025-2026</option>
                    <option value="2026-2027">2026-2027</option>
                  </optgroup>
                </select>
              </div>
              <div class="form-group">
                <label for="ac_level">Année d'étude:</label>
                <select id="ac_level" class="form-control" name="ac_level">
                  <optgroup label="Veuillez sélectionner votre année d'étude">
                    <option value="Licence 1">Licence 1</option>
                    <option value="Licence 2">Licence 2</option>
                    <option value="Licence 3">Licence 3</option>
                    <option value="Master 1">Master 1</option>
                    <option value="Master 2">Master 2</option>
                  </optgroup>
                </select>
              </div>
              <div class="form-group">
                <label for="mat">Matricule:</label>
                <input type="text" name="mat" class="form-control" id="mat" placeholder="17104018" maxlength="8">
              </div>


              <!-- Add a "Next" button to move to the next step (Step 2) -->
              <div class="text-center">
                <button type="button" onclick="nextStep(2)" class="btn btn-primary">Suivant</button>
              </div>
            </fieldset>
          </div>

          <!-- Step 2: Information de réclamation 1 -->
          <div class="col-lg-4 form-container form-step" id="step2">
            <fieldset>
              <div class="form-group">
                <p style="font-size: larger; text-decoration: underline;">Information du document</p>
                <label for="exam_type">Semestre:</label>
                <select name="exam_type" id="exam_type">
                  <option value="session normale">Semestre 1 </option>
                  <option value="session de rattrapage">Semestre 2</option>
                </select>
              </div>

              <div class="form-group">
                <label for="field">Filière:</label>
                <select id="field" class="form-control" name="field">
                  <optgroup label="">
                    <option value="Sciences Economiques">Sciences Economiques</option>
                    <option value="Sciences de Gestion">Sciences de Gestion</option>
                  </optgroup>
                </select>
              </div>

              <div class="form-group">
                <label for="speciality">Spécialité:</label>
                <select id="speciality" class="form-control" name="speciality">
                  <optgroup label="">
                    <option value="Economie Appliquée">Economie Appliquée</option>
                    <option value="Economie et Finance des Collectivités Locales">Economie et Finance des Collectivités Locales</option>
                    <option value="Economie et Gestion des Exploitations Agricoles">Economie et Gestion des Exploitations Agricoles</option>
                    <option value="Economie et Gestion des Micro-Finances">Economie et Gestion des Micro-Finances</option>
                    <option value="Statistique et Econometrie">Statistique et Econometrie</option>
                    <option value="Tronc commun de Licence 1">Tronc commun de Licence 1</option>
                    <option value="Comptabilité et Finance">Comptabilité et Finance</option>
                    <option value="Gestion des banques et assurances">Gestion des banques et assurances</option>
                    <option value="Gestion des ressources humaines">Gestion des ressources humaines</option>
                    <option value="Marketing et action commerciale">Marketing et action commerciale</option>
                  </optgroup>
                </select>
              </div>

              <div class="form-group">

              <!-- Add "Previous" and "Next" buttons for navigation between Step 1 and Step 3 -->
              <div class="text-center">
                <button type="button" onclick="prevStep(1)" class="btn btn-primary">Précédent</button>
                <button type="button" onclick="nextStep(3)" class="btn btn-primary">Suivant</button>
              </div>
            </fieldset>
          </div>

          <!-- Step 3: Information de réclamation 2 -->
          <div class="col-lg-4 form-container form-step" id="step3">
            <fieldset>
              <div class="form-group">
                <p style="font-size: larger; text-decoration: underline;">Informations complémentaire</p>
              
              </div>
              <div class="form-group">
                <label for="fiche_inscription">carte d'etudiant:</label>
                <input type="file" class="form-control-file" id="fiche_inscription" name="fiche_inscription" placeholder="Votre fiche de préinscription validée">
              </div>
              <div class="form-group">
                <label for="bio">Description:</label>
                <textarea class="form-control" id="bio" name="description" rows="3" placeholder="Brève description du problème"></textarea>
              </div>
              <!-- Add "Previous" and "Next" buttons for navigation between Step 2 and Step 4 -->
              <div class="text-center">
                <button type="button" onclick="prevStep(2)" class="btn btn-primary">Précédent</button>
                <button type="button" onclick="nextStep(4)" class="btn btn-primary">Suivant</button>
              </div>
            </fieldset>
          </div>

          <!-- Step 4: Confirmation -->
          <div class="col-lg-4 form-container form-step" id="step4">
            <fieldset>
              <div class="form-group">
                <p>Confirmation</p>
                En cliquant sur SUIVANT vous confirmez les Informations renseignées précédemment
              </div>
              <!-- Add "Previous" and "Next" buttons for navigation between Step 3 and Step 5 -->
              <div class="text-center">
                <button type="button" onclick="prevStep(3)" class="btn btn-primary">Précédent</button>
                <button type="submit" onclick="nextStep(5)" class="btn btn-primary">Suivant</button>
              </div>
            </fieldset>
          </div>
        </form>
          <!-- Step 5: Payment -->
          <div class="col-lg-4 form-container form-step" id="step5">
            <fieldset>
              <div class="form-group">
                <p>Paiement</p>
                <!-- Add the payment button with the required script -->
                Vous y êtes preque. <br>
                Patientez pendant que la page de paiement se charge
                 
              </div>
                      <!-- Add "Previous" and "Next" buttons for navigation between Step 4 and Step 5 -->
        <div class="text-center">
          <button type="button" onclick="prevStep(4)" class="btn btn-primary" style="margin-right: 250px;">Précédent</button>
          <!-- <button type="button" onclick="nextStep(5)" class="btn btn-primary">Suivant</button> -->
        </div>
            </fieldset>
          </div>
       
      </div>
    </section>
  </main>

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

 @endsection
