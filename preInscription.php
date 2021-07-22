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
			tmrw = yyyy+'-'+mm+'-'+dd;
			document.getElementById("dateField").setAttribute("min", tmrw);
			//end date picker
			
			// session control
			var logStatus = <?php echo $_SESSION['id_session']; ?>;
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
                                        <a class="nav-link" href="#">Pré-Inscription</a>
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
		  <!--  <div class="col"> 
				<div class="descriptionContainer">
					<h1 class="descriptionContentType1"> Procédure du pré-Inscription :</h1>
					<ul type="circle">
						<li><h2 class="descriptionContentType2"> item 1:</h2></li>
						<li><h2 class="descriptionContentType2"> item 2:</h2></li>
					</ul>
				</div>
			</div> -->
			<div class="titleDiv"><h1 class="titleCenter"> Fiche éléve </h1></div>
		   
			<!-- form inscrit -->
						<div class="logContainer2">
							<form method="POST" action="formulaire_preinscrit.php">
								<label class="labelTitleForm"><b><u>Renseignement concernant l'éléve</u></b></label>
								<div class="row">
									<div class="form-group width600">
										<label class="labelForm">Nom :</label>
										<br>
										<input class="inputForm" type="text" name="nomE" placeholder="saisir votre nom ici" class="form-control" required>
									</div>
									<div class="form-group width600">
										<label class="labelForm">Prénom :</label>
										<br>
										<input class="inputForm" type="text" name="prenomE" placeholder="saisir votre prénom ici" class="form-control" required>
									</div>
								</div>
								<div class="row">
									<div class="form-group width600">
										<label class="labelForm">Date de naissance :</label>
										<br>
									<input class="inputForm" type="date" name="dateNE" placeholder="saisir votre date de naissance ici" class="form-control" required>
									</div>
									<div class="form-group width600">
										<label class="labelForm">Lieu :</label>
										<br>
										<input class="inputForm" type="text" name="lieuNE" placeholder="saisir votre lieu de naissance ici" class="form-control" required>
									</div>
								</div>
								<div class="row">
									<div class="form-group width600">
										<label class="labelForm">Sexe :</label>
										<br>
									  <input type="radio" id="garcon" name="sexe" value="Garcon" required checked>
									  <label class="labelForm" for="garcon">Garcon</label>
									  <input type="radio" id="fille" name="sexe" value="Fille" required>
									  <label class="labelForm" for="fille">Fille</label>
									</div>
									<div class="form-group width600">
										<label class="labelForm">Nationalité :</label>
										<br>
										<input class="inputForm" type="text" name="natioE" placeholder="saisir votre nationalité ici" class="form-control" required>
									</div>
								</div>
								<div class="form-group">
									<label class="labelForm">Date de l'entrée à l'école :</label>
									<br>
									<input id="dateField" class="inputForm" type="date" name="dateEEE" placeholder="" class="form-control" required>
								</div>
								<label class="labelTitleForm"><b><u>Renseignement concernant le Pére</u></b></label>
								<div class="row">
									<div class="form-group width600">
										<label class="labelForm">Nom :</label>
										<br>
										<input class="inputForm" type="text" name="nomP" placeholder="saisir votre nom" class="form-control" required>
									</div>
									<div class="form-group width600">
										<label class="labelForm">Prénom :</label>
										<br>
										<input class="inputForm" type="text" name="prenomP" placeholder="saisir votre prénom ici" class="form-control" required>
									</div>
								</div>
								<div class="row">
									<div class="form-group width600">
										<label class="labelForm">Profession :</label>
										<br>
										<input class="inputForm" type="text" name="professionP" placeholder="saisir votre profession ici" class="form-control" required>
									</div>
									<div class="form-group width600">
										<label class="labelForm">Adresse e-mail :</label>
										<br>
										<input class="inputForm" type="text" name="emailP" placeholder="saisir votre e-mail ici" class="form-control" required>
									</div>
								</div>
								<div class="row">
									<div class="form-group width600">
										<label class="labelForm">Adresse :</label>
										<br>
										<input class="inputForm" type="text" name="adresseP" placeholder="saisir votre adresse ici" class="form-control" required>
									</div>
									<div class="form-group width600">
										<label class="labelForm">Ville :</label>
										<br>
										<input class="inputForm" type="text" name="villeP" placeholder="saisir votre ville ici" class="form-control" required>
									</div>
								</div>
								<div class="row">
									<div class="form-group width600">
										<label class="labelForm">Numéro de téléphone fixe :</label>
										<br>
										<input class="inputForm" type="text" name="numFixeP" placeholder="saisir votre numéro de téléphone fixe ici" class="form-control" required>
									</div>
									<div class="form-group width600">
										<label class="labelForm">Mobile :</label>
										<br>
										<input class="inputForm" type="text" name="numMobileP" placeholder="saisir votre numéro de téléphone ici" class="form-control" required>
									</div>
								</div>
								<label class="labelTitleForm"><b><u>Renseignement concernant la Mére</u></b></label>
								<div class="row">
									<div class="form-group width600">
										<label class="labelForm">Nom :</label>
										<br>
										<input class="inputForm" type="text" name="nomM" placeholder="saisir votre nom ici" class="form-control" required>
									</div>
									<div class="form-group width600">
										<label class="labelForm">Prénom :</label>
										<br>
										<input class="inputForm" type="text" name="prenomM" placeholder="saisir votre prénom ici" class="form-control" required>
									</div>
								</div>
								<div class="row">
									<div class="form-group width600">
										<label class="labelForm">Profession :</label>
										<br>
										<input class="inputForm" type="text" name="professionM" placeholder="saisir votre profession ici" class="form-control" required>
									</div>
									<div class="form-group width600">
										<label class="labelForm">Adresse e-mail :</label>
										<br>
										<input class="inputForm" type="text" name="emailM" placeholder="saisir votre e-mail ici" class="form-control" required>
									</div>
								</div>
								<div class="row">
									<div class="form-group width600">
										<label class="labelForm">Adresse :</label>
										<br>
										<input class="inputForm" type="text" name="adresseM" placeholder="saisir votre adresse ici" class="form-control" required>
									</div>
									<div class="form-group width600">
										<label class="labelForm">Ville :</label>
										<br>
										<input class="inputForm" type="text" name="villeM" placeholder="saisir votre ville ici" class="form-control" required>
									</div>
								</div>
								<div class="row">
									<div class="form-group width600">
										<label class="labelForm">Numéro de téléphone fixe :</label>
										<br>
										<input class="inputForm" type="text" name="numFixeM" placeholder="saisir votre numéro de téléphone fixe ici" class="form-control" required>
									</div>
									<div class="form-group width600">
										<label class="labelForm">Mobile :</label>
										<br>
										<input class="inputForm" type="text" name="numMobileM" placeholder="saisir votre numéro de téléphone ici" class="form-control" required>
									</div>
								</div>
								<label class="labelTitleForm"><b><u>Test du Niveau</u></b></label>
								<div class="form-group">
									<label class="labelForm">Date rendez-vous :</label>
									<br>
									<input id="dateField" class="inputForm" type="date" name="dateRDV" placeholder="saisir la date de rdv ici" class="form-control" min="2021-07-15" max="2021-08-31" required>
								</div>
								<button class="formBTN" type="submit" > Envoyer </button>
								<br>
							</form>
						</div>
			<!-- end form inscrit -->
    
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