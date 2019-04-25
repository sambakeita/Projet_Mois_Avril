<?php include 'traitementDevi.php';?>

<!DOCTYPE html>
<html>
<head>
	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
    <!--<link rel="stylesheet" type="text/css" href="style.css"> -->
    <title>Contavt pour une demande de devis !</title>
  </head>
<body>
<div class="container">
	 <?php if(isset($errors)):?>
  		 <?php foreach ($errors as $error1): ?>
  		 	<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  <strong><?= $error1 ?></strong>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    	<span aria-hidden="true">&times;</span>
			  </button>
			</div>
  		 <?php endforeach ?>
		<?php endif?>
	<div class="container p-3 text-center">
		<div class="row">
			<?php if (isset($_SESSION['success'])): ?>

	  		<div class="alert alert-success" role="alert">
			  Félicitation votre demande de devis a été enregistrée avec succès !!!
			  Un mail vous serez envoyé dans moins de 24 heures.
			  Cliques <a href="index.php">pour continuer votre navigation !</a>
			</div>
			<?php unset($_SESSION['success']) ?>

  		<?php endif ?>

  		<?php if (isset($_SESSION['error'])): ?>
  			<div class="alert alert-danger" role="alert">
			  Echec dans l'enregistrement des données :)
			</div>
			<?php unset($_SESSION['error']) ?>
  			
  		<?php endif ?>
			<form method="post" class="text-center green border border-light p-5" style="background-color: #ddd;opacity:0.9;">

			    <p class="h4 mb-4">Demande de devis </p>

			    <p class="h5 mb-4">Votre espace de devis pour type de contrat !</p>
			     <div class="form-group">
			    	
			    <label for="name" class="h5">Nom et Prenoms :</label>
			    <input type="text" name="name" id="name" class="form-control mb-4" placeholder="Nom et Prenoms">
			    </div>

			    <div class="form-group">
			    	
			    <label for="email" class="h5">email :</label>
			    <input type="email" name="email" id="email" class="form-control mb-4" placeholder="email">
			    </div>

			   <div class="form-group">
			   	 <label for="password" class="h5">Nunero de Telephone</label>
			   	 <input type="tel" name="phone" id="phone" class="form-control mb-4" placeholder="Telephone">
			   </div>

			    
			    <button class="btn btn-info btn-block mb-3" type="submit">Envoyer</button>


			</form>
</div>
</body>
</html>