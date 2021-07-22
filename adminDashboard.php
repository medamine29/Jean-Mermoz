<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Admin Dashboard</title>
	<style>
	table {
		width: 100%;
		color: #d96459;
		font-family: monospace;
		font-size: 25px;
		text-align: left;
		cellspacing: 25;
		table-layout: auto;
	}
	
	 td {
		 word-break: break-all;
		 height: auto;
	}
	
	width40{
		width: 40% !important;
	}
	
	width20{
		width: 20% !important;
	}
	
	
	
	
	
	th {
		background-color: #d96459;
		color: white;
	}
	tr:nth-child(even) {
		background-color: #f2f2f2
	}
	.containerTab{
		text-align: center;
		display: flex;
		justify-content: center;
		position: relative;
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
	<!-- css bootstrap -->
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"> -->
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
	  
	<script type="text/javascript">
	  
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
							<div class="logoCenter">
                                    <a><img src="images/jean_mermoz.png" /></a>
                                </div>
                        </div>
                    </div>
                </div>
                <!-- end header inner -->
            </header>
            <!-- end header -->
			<div>
			<hr class="rounded">
			<div>&nbsp </div>
			<h1 class="containerTab">Liste des Messages</h1>
			<div>&nbsp </div>
			
			<!-- list messages -->
			<table>
				<tr>
					<th>Nom et Prénom</th>
					<th>numéro</th>
					<th>Email</th>
					<th>Message</th>
				</tr>
				<?php
					$con = mysqli_connect('localhost','root','');
					mysqli_select_db($con,'JeanMermoz');
					if($con-> connect_error){
						die("Connection failed:". $con-> connect_error); 
					}
					
					$query = "select * from contacternous";
					$result = $con-> query($query);
					
					if($result-> num_rows > 0 ) {
						while($row = $result-> fetch_assoc()){
							echo '<tr><td width="20%">'. $row['fullname'].'</td><td width="15%">'. $row['phone'].'</td><td width="25%">'. $row['email'].'</td><td width="40%">'. $row['message'].'</td></tr>';
						}
						echo "</table>";
					}else{
						echo "0 result";
					}
					$con-> close();
				?>
			</table>
			<!-- end list messages -->
			<div>&nbsp </div>
			<h1 class="containerTab">Liste des Pré-Inscriptions</h1>
			<div>&nbsp </div>
			
			<!-- list -->
			
			<?php 
			
				$con = mysqli_connect('localhost','root','');
				mysqli_select_db($con,'JeanMermoz');
					if($con-> connect_error){
						die("Connection failed:". $con-> connect_error); 
					}
					
					$queryE = "select * from eleve";
					$resultE = $con-> query($queryE);
		
					
				if($resultE-> num_rows > 0 ) {
					while($rowE = $resultE-> fetch_assoc()){
						$queryParents = "SELECT * FROM parents where id_enfant = ". $rowE['id_eleve'];
						$resultParents = $con -> query($queryParents);
							
							echo '
							<div class="logContainer2">
								<label class="labelTitleForm"><b><u>Renseignement concernant l éléve</u></b></label>
								<div class="row">
									<div class="form-group width600 borderLabel">
										<label class="labelForm">Nom :</label>
										<br>
										<label class="labelForm">'. $rowE['nom'].'</label>
									</div>
									<div class="form-group width600 borderLabel">
										<label class="labelForm">Prénom :</label>
										<br>
										<label class="labelForm">'. $rowE['prenom'].'</label>
									</div>
								</div>
								<div class="row">
									<div class="form-group width600 borderLabel">
										<label class="labelForm">Date de naissance :</label>
										<br>
									<label class="labelForm">'. $rowE['date_naissance'].'</label>
									</div>
									<div class="form-group width600 borderLabel">
										<label class="labelForm">Lieu :</label>
										<br>
										<label class="labelForm">'. $rowE['lieu'].'</label>
									</div>
								</div>
								<div class="row">
									<div class="form-group width600 borderLabel">
										<label class="labelForm">Sexe :</label>
										<br>
										<label class="labelForm">'. $rowE['sexe'].'</label>
									</div>
									<div class="form-group width600 borderLabel">
										<label class="labelForm">Nationalité :</label>
										<br>
										<label class="labelForm">'. $rowE['nationalite'].'</label>
									</div>
								</div>
								<div class="row">
									<div class="form-group width600 borderLabel">
										<label class="labelForm">Date de l entrée à l école :</label>
										<br>
										<label class="labelForm">'. $rowE['date_entree'].'</label>
									</div>
									<div class="form-group width600 borderLabel">
										<label class="labelForm">Date de rendez-vous pour le test de niveau :</label>
										<br>
										<label class="labelForm">'. $rowE['date_test'].'</label>
									</div>
								</div>';
								
						while($rowP = $resultParents-> fetch_assoc()) {
							$parent = "";
							if($rowP['type']=="p"){
								$parent = "le Pére";
							} else {
								$parent = "la Mére";
							}
							echo '
							<label class="labelTitleForm"><b><u>Renseignement concernant '. $parent.'</u></b></label>
								<div class="row">
									<div class="form-group width600 borderLabel">
										<label class="labelForm">Nom :</label>
										<br>
										<label class="labelForm">'. $rowP['nom'].'</label>
									</div>
									<div class="form-group width600 borderLabel">
										<label class="labelForm">Prénom :</label>
										<br>
										<label class="labelForm">'. $rowP['prenom'].'</label>
									</div>
								</div>
								<div class="row">
									<div class="form-group width600 borderLabel">
										<label class="labelForm">Profession :</label>
										<br>
										<label class="labelForm">'. $rowP['profession'].'</label>
									</div>
									<div class="form-group width600 borderLabel">
										<label class="labelForm">Adresse e-mail :</label>
										<br>
										<label class="labelForm">'. $rowP['email'].'</label>
									</div>
								</div>
								<div class="row">
									<div class="form-group width600 borderLabel">
										<label class="labelForm">Adresse :</label>
										<br>
										<label class="labelForm">'. $rowP['adresse'].'</label>
									</div>
									<div class="form-group width600 borderLabel">
										<label class="labelForm">Ville :</label>
										<br>
										<label class="labelForm">'. $rowP['ville'].'</label>
									</div>
								</div>
								<div class="row">
									<div class="form-group width600 borderLabel">
										<label class="labelForm">Numéro de téléphone fixe :</label>
										<br>
										<label class="labelForm">'. $rowP['num_fixe'].'</label>
									</div>
									<div class="form-group width600 borderLabel">
										<label class="labelForm">Mobile :</label>
										<br>
										<label class="labelForm">'. $rowP['num_mobile'].'</label>
									</div>
								</div>';
							
						}
								
						echo '</div><div>&nbsp </div>';
						}
					}else{
						echo "0 result";
					}
					$con-> close();
				
			
			
			?>
			<!-- end list -->
			
			
	
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
