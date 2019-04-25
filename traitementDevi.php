<?php
	session_start();
	include 'php/fonction.php';
	include 'php/config.php';


	$database = new PDO("mysql:host=localhost; dbname=avril", "root", ""
				);
				$database->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


	if (isset($_POST)) {


		$errors = [];
		extract($_POST);
		if (!empty($name) && !empty($email) && !empty($phone)) {

				 $db_table = "devi";

				  $db_values = "name, email, telephone";

				   $db_inconnu = "?,?,?";

				   $data_values = [
				  		$_POST['name'],
				  		$_POST['email'],
				  		$_POST['phone']
				
				  		];
				  

				   		$result = insertData($db_table,$db_values,$db_inconnu,$data_values,$database);
				   		if ($result) {
				   			$_SESSION['success']= true;
				   		}
				   		else{
				   			$_SESSION['error'] = true;
				   		}


				 
			   			
			 

			
		}

		else{
			$errors[] = "Tous les champs sont requis !";
		}



	  
	  	
	 }


	   




	
?>
