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
		var logStatus = <?php echo $_SESSION['id_session']; ?>;
	   
		function changeLogBTN()
		{
			if(typeof logStatus == "number")
				{
					document.getElementById('btnLog').textContent ="Se Déconnecter";
				}
		}
	  
	  function goToLogin(){
		  document.location='login.php';
	  }
	  
	  
	  </script>
	  
</head>
<!-- body -->

<body class="main-layout" onload="changeLogBTN();">
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
                                        <a class="nav-link" href="#carouselSlider">Acceuil<span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#propos">À propos de nous</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="preInscription.php">Pré-Inscription</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="services.php">Nos Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#contact">Nous Contacter</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- end header inner -->
            </header>
            <!-- end header -->
            <!-- start slider section -->
            <div id="carouselSlider" class="slider_section banner_main">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="first-slide" src="images/slider1.jpg" alt="First slide">
                            <div class="container">
                                <div class="carousel-caption relative">
                                    <h1>Jean Mermoz<br>
                <strong class="dark_brown">Se former autrement</strong></h1>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="second-slide" src="images/slider2.jpg" alt="Second slide">
                            <div class="container">
                                <div class="carousel-caption relative">
                                    <h1>Jean Mermoz<br>
                <strong class="dark_brown">Se former autrement</strong></h1>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="third-slide" src="images/banner.jpg" alt="Third slide">
                            <div class="container">
                                <div class="carousel-caption relative">
                                    <h1>Jean Mermoz<br>
                <strong class="dark_brown">Se former autrement</strong></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <!-- end slider section -->

            <!-- About us-->
            <div id="propos" class="about top_layer">
				<div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 pppp">
                            <div class="about_box">
                                <div class="about_box_text">
                                    <div class="title">
                                        <h2>À propos <strong class="black"> de nous</strong></h2>
                                    </div>
                                    <p>Ecole Jean Mermoz Ecole Jean Mermoz Ecole Jean Mermoz Ecole Jean Mermoz Ecole Jean Mermoz Ecole Jean Mermoz Ecole Jean MermozEcole Jean Mermoz Ecole Jean MermozEcole Jean Mermoz Ecole Jean Mermoz Ecole Jean Mermoz.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 pppp">

                            <div class="about_box_img">
                                <figure><img src="images/ecole.png" alt="#" /></figure>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end Abous us-->

            <!-- pourquoi nous -->
            <div id="yoga" class="weyoga">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title">
                                <h2>Pourquoi <strong class="black"> Jean Mermoz ?</strong></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                            <div class="yogo_three_box">
                                <figure><img src="images/cadreFam.png" alt="#" /></figure>
                                <h3>Un Cadre Familial</h3>
                                <p>Dans une atmosphère familiale, permettant d’exercer un suivi personnalisé, les élèves s’épanouissent et échangent en profondeur. </p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                            <div class="yogo_three_box">
                                <figure><img src="images/Innovation.png" alt="#" /></figure>
                                <h3>Racines et innovation</h3>
                                <p>Des investissements permanents nous permettent de rester à la pointe de ce qui se fait en matière d’éducation et d’améliorer sans cesse nos infrastructures.</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                            <div class="yogo_three_box">
                                <figure><img src="images/Enseignement.png" alt="#" /></figure>
                                <h3>Un enseignement ouvert sur le monde</h3>
                                <p>Apprentissage des langues étrangères, en plus du français et de l’anglais, ainsi que par une reconnaissance internationale de notre programme académique.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end pourquoi nous -->

            <!-- footer -->
			
            <div id="contact" class="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title">
                                <h2>Contacter <strong class="black"> Nous</strong></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 padding">

                        <form class="main_form" action="contacterNous.php" method="POST">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="Nom et Prénom" type="text" name="Name" required>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="Email" type="text" name="Email" required>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="Téléphone" type="text" name="Phone" required>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <textarea class="textarea" placeholder="Message" type="text" name="Message" required></textarea>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <button class="send" type="submit">Envoyer</button>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <ul class="mail-icon">
                                        <li><img src="images/phone_icon_white.png" /> 70 000 000</li>
                                        <li><img src="images/mail_icon_white.png" /> JeanMermoz@gmail.com</li>

                                    </ul>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <ul class="social_icon">
                                        <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                        <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 padddd">
                        <div class="map_section">
                            <div id="rightMap">
							<iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6385.44093106142!2d10.154251341163762!3d36.84917022577002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12e2cb4e31471bf3%3A0x65bc5efbce842198!2sAriana!5e0!3m2!1sfr!2stn!4v1625148719554!5m2!1sfr!2stn" width=100% height=540 style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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