<?php
	include 'php/fonction.php';

	if (isset($_POST) && !empty($_POST)){
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		if(empty($email) || empty($pass))
		{
			$msg = "Tous les champs sont requis !";
		}
		else
		{
			$database = new PDO("mysql:host=localhost; dbname=avril", "root", ""
			);
			$database->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$verifi = $database->prepare("SELECT * FROM user WHERE email = ? and pass = ? ");
			$result=$verifi->execute(array($email,$pass));
			$result = $verifi->fetch();
			if ($verifi->rowCount()>0) {
			 	$_SESSION['email']= $email;
			 	header("Location:index.php");
			}
			else
			{
				$msge= "Email ou mot de pass incorrect";
				echo $msge;
			}

	
		}
		

	}
?>