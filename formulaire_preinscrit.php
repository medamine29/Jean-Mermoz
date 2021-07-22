<?php

session_start();


$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'JeanMermoz');

//eleve 
$nomE = $_POST['nomE'];
$prenomE = $_POST['prenomE'];
$dateNE = $_POST['dateNE'];
$lieuNE = $_POST['lieuNE'];
$sexe = $_POST['sexe'];
$natioE = $_POST['natioE'];
$dateEEE = $_POST['dateEEE'];

//pere
$nomP = $_POST['nomP'];
$prenomP = $_POST['prenomP'];
$professionP = $_POST['professionP'];
$emailP = $_POST['emailP'];
$adresseP = $_POST['adresseP'];
$villeP = $_POST['villeP'];
$numFixeP = $_POST['numFixeP'];
$numMobileP = $_POST['numMobileP'];

//mere
$nomM = $_POST['nomM'];
$prenomM = $_POST['prenomM'];
$professionM = $_POST['professionM'];
$emailM = $_POST['emailM'];
$adresseM = $_POST['adresseM'];
$villeM = $_POST['villeM'];
$numFixeM = $_POST['numFixeM'];
$numMobileM = $_POST['numMobileM'];

//test
$dateRDV = $_POST['dateRDV'];


// ajout eleve
$inscritEQuery = " insert into eleve(nom , prenom , date_naissance , lieu , sexe , nationalite , date_entree, date_test) values ('$nomE' , '$prenomE' , '$dateNE' , '$lieuNE' , '$sexe' , '$natioE' , '$dateEEE' , '$dateRDV')";
mysqli_query($con, $inscritEQuery);
$inserted_child_id = mysqli_insert_id($con);

//ajout pere
$inscritPQuery = " insert into parents(nom , prenom , profession , email , adresse , ville , num_fixe , num_mobile , id_enfant , type) values ('$nomP' , '$prenomP' , '$professionP' , '$emailP' , '$adresseP' , '$villeP' , '$numFixeP' , '$numMobileP' , $inserted_child_id , 'p')";
mysqli_query($con, $inscritPQuery);

//ajout mere
$inscritMQuery = " insert into parents(nom , prenom , profession , email , adresse , ville , num_fixe , num_mobile , id_enfant , type) values ('$nomM' , '$prenomM' , '$professionM' , '$emailM' , '$adresseM' , '$villeM' , '$numFixeM' , '$numMobileM' , $inserted_child_id , 'm')";
mysqli_query($con, $inscritMQuery);

//ajout test
$testNivQuery = " insert into testniveau(id_e , date) values ($inserted_child_id , '$dateRDV')";
mysqli_query($con, $testNivQuery);


header('location:preInscription.php');

	
?>