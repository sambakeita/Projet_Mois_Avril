<?php
	session_start();
	include 'php/fonction.php';
	include 'php/config.php';


	$database = new PDO("mysql:host=localhost; dbname=avril", "root", ""
				);
				$database->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				$communes=$database->prepare("SELECT * FROM communes WHERE visible=1");
				$communes->execute(array());
				$liste_commune=$communes->fetchAll();



	if (isset($_POST["envoi"])) {

		$errors = [];
		extract($_POST);
		// if (!empty($nom) && !empty($prenoms) && !empty($dateN) && !empty($commune) && !empty($email)) {

				 $db_table = "demande";

				  $db_values = "nom, prenoms, email,phone,profession,ville,commune,cni";

				   $db_inconnu = "?,?,?,?,?,?,?,?";

				   $data_values = [
				  		$_POST['nom'],
				  		$_POST['prenoms'],
				  		$_POST['email'],
				  		$_POST['phone'],
						$_POST['profession'],
						$_POST['ville'],
				  		$_POST['commune'],
				  		$_POST['cni']
				
				  		];
				  

				   		$result = insertData($db_table,$db_values,$db_inconnu,$data_values,$database);
				   		if ($result) {
				   			$_SESSION['success']= true;
				   		}
				   		else{
				   			$_SESSION['error'] = true;
				   		}	

			   			
			 

			
		}
		


	  
	  	
	 // }
	   




	
?>
