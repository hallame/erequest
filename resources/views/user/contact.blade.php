@extends('user_layout.master2')
@section('title')
Change Password
@endsection
@section('content')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Contact</h2>
        <ol>
            <li><a href="{{route('index')}}">Accueil</a></li>
            <li class="white-text">Contact</li>
        </ol>
      </div>
    </div><!-- End Breadcrumbs -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-map"></i>
              <h3>Our Address</h3>
              <p>Abomey-Calavi, Benin</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-envelope"></i>
              <h3>Email </h3>
              <p><a href="mailto:ronaldoownpurpose@gmail.com">ronaldoownpurpose@gmail.com</a></p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-telephone"></i>
              <h3>Phone</h3>
              <p><a href="tel:+22997247851">(+229) 972 478 51</a></p>
          </div>
          
          </div><!-- End Info Item -->

        </div>

        <div class="col-lg-12">
          <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7910.774227749458!2d2.300995874389664!3d6.442219748441923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x102f88b6d893d8f1%3A0x243e057e186ca795!2sUniversit%C3%A9%20d'Abomey-Calavi!5e0!3m2!1sen!2sbg!4v1630491470785!5m2!1sen!2sbg"
              frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
      </div><!-- End Google Maps -->
      
        

      <div class="col-lg-12" >
    <!-- Your HTML content, including the form -->

    <form action="{{route('message')}}" method="post" >
      @csrf
      <div class="row gy-4">
          <div class="form-group">
              <input type="email" class="form-control" name="sender_email" id="email" placeholder="Email" required>
          </div>
      </div>
      <div class="form-group">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
      </div>
      <div class="form-group">
          <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
      </div>
      <div class="d-flex justify-content-between align-items-center">
        <button type="submit" class="btn btn-primary btn-yellow" style="margin-bottom: 60px; height: 40px; width: 135px;">Envoyer</button>
        <a href="{{ route('index')}}" style="color: blue; margin-bottom: 30px; height: 55px; margin-left: 10px;">Abandonner?</a>
      </div>
      <br><br><br>

    </form>
    </div>
    <!-- End Contact Form -->
    

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

<!-- Include jQuery library -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- JavaScript code for handling form submission and displaying messages -->
{{-- <script>
    $(document).ready(function() {
        $("form.php-email-form").submit(function(e) {
            e.preventDefault(); // Prevent the default form submission
            var formData = $(this).serialize();

            $.ajax({
                type: "POST",
                url: "https://honeybee-right-shortly.ngrok-free.app/api/messages",
                data: formData,
                success: function(response) {
                    $("#responseMessage").html('<div class="alert alert-success">' + response.message + '</div>');
                },
                error: function() {
                    $("#responseMessage").html('<div class="alert alert-danger">An error occurred. Please try again.</div>');
                }
            });
        });
    });
</script> --}}
@endsection