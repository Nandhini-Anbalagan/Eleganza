<?php
	session_start();

	if (!empty($_GET))
		$_SESSION['got'] = $_GET;

	if(!empty($_SESSION['got'])){
		include("../app/head.php");
		$agent = $db->getSellerLandingPage($_SESSION['got']['a']);
		$final_text_en = explode(" - ", $agent['final_text_en']);
		$final_text_fr = explode(" - ", $agent['final_text_fr']);
	}
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Landing Page - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="assets/css/landing-page.min.css" rel="stylesheet">

  </head>

  <body>
    <!-- Masthead -->
    <header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container" >
        <div class="row classlevel">
          <div class="col-xl-9 mx-auto col-centered">
            <h3 class="mb-5">Let us know what industry your are in<br/> and we'll provide you with FREE  industry specific tips on how you can increase your business revenue!</h3>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto col-centered">
            <form>
              <div class="form-row">
                <div class="col-12 col-md-9 mb-2 mb-md-0">
                  <select class="form-control form-control-lg" id="industry">
                   <option>Service Industry</option>
                   <option>Manufacturing Industry</option>
                   <option>Retail Industry</option>
                  </select>
                </div>
                <div class="col-12 col-md-3">
                  <button type="button" id="submit" class="btn btn-block btn-lg btn-primary">Submit!</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </header>
    <!-- Bootstrap core JavaScript -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
     $('#submit').on('click', function(){
       var industry = $('#industry :selected').text();
       $.post("core.php", {action: "insertField", industry: industry, agent: <?php echo $agent['agent_fk']?>, src: "<?php echo $_SESSION['got']['s'] ?>", lang: "<?php echo $_SESSION['got']['l'] ?>"}).done(function(data){
						lead_id = data.trim();
						window.location="index3.php?lead="+lead_id;
					});
     });
    </script>
  </body>

</html>
