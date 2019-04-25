<?php
	$nom = $prenoms = $dateN = $sexe = $communes = "";
	function securisation($donnee){
		$donnee = stripslashes($donnee);
		$donnee	= strip_tags($donnee);
		$donnee = trim($donnee);
		return $donnee;
	}
	


	function insertData( $db_table,$db_values,$db_inconnu,$data_values,$database){
		 $query=$database->prepare("INSERT INTO ".$db_table." (". $db_values.") VALUES(".$db_inconnu .")");
		 	$result=$query->execute($data_values);
		 	return $result;
	}

	function getAllData($database,$db_table){
		$query=$database->prepare("SELECT * FROM  $db_table");
		$query->execute([]);
		return $query->fetchAll();

	}

	// function connexion($database,$db_table,$db_values,$db_inconnu,$data_values){
	// 	$verifi = $database->prepare("SELECT * FROM $db_table WHERE email = ? and pass = ? ");
	// 	$result=$verifi->execute(array($email,$pass));
	// 	return $result->fetch();
	// }

?>