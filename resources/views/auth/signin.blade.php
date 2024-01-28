<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Signin</title>

  <!-- favicon -->
  <link rel="shortcut icon" href="{{ asset('preview') }}/assets/images/favicon.png" type="image/x-icon">

  <!-- bootstrap -->
  <link rel="stylesheet" href="{{ asset('preview') }}/assets/css/bootstrap.min.css">

  <!-- swiper -->
  <link rel="stylesheet" href="{{ asset('preview') }}/assets/css/swiper-bundle.min.css">

  <!-- datepicker -->
  <link rel="stylesheet" href="{{ asset('preview') }}/assets/css/jquery.datetimepicker.css">

  <!-- jquery ui -->
  <link rel="stylesheet" href="{{ asset('preview') }}/assets/css/jquery-ui.min.css">

  <!-- common -->
  <link rel="stylesheet" href="{{ asset('preview') }}/assets/css/common.css">

  <!-- animations -->
  <link rel="stylesheet" href="{{ asset('preview') }}/assets/css/animations.css">

  <!-- welcome -->
  <link rel="stylesheet" href="{{ asset('preview') }}/assets/css/welcome.css">

  <!-- auth -->
  <link rel="stylesheet" href="{{ asset('preview') }}/assets/css/auth.css">
  <style>
    :root {
        --primary: #A73B94;
    }
  </style>
</head>
<body class="scrollbar-hidden">
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-md-6">
  <!-- splash-screen start -->
  <section id="preloader" class="spalsh-screen">
    <div class="circle text-center">
      <div>
        <img style="width: 200px" class="d-block" src="{{ asset('preview') }}/assets/images/logo-alfatihah.png">
      </div>
    </div>
    <div class="loader-spinner">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
  </section>
  <!-- splash-screen end -->

  <main>
    <!-- signin-email start -->
    <section class="auth signin-email">
        <div class="page-title d-flex justify-content-center">
            <img class="mx-auto d-block" src="{{ asset('preview') }}/assets/images/logo-alfatihah.png">
        </div>
      <div class="auth-form">
        <form action="#">
          <div class="d-flex flex-column gap-16">
            <div>
              <label for="lemail2">Alamat Email</label>
              <input type="email" id="lemail2" placeholder="Masukan alamat email anda" class="input-field d-block">
            </div>
            <div>
              <label for="lpass">Password</label>
              <div class="position-relative">
                <input type="password" id="lpass" data-pssws-shown="false" placeholder="Masukan password anda" class="input-psswd input-field d-block">
                <button type="button" class="eye-btn">
                  <span class="eye-off">
                    <img src="{{ asset('preview') }}/assets/svg/eye-off.svg" alt="Eye Off">
                  </span>
                  <span class="eye-on d-none">
                    <img src="{{ asset('preview') }}/assets/svg/eye-on.svg" alt="Eye Off">
                  </span>
                </button>
              </div>
            </div>
          </div>
          <a href="enter-otp.html" class="btn-primary">Masuk</a>
        </form>
      </div>
    </section>
    <!-- signin-email end -->
  </main>

  <!-- modal start -->
  <div class="modal fade loginSuccessModal modalBg" id="loginSuccess" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body text-center">
          <img src="{{ asset('preview') }}/assets/svg/check-green.svg" alt="Check">
          <h3>You have logged in successfully</h3>
          <p class="mb-32">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          <a href="../home.html" class="btn-primary">Continue</a>
        </div>
      </div>
    </div>
  </div>
  <!-- modal end -->
</div>
</div>
</div>
  <!-- jquery -->
  <script src="{{ asset('preview') }}/assets/js/jquery-3.6.1.min.js"></script>

  <!-- bootstrap -->
  <script src="{{ asset('preview') }}/assets/js/bootstrap.bundle.min.js"></script>

  <!-- jquery ui -->
  <script src="{{ asset('preview') }}/assets/js/jquery-ui.js"></script>

  <!-- mixitup -->
  <script src="{{ asset('preview') }}/assets/js/mixitup.min.js"></script>

  <!-- gasp -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/gsap.min.js"></script>

  <!-- draggable -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/Draggable.min.js"></script>

  <!-- swiper -->
  <script src="{{ asset('preview') }}/assets/js/swiper-bundle.min.js"></script>

  <!-- datepicker -->
  <script src="{{ asset('preview') }}/assets/js/jquery.datetimepicker.full.js"></script>

  <!-- google-map api -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCodvr4TmsTJdYPjs_5PWLPTNLA9uA4iq8&callback=initMap" type="text/javascript"></script>

  <!-- script -->
  <script src="{{ asset('preview') }}/assets/js/script.js"></script>
</body>
</html>