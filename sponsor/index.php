<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Bolt - Coming Soon Template</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" >
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">
    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">
    <!-- Off Canvas Menu -->
    <link rel="stylesheet" type="text/css" href="assets/css/menu_sideslide.css">
    <!-- Color Switcher -->
    <link rel="stylesheet" type="text/css" href="assets/css/vegas.min.css">
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
  </head>
  <body>

    <div class="bg-wraper vegas-overlay has-vignette">
      <div id="example" class="slider opacity-50 vegas-container " style="height: 983px;"></div>
    </div>

    <!-- Coundown Section Start -->
    <section class="countdown-timer">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="heading-count">
              <h3>Are you having a difficult time generating new customers for your  business?</h3>
            </div>
          </div>
         <div class="col-md-12 col-sm-12 col-xs-12">
        <!--    <div class="row time-countdown justify-content-center">
              <div id="clock" class="time-count"></div>
            </div> -->
            <p style="font-size: 20px">
            Partner with Eleganza Media and find out how you can increase your brand awareness<br>
            and revenue by targeting the right audience!
          </p>
            <div class="button-group">
              <button onclick="redirectPage()" class="btn btn-common">Find out more</button>
              <a href="#" class="btn btn-border">Reach Us</a>
            </div>
            <div class="social mt-4">
              <a class="facebook" href="#"><i class="lni-facebook-filled"></i></a>
              <a class="twitter" href="#"><i class="lni-twitter-filled"></i></a>
              <a class="instagram" href="#"><i class="lni-instagram-filled"></i></a>
              <a class="google" href="#"><i class="lni-google-plus"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Coundown Section End -->

    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/vegas.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/classie.js"></script>
    <script src="assets/js/jquery.nav.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.min.js"></script>

    <script type="text/javascript">
      $("#example").vegas({
          timer: false,
          delay: 6000,
          transitionDuration: 2000,
          transition: "blur",
          slides: [
              { src: "assets/img/bg.jpg" },
              { src: "assets/img/slide.png" },
              { src: "assets/img/slider.png" }
          ]
      });
      function getParameterByName( name ){
        var regexS = "[\\?&]"+name+"=([^&#]*)",
      regex = new RegExp( regexS ),
      results = regex.exec( window.location.search );
      if( results == null ){
        return "";
      } else{
        return decodeURIComponent(results[1].replace(/\+/g, " "));
      }
    }
    function redirectPage(){
      window.location="index2.php?a="+getParameterByName("a")+"&l="+getParameterByName("e")+"&s="+getParameterByName("s");
    }
    </script>

  </body>
</html>
