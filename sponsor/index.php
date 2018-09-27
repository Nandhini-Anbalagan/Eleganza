<?php
	session_start();

	if (!empty($_GET))
		$_SESSION['got'] = $_GET;

	if(!empty($_SESSION['got'])){
		include("../app/head.php");
		$agent = $db->getSellerLandingPage($_SESSION['got']['a']);
		// $final_text_en = explode(" - ", $agent['final_text_en']);
		// $final_text_fr = explode(" - ", $agent['final_text_fr']);
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Eleganza Advertiser</title>

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
    <link href="assets/css/landing-page.min.css" rel="stylesheet">
    <link href="assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="assets/css/style.css" rel="stylesheet">

  </head>
  <body>
		<div class="bg-wraper vegas-overlay has-vignette">
      <div id="example" class="slider opacity-50 vegas-container " style="height: 983px;"></div>
    </div>
<fieldset id="intro">

    <!-- Coundown Section Start -->
    <section class="countdown-timer">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="heading-count">
              <h3><?php echo $_SESSION['got']['l'] == 'e'?$agent['LP1_EN_TITLE']:$agent['LP1_FR_TITLE']?></h3>
            </div>
          </div>
         <div class="col-md-12 col-sm-12 col-xs-12">
        <!--    <div class="row time-countdown justify-content-center">
              <div id="clock" class="time-count"></div>
            </div> -->
            <p style="font-size: 20px">
            <?php echo $_SESSION['got']['l'] == 'e'?$agent['LP1_EN_SUB2']:$agent['LP1_FR_SUB2']?>
          </p>
            <div class="button-group">
              <button onclick="redirectPage()" class="btn btn-common"><?php echo $_SESSION['got']['l'] == 'e'?$agent['LP1_EN_BTN']:$agent['LP1_FR_BTN']?></button>
              <!-- <a href="#" class="btn btn-border">Reach Us</a> -->
            </div>
            <div class="social mt-4">
              <a class="facebook" href="<?php echo $_SESSION['got']['l'] == 'e'?$agent['LP3_EN_FB_URL']:$agent['LP3_FR_FB_URL']?>"><i class="lni-facebook-filled"></i></a>
              <a class="twitter" href="<?php echo $_SESSION['got']['l'] == 'e'?$agent['LP3_EN_TW_URL']:$agent['LP3_FR_TW_URL']?>"><i class="lni-twitter-filled"></i></a>
              <a class="instagram" href="<?php echo $_SESSION['got']['l'] == 'e'?$agent['LP3_EN_INS_URL']:$agent['LP3_FR_INS_URL']?>"><i class="lni-instagram-filled"></i></a>
              <a class="google" href="<?php echo $_SESSION['got']['l'] == 'e'?$agent['LP3_EN_GP_URL']:$agent['LP3_FR_GP_URL']?>"><i class="lni-google-plus"></i></a>
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
</fieldset>
<fieldset id="industryPage" hidden>
  <!-- Masthead -->
	<section class="countdown-timer">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="heading-count">
						<h2><?php echo $_SESSION['got']['l'] == 'e'?$agent['LP2_EN_TITLE']:$agent['LP2_FR_TITLE']?></h2>
					</div>
				</div>
				<div class="col-md-12 form-row ">
					<div class="col-md-3">

					</div>
			 <div class="col-md-6">
	 						<select style="border-radius:15px;border:2px; solid #AAAAAA;" class="form-control form-control-lg" id="industry">
	 						 <option>Service Industry</option>
	 						 <option>Manufacturing Industry</option>
	 						 <option>Retail Industry</option>
	 						</select>
	 					</div>
	 					<div class="col-md-3">
	 						<!-- <button type="button" id="submitInd" class="btn btn-block btn-primary">Submit!</button> -->
	 					</div>
					</div>
					<div class="col-md-12 social mt-4">
						<a class="facebook" href="<?php echo $_SESSION['got']['l'] == 'e'?$agent['LP3_EN_FB_URL']:$agent['LP3_FR_FB_URL']?>"><i class="lni-facebook-filled"></i></a>
						<a class="twitter" href="<?php echo $_SESSION['got']['l'] == 'e'?$agent['LP3_EN_TW_URL']:$agent['LP3_FR_TW_URL']?>"><i class="lni-twitter-filled"></i></a>
						<a class="instagram" href="<?php echo $_SESSION['got']['l'] == 'e'?$agent['LP3_EN_INS_URL']:$agent['LP3_FR_INS_URL']?>"><i class="lni-instagram-filled"></i></a>
						<a class="google" href="<?php echo $_SESSION['got']['l'] == 'e'?$agent['LP3_EN_GP_URL']:$agent['LP3_FR_GP_URL']?>"><i class="lni-google-plus"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
</fieldset>
<fieldset id="contact" hidden>
	<section class="countdown-timer" style="top:6% !important;">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="heading-count">
						<h3><?php echo $_SESSION['got']['l'] == 'e'?$agent['LP3_EN_TITLE']:$agent['LP3_FR_TITLE']?></h3>
					</div>
				</div>
				<div class="col-md-12 form-row " style="background: #0000008a;margin: 20px;padding: 30px;border-radius: 20px;">
					<div class="col-xs-6 col-sm-6 col-md-6 form-group">
	 				 <input type="text" name="name" class="form-control" id="contact-name" placeholder="<?php echo $_SESSION['got']['l'] == 'e'?$agent['LP3_EN_NAME_LBL']:$agent['LP3_EN_NAME_LBL'] ?>" data-rule="minlen:4" data-rule="required" data-msg="Please enter at least 4 chars" >
	 				 <div class="validate"></div>
	 			 </div>
	 			 <div class="col-xs-6 col-sm-6 col-md-6 form-group">
	 				<input type="phone" required name="phone" id="phone" class="form-control input-sm" placeholder="<?php echo $_SESSION['got']['l'] == 'e'?$agent['LP3_EN_PHONE_LBL']:$agent['LP3_EN_PHONE_LBL'] ?>" data-rule="minlen:8" data-rule="required" data-msg="Please enter at least 8 chars">
	 				 <div class="validate"></div>
	 			 </div>
	 			 <div class="col-xs-6 col-sm-6 col-md-6 form-group">
	 				 <input type="Email" name="Email" class="form-control" id="contact-email" placeholder="<?php echo $_SESSION['got']['l'] == 'e'?$agent['LP3_EN_EMAIL_LBL']:$agent['LP3_EN_EMAIL_LBL'] ?>" data-rule="Email" data-rule="required" data-msg="Please enter a valid email">
	 				 <div class="validate"></div>
	 			 </div>

	 			 <div class="col-xs-6 col-sm-6 col-md-6 form-group">
	 				 <input type="text" name="area" class="form-control" id="contact-area" placeholder="<?php echo $_SESSION['got']['l'] == 'e'?$agent['LP3_EN_AREA_LBL']:$agent['LP3_EN_AREA_LBL'] ?>" data-rule="area" data-rule="required" data-msg="Please enter a valid area">
	 				 <div class="validate"></div>
	 			 </div>

	 			 <div class="col-xs-6 col-sm-6 col-md-6 form-group">
	 				 <input type="text" name="company" class="form-control" id="contact-company" placeholder="<?php echo $_SESSION['got']['l'] == 'e'?$agent['LP3_EN_COMPANY_LBL']:$agent['LP3_EN_COMPANY_LBL'] ?>" data-rule="company" data-rule="required" data-msg="Please enter a valid company">
	 				 <div class="validate"></div>
	 			 </div>

	 			 <div class="col-xs-6 col-sm-6 col-md-6 form-group">
	 				 <input type="text" name="message" class="form-control" id="contact-subject" placeholder="<?php echo $_SESSION['got']['l'] == 'e'?$agent['LP3_EN_MESSAGE_LBL']:$agent['LP3_EN_MESSAGE_LBL'] ?>" data-msg="Please enter at least 8 chars of subject">
	 				 <div class="validate"></div>
	 			 </div>

	 			 <div class="col-12 col-xs-offset-3 text-center">
	 				 <button type="submit" id="submitcontact" class="btn btn-large btn-primary"><?php echo $_SESSION['got']['l'] == 'e'?$agent['LP3_EN_BTN']:$agent['LP3_FR_BTN']?></button>
	 			 </div>
					</div>
					<div class="col-md-12 social mt-4">
						<a class="facebook" href="<?php echo $_SESSION['got']['l'] == 'e'?$agent['LP3_EN_FB_URL']:$agent['LP3_FR_FB_URL']?>"><i class="lni-facebook-filled"></i></a>
						<a class="twitter" href="<?php echo $_SESSION['got']['l'] == 'e'?$agent['LP3_EN_TW_URL']:$agent['LP3_FR_TW_URL']?>"><i class="lni-twitter-filled"></i></a>
						<a class="instagram" href="<?php echo $_SESSION['got']['l'] == 'e'?$agent['LP3_EN_INS_URL']:$agent['LP3_FR_INS_URL']?>"><i class="lni-instagram-filled"></i></a>
						<a class="google" href="<?php echo $_SESSION['got']['l'] == 'e'?$agent['LP3_EN_GP_URL']:$agent['LP3_FR_GP_URL']?>"><i class="lni-google-plus"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
</fieldset>
<fieldset id="thankyou" hidden>
	<section class="countdown-timer">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="heading-count">
						<h3>Thank you <span id="thankyouname"></span> will get back to you shortly !!</h3>
					</div>
				</div>
			 		<div class="col-md-12  social mt-4">
						<a class="facebook" href="#"><i class="lni-facebook-filled"></i></a>
						<a class="twitter" href="#"><i class="lni-twitter-filled"></i></a>
						<a class="instagram" href="#"><i class="lni-instagram-filled"></i></a>
						<a class="google" href="#"><i class="lni-google-plus"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>

</fieldset>
<input type="hidden" id="leadId"/>
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
    <script src="assets/lib/php-mail-form/validate.js"></script>
    <script src="assets/lib/countdown/countdown.min.js"></script>

    <script type="text/javascript">
      $("#example").vegas({
          timer: false,
          delay: 6000,
          transitionDuration: 2000,
					transition: "zoomOut2",
					slides: [
							{ src: '../app/uploads/landings/<?php echo $agent['bg_img1']?>' },
							{ src: '../app/uploads/landings/<?php echo $agent['bg_img2']?>' },
							{ src: '../app/uploads/landings/<?php echo $agent['bg_img3']?>' }
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
      //window.location="index2.php?a="+getParameterByName("a")+"&l="+getParameterByName("e")+"&s="+getParameterByName("s");
      $('#industryPage').removeAttr('hidden');
      $('#intro').empty();
    }
    $('#industry').on('change', function(){
      var industry = $('#industry :selected').text();
      $.post("core.php", {action: "insertField", industry: industry, agent: <?php echo $agent['agent_fk']?>, src: "<?php echo $_SESSION['got']['s'] ?>", lang: "<?php echo $_SESSION['got']['l'] ?>"}).done(function(data){
           lead_id = data.trim();
           $("#leadId").val(lead_id);
           //window.location="index3.php?lead="+lead_id;
           $('#contact').removeAttr('hidden');
           $('#industryPage').empty();
         });
    });
    $('#submitcontact').on('click', function(){
     var contactname = $('#contact-name').val();
     var phoneno = $('#phoneno').val();
     var contactemail = $('#contact-email').val();
     var contactarea = $('#contact-area').val();
     var contactcompany = $('#contact-company').val();
     var contactsubject = $('#contact-subject').val();
     var lead_id =  $('#leadId').val();
		 next_step=true;
	   var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		 $('#contact-name ~ .validate').html('');
		 $('#phoneno ~ .validate').html('');
		 $('#contact-email ~ validate').html('');
	   if (contactname == "") {
	 						$('#contact-name ~ .validate').html('Please enter name to proceed');
	 						next_step = false;
	 	} else if (phoneno == "") {
	 						$('#phoneno ~ .validate').html('Please enter phone number to proceed');
	 						next_step = false;
	 	}else if (contactemail== '' || !re.test(contactemail)) {
	 						$('#contact-email ~ .validate').html('Please enter valid email to proceed');
	 						next_step = false;
	 	}
			if(next_step){
      $.post("core.php", {action: "updateField", contactname: contactname, phoneno: phoneno, contactemail: contactemail, contactarea: contactarea, contactcompany: contactcompany, contactsubject: contactsubject,lead_id:lead_id }).done(function(data){
           lead_id = data.trim();
					 $('#thankyouname').html(contactname);
					 $('#thankyou').removeAttr('hidden');
					 $('#contact').empty();


           console.log(lead_id);
         });
			 }
    });
    </script>

  </body>
</html>
