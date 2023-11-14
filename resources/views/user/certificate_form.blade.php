@extends('user_layout.master2')
@section('title')
Gestion des réclamations de notes
@endsection
@section('content')
  <main id="main">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url({{asset('assets/img/breadcrumbs-bg.jpg')}});">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
        <h2 style="font-weight: bold; font-size: 40px;">Attestation</h2>
        <ol>
            <li><a href="{{route('index')}}">Accueil</a></li>
            <li class="white-text">Demande d'Attestation</li>
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

        <form action="{{('certificate_send')}}" method="post" enctype="multipart/form-data">
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
                <!-- <label for="exam_type">Semestre:</label>
                <select name="exam_type" id="exam_type">
                  <option value="session normale">Semestre 1 </option>
                  <option value="session de rattrapage">Semestre 2</option>
                </select> -->
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
                <p style="font-size: larger; text-decoration: underline;">Informations complémentaires</p>
              
              </div>
              <div class="form-group">
                <label for="bulletin1">Bulletin 1:</label>
                <input type="file" class="form-control-file" id="bulletin1" name="bulletin1" placeholder=" bulletin1">
              </div>
              <div class="form-group">
                <label for="bulletin2">Bulletin 2:</label>
                <input type="file" class="form-control-file" id="bulletin2" name="bulletin2" placeholder="bulletin2">
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
@endsection
