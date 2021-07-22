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
                                        <a class="nav-link" href="#">Nos Services</a>
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
		    <div class="col"> 
				<div class="descriptionContainer">
					<ul type="square">
						<li>
							<h2> SERVICE DE TRANSPORT :</h2><br>
							<h3> L'Ecole Jean Mermoz dispose de deux minibus et d'une minivan pour assurer le transport scolaire des élèves.</h3>
							<h3>Les points de ramassage initialement prévus sont le JE de Laouina et le JE du Lac2. Les horaires seront communiqués plus tard.</h3><br>
						</li>
						<li>
							<h2> SERVICE DE GARDERIE :</h2><br>
							<h3>Garderie mercredi après midi ( de 13h à 18h ) :<br></h3>
							<h3>Le mercredi après midi est réservé aux activités de clubs ou aux cours de rattrapage.</h3><br>
						</li>
						<li>
							<h2> SERVICE DE CANTINE :</h2><br>
							<h3>L'Ecole Jean Mermoz dispose d'un service de Cantine qui se comporte d'un plat complet différent pour chaque joun de la semaine.</h3><br>
						</li>
						<li>
							<h2> SERVICE DE L'ENSEIGNEMENT EN LIGNE :</h2><br>
							<h3>L'Ecole Jean Mermoz dispose d'une plateforme google classroom qui contient les supports de cours numériques pour tous les niveaux ainsi que des liens des visio-conférences intéractives pour que les éléves suivent leurs cours pendant les confinements. Pour plus d'information <u><Strong><a href="detailGoogleClassroom.php"> Cliquer ici</a></Strong></u> .</h3><br>
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