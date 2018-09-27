<?php
session_start();

if (!empty($_GET))
	$_SESSION['got'] = $_GET;

if(!empty($_SESSION['got'])){
	include("../app/head.php");
	$agent = $db->getBuyerLandingPage(IDObfuscator::decode($_SESSION['got']['a']));
}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Eleganza</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

		<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    <link rel="stylesheet" href="assets/css/form.css" >
		<link rel="stylesheet" type="text/css" href="assets/css/vegas.min.css">
    <script src="assets/form.js"></script>
    <link rel="stylesheet" href="assets/css/main.css"/>
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<style>
nav {
color: #fff;
background-color: #212529 !important;
width: 100%;
height: 56px;
line-height: 56px;
}
</style>

	</head>
	<body style="color:white !important;">

		<div id="wrapper">
			<div class="bg-wraper vegas-overlay has-vignette">
	      <div id="example" class="slider opacity-50 vegas-container " style="height: 983px;"></div>
	    </div>
			<!-- <div id="bg"></div> -->
			<!-- <div id="overlay"></div> -->
			<div id="main">
        <header id="header">
    <fieldset id="head">
				<!-- Header -->

						<h1><?php echo $_SESSION['got']['l'] == 'e'?$agent['LP1_EN_TITLE']:$agent['LP1_FR_TITLE']?></h1>
						      <p><?php echo $_SESSION['got']['l'] == 'e'?$agent['LP1_EN_SUB1']:$agent['LP1_FR_SUB1']?></p>
                  <p><?php echo $_SESSION['got']['l'] == 'e'?$agent['LP1_EN_SUB2']:$agent['LP1_FR_SUB2']?></p>
                  <p><?php echo html_entity_decode($_SESSION['got']['l'] == 'e'?$agent['LP1_EN_SUB3']:$agent['LP1_FR_SUB3'])?></p>
                  <p><?php echo $_SESSION['got']['l'] == 'e'?$agent['LP1_EN_SUB4']:$agent['LP1_FR_SUB4']?></p>
                  <p><?php echo $_SESSION['got']['l'] == 'e'?$agent['LP1_EN_SUB5']:$agent['LP1_FR_SUB5']?></p>
                  <p><button type="button" id="free" class="btn btn-primary btn-lg btn-next" ><?php echo $_SESSION['got']['l'] == 'e'?$agent['LP1_EN_BTN']:$agent['LP1_FR_BTN']?></button></p>

					<!-- part info -->
</fieldset>
<fieldset id="cta" hidden>
  <div class="container">
                <div class="form-container z-depth-5" >
<h3><?php echo $_SESSION['got']['l'] == 'e'?$agent['LP2_EN_TITLE']:$agent['LP2_FR_TITLE']?></h3>
				<div class="row">
            <div class="input-field col s12">
                <input id="name" required type="text" name="name" class="validate">
                <label for="name"><?php echo $_SESSION['got']['l'] == 'e'?$agent['LP2_EN_NAME_LBL']:$agent['LP2_FR_NAME_LBL']?><sup style="color:red">*</sup></label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <input id="mail" type="text" name="mail" required class="validate">
                <label for="mail"><?php echo $_SESSION['got']['l'] == 'e'?$agent['LP2_EN_ADDRESS_LBL']:$agent['LP2_FR_ADDRESS_LBL']?><sup style="color:red">*</sup></label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="email" type="email" name="email" required class="validate">
                <label for="email"><?php echo $_SESSION['got']['l'] == 'e'?$agent['LP2_EN_EMAIL_LBL']:$agent['LP2_FR_EMAIL_LBL']?><sup style="color:red">*</sup></label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="tel" type="tel" name="tel" class="validate">
                <label for="tel"><?php echo $_SESSION['got']['l'] == 'e'?$agent['LP2_EN_PHONE_LBL']:$agent['LP2_FR_PHONE_LBL']?></label>
            </div>
        </div>
        <div>
          <button type="button" id="submit" class="waves-effect waves-light btn submitbtn btn-next" ><?php echo $_SESSION['got']['l'] == 'e'?$agent['LP2_EN_BTN']:$agent['LP2_FR_BTN']?></button>
            <!--<button class="waves-effect waves-light btn submitbtn" type="submit">Submit</button>-->
        </div>
      </div>
    </div>
</fieldset>
<fieldset id="subscribe" hidden>
      <!-- Header -->
          <h1><?php echo $_SESSION['got']['l'] == 'e'?$agent['LP3_EN_TITLE']:$agent['LP3_FR_TITLE']?></h1>
          <p><?php echo $_SESSION['got']['l'] == 'e'?$agent['LP3_EN_SUB1']:$agent['LP3_FR_SUB1']?></p>
<p><a href="https://eleganzamagazine.com/subscribe-buy-now/?t=un" style="text-decoration:none"><button type="button" class="btn btn-primary btn-lg" ><?php echo $_SESSION['got']['l'] == 'e'?$agent['LP3_EN_SUB2']:$agent['LP3_FR_SUB2']?></button></a></p>

</fieldset>
</header>
<nav>
  <ul>
    <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
    <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
    <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
  </ul>
</nav>

</div>
</div>
				<!-- Footer -->
					<footer id="footer">
						<span class="copyright">&copy; Eleganza 2018</a>.</span>
					</footer>

			</div>
		</div>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
		<script src="assets/vegas.min.js"></script>
		<script>

			window.onload = function() { document.body.classList.remove('is-preload'); }
			window.ontouchmove = function() { return false; }
			window.onorientationchange = function() { document.body.scrollTop = 0; }
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
    $(document).ready(function () {
    var d = new Date();
    var n = d.getFullYear();
    var map,marker;
    var lead_id = 1;
    //$("#copyDate").html(n);

    var next_step = false;
    var lead_id = -1;

$('#free').on('click', function () {
  $('#cta').removeAttr('hidden');
  $('#head').empty();
  //$('#subscribe').attr('hiiden');
});
$('#submit').on('click', function () {
  next_step=true;
  var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  if ($('#name').val() == "") {
						$('#name').addClass('input-error');
						next_step = false;
	} else if ($('#mail').val() == "") {
						$('#mail').addClass('input-error');
						next_step = false;
	}else if (!re.test($('#email').val())) {
						$('#email').addClass('input-error');
						next_step = false;
	}

  if(next_step){
    $.post("core.php", {action: "addSubscriber", name:$('#name').val(),mail:$('#mail').val(),email:$('#email').val(),tel:$('#tel').val(),agent: <?php echo $agent['agent_fk'] ?>, src: "<?php echo $_SESSION['got']['s'] ?>", lang: "<?php echo $_SESSION['got']['l'] ?>"}).done(function(data){
						lead_id = data.trim();
						console.log(lead_id);
					});
  $('#cta').empty();
  $('#subscribe').removeAttr('hidden');
}
  //$('#subscribe').attr('hiiden');
});
  });

		</script>

	</body>
</html>
