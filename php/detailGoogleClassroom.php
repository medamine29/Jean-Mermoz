<?php 
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Jean Mermoz</title>
	<style>
	h3 {
		margin-left: 40px !important;
	}
	h2 {
		color: #8ca0a0 !important;
		margin-left: 10px !important;
	}
	h1 {
		color: #697878 !important;
		margin-left: 10% !important;
		font-size: 36px !important;
		font-weight: bold !important;
	}
	</style>
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
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
	  
	  
	<script type="text/javascript">
		var logStatus = <?php echo $_SESSION['id_session']; ?>;
	   
		function loadPageUtils()
		{			
			// date picker control 
			var today = new Date();
			var dd = today.getDate()+1;
			var mm = today.getMonth()+1; //January is 0!
			var yyyy = today.getFullYear();
			if(dd<10){
				dd='0'+dd
			}	 
			if(mm<10){
			mm='0'+mm
			}		 
			today = yyyy+'-'+mm+'-'+dd;
			document.getElementById("dateField").setAttribute("min", today);
			//end date picker
			
			// session control
			if(typeof logStatus == "number")
				{
					document.getElementById('btnLog').textContent ="Se Déconnecter";
				}
			// end session control 

		}
	  
	  function goToLogin(){
		  document.location='login.php';
	  }
	  
	  
	  </script>
	  
</head>
<!-- body -->

<body class="main-layout" onload="loadPageUtils();">
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
                                    <a href="logout.php"> <button id="btnLog" class="logBTN">Se connecter / S'inscrire</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg">
                    <div class="container">
                        <nav class="navigation navbar-expand-md  navbar-dark ">

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarsExample04">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="index.php">Acceuil<span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php#propos">À propos de nous</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="preInscription.php">Pré-Inscription</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="services.php">Nos Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php#contact">Nous Contacter</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- end header inner -->
            </header>
            <!-- end header -->
            <div height="10px">&nbsp;</div>
			<h1>Comment utiliser la plateforme de l'enseignement en ligne ?</h1><br>
		    <div class="col"> 
				<div class="descriptionContainer">
					<ul type="square">
						<li>
							<h2> COMPTE GMAIL :</h2><br>
							<h3>Pour accéder à notre plateforme vous devez disposer d'un compte gmail . Si vous n'avez pas vous pouvez le créer via <u><Strong><a href="https://accounts.google.com/signup/v2/webcreateaccount?hl=en&flowName=GlifWebSignIn&flowEntry=SignUp"> ce lien</a></Strong></u> .</h3><br>
						</li>
						<li>
							<h2> REJOINDRE UN COURS :</h2><br>
							<h3>Aprés avoir connecter à votre compte gmail vous devez accéder à google classroom via <u><Strong><a href="https://classroom.google.com/u/0/h?hl=fr"> ce lien</a></Strong></u> .</h3><br>
							<h3>De suite vous devez cliquer sur l'icone " + " en haut à droite de la page écrire le code du cours ( qui vous sera communiquer par sms ) ensuite cliquer sur "Rejoidre le cours" . </h3><br>
							<h3>Ci dessous un vidéo vous montrant la démarche à suivre :</h3><br>
							<video width="80%" controls>
								<source src="images/video.mp4" type="video/mp4">
							</video>
						</li><br>
						<li>
							<h2> TELECHARGER LES COURS :</h2><br>
							<h3>Aprés avoir rejoint un cours vous le trouverez en ouvrant votre google classroom ou via <u><Strong><a href="https://classroom.google.com/u/0/h?hl=fr"> ce lien</a></Strong></u> . </h3><br>
							<h3>Vous trouverez tous les documents et vous pouvez les télécharger et écrire des commentaires pour les professeurs .</h3><br>
							<h3>Ci dessous un vidéo vous montrant la démarche à suivre :</h3><br>
							<video width="80%" controls>
								<source src="images/video.mp4" type="video/mp4">
							</video>
						</li><br>
						<li>
							<h2> REJOINDRE UNE VISIO-CONFERENCE :</h2><br>
							<h3>Sur google classroom chaque cours dispose d'un poste qui contient un lien google meet . Cliquer sur ce lien vous serez rediriger vers une autre page autoriser l'accés au microphone puis cliquier sur "Participer" .</h3><br>
							<h3>Ci dessous un vidéo vous montrant la démarche à suivre :</h3><br>
							<video width="80%" controls>
								<source src="images/video.mp4" type="video/mp4">
							</video>
						</li>
					</ul>
				</div>
			</div>
			<div height="10px">&nbsp;</div>
		   
			
    
            <!-- footer -->

        </div>

    </div>
    <footer>
    </footer>
    <!-- end footer -->
    </div>
    </div>
    <div class="overlay"></div>
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