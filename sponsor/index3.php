<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Coming - Bootstrap Under Construction Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">



  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Coming
    Template URL: https://templatemag.com/coming-bootstrap-under-construction-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>

  <div id="h" style="zoom: 80%;">
    <div class="container" style="padding:80px">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 color-text" style="background-color: rgba(255,255,255,0.6)">
          <form class="contact-form php-mail-form" role="form" action="contactform/contactform.php" method="POST">
            <h3>Leave us your name and email to receive your FREE industry specific lead generation tips and information on how to partner with Eleganza Media for your next campaign.</h3>

            <div class="col-md-7 col-md-offset-3 form-group">
              <input type="text" name="name" class="form-control" id="contact-name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
              <div class="validate"></div>
            </div>
            <div class="col-md-7 col-md-offset-3 form-group">
              <input type="email" name="email" class="form-control" id="contact-email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-md-7 col-md-offset-3 form-group">
              <input type="text" name="subject" class="form-control" id="contact-subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
              <div class="validate"></div>
            </div>

            <div class="col-md-7 col-md-offset-3 form-group">
              <textarea class="form-control" name="message" id="contact-message" placeholder="Your Message" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
              <div class="validate"></div>
            </div>

            <div class="loading"><img src="assets/lib/php-mail-form/loading.gif"></div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>

            <div class="form-send">
              <button type="submit" class="btn btn-large">Send Message</button>
            </div>

          </form>
        </div>
      </div>
      <!--/row-->
    </div>
    <!--/container-->
  </div>
  <!--/H-->

              <!-- Footer -->
      					<footer id="footer" style="color:white;">
      						<span class="copyright">&copy; Eleganza 2018</a>.</span>
      					</footer>
  <!-- JavaScript Libraries -->
  <script src="assets/lib/jquery/jquery.min.js"></script>
  <script src="assets/lib/jquery/jquery.plugin.min.js"></script>
  <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/lib/php-mail-form/validate.js"></script>
  <script src="assets/lib/countdown/countdown.min.js"></script>

  <!-- Template Main Javascript File -->
  <script src="assets/js/main.js"></script>

</body>
</html>
