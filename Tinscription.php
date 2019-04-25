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
		if (!empty($nom) && !empty($prenoms) && !empty($dateN) && !empty($phone) && !empty($ville) && !empty($commune) && !empty($email) && !empty($pass)) {

				 $db_table = "user";

				  $db_values = "nom, prenoms, dateN,phone,ville,commune,email,pass";

				   $db_inconnu = "?,?,?,?,?,?,?,?";

				   $data_values = [
				  		$_POST['nom'],
				  		$_POST['prenoms'],
				  		$_POST['dateN'],
				  		$_POST['phone'],
						$_POST['ville'],
				  		$_POST['commune'],
				  		$_POST['email'],
				  		$_POST['pass']
				
				  		];
				  

				   		$result = insertData($db_table,$db_values,$db_inconnu,$data_values,$database);
				   		if ($result) {
				   			$_SESSION['success']= true;
				   		}
				   		else{
				   			$_SESSION['error'] = true;
				   		}


			header("location: connection.php");

			   			
			 

			
		}

		else{
			$errors[] = "Tous les champs sont requis !";
		}



	  
	  	
	 }


	   




	
?>
