<?php include "traitementConnection.php";?>

<!DOCTYPE html>
<html>
<head>
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"> 
    <link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="UTF-8">
	<title>Page de connection !</title>
</head>
<body style="background-image: url('images/imgCarousel.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
	<div class="container p-3 text-center">
		<div class="row">
			<form method="post" class="text-center green border border-light p-5" style="background-color: #ddd;opacity:0.9;">

			    <p class="h4 mb-4">Connexion</p>

			    <p>Connecter-Vous pour acceder à votre site.</p>

			    <div class="form-group">
			    	
			    <label for="email" class="h5">email :</label>
			    <input type="email" name="email" id="email" class="form-control mb-4" placeholder="email">
			    </div>

			   <div class="form-group">
			   	 <label for="password" class="h5">password</label>
			   	 <input type="password" name="pass" id="pass" class="form-control mb-4" placeholder="password">
			   </div>

			    
			    <button class="btn btn-info btn-block mb-3" type="submit">connection</button>

			    <div> Cliquez <a href="inscription.php">ici</a> pour vous inscrire !</div>


			</form>

		</div>
	</div>
</body>
</html>