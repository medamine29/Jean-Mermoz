<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Se connecter</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- owl css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- responsive-->
    <link rel="stylesheet" href="css/responsive.css">
	<!-- css bootstrap -->
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"> -->
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
	  
	<script type="text/javascript">
	  
	  function goToRegister(){
		  document.location='register.php';
	  }
	  
	</script>
	  
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="" /></div>
    </div>

    <div class="wrapper">
        <!-- end loader -->

        <div id="content">
            <!-- header -->
            <header>
                <!-- header inner -->
                <div class="head-top">
                    <div class="container">

                        <div class="row">
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
								<div class="email">
									<a href="#"><img src="images/mail_icon.png" /> Email : JeanMermoz@gmail.com</a>
								</div>
								<div class="email">
									<a href="#"> <img src="images/phone_icon.png" /> Contact : 70 000 000</a>
								</div>
							</div>
							

                                <div class="logoCenter">
                                    <a href="index.php"><img src="images/jean_mermoz.png" /></a>
                                </div>

							                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                <div class="contact_nu">
                              
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end header inner -->
            </header>
            <!-- end header -->
			<div>
			<hr class="rounded">
			<!-- login form -->
				<div class="container">
					<div class="row">
						<div class="logContainer">
							<form action="connexion.php" method="POST">
								<div class="form-group">
									<label class="labelForm">Email :</label>
									<br>
									<input class="inputForm" type="text" name="email" placeholder="saisir votre addresse email ici" class="form-control" required>
								</div>
								<div class="form-group">
									<label class="labelForm">Mot de passe :</label>
									<br>
									<input class="inputForm" type="password" name="password" placeholder="saisir votre mot de passe ici" class="form-control" required>
								</div>
								<button class="formBTN" type="submit"> Se Connecter </button>
								<br>
							</form>
							<button class="switchFormBTN" onClick="goToRegister();"> Vous n'avez pas de compte ? inscrivez-vous </button>
						</div>
					</div>
				</div>
			<!-- end login form -->
	
	<!-- footer -->
    <footer>
    </footer>
    <!-- end footer -->
    </div>
    </div>
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>

    <script src="js/jquery-3.0.0.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function() {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>
</body>

</html>
