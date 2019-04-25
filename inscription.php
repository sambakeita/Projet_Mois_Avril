<?php
	include("Tinscription.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   <!--  <link rel="stylesheet" type="text/css" href="style.css"> -->
	<title>Page d'inscription </title>
</head>
<body style="background: url('images/imgCarousel.jpg'); color: #fff;">
	<div class="container p-3 text-center">
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
		<h3 class="text-center">Votre page d'inscription</h3>
  		
  		<?php if (isset($_SESSION['success'])): ?>

	  		<div class="alert alert-success" role="alert">
			  Vos données sont enregistrées avec succès, felicitations !!!
			  Cliques <a href="tableau.php">ici pour voir les inscrits</a>
			</div>
			<?php unset($_SESSION['success']) ?>

  		<?php endif ?>

  		<?php if (isset($_SESSION['error'])): ?>
  			<div class="alert alert-danger" role="alert">
			  Echec dans l'enregistrement des données :)
			</div>
			<?php unset($_SESSION['error']) ?>
  			
  		<?php endif ?>
  		<div class="row">
  			<div class="col-md-12 offset-3">
  				<form class="forms" method="post" action="" enctype="multipart/form-data">
					<div class="form-group col-md-6 h5">
					    <label for="nom">Votre Nom</label>
					    <input type="text" class="form-control" id="nom" aria-describedby="emailHelp" placeholder="Entre votre nom" name="nom">
					  </div>
					   <div class="form-group col-md-6 h5">
					    <label for="prenoms">Prenoms</label>
					    <input type="text" class="form-control" id="prenoms" placeholder="votre prenoms" name="prenoms">
					  </div>
					  <div class="form-group col-md-6 h5">
					  	<label for="date"> Votre date de naissance</label>
					  	<input type="date" name="dateN" id="date" class="form-control">
					  </div>
					  <div class="form-group col-md-6 h5">
					  	<label for="date"> contact</label>
					  	<input type="phone" name="phone" id="phone" class="form-control" placeholder="Votre contact">
					 </div>
					  <div class="form-group col-md-6">
					  	<label for="date" class="h5">Ville</label>
					  	<input type="text" name="ville" id="ville" class="form-control" placeholder="Votre ville">
					  </div>

					 <div class="form-group col-md-6" >
					<label for="commune" class="h5">Communes</label>
					 <select class="browser-default custom-select mb-4" name="commune" id="commune">
						    <option value="">Choisir votre commune</option>
							<?php
							 foreach ($liste_commune as $communes):

								$commune_name=$communes['name'];
								$commune_id = $communes['id'];
							 ?>

						    <option value="<?= $commune_name;?>"><?= $commune_name;?></option>
							<?php endforeach; ?>	
						    
					  </select>
					  </div>
					  <div class="form-group col-md-6 h5">
					  	<label for="date" class="h5"> Email</label>
					  	<input type="email" name="email" id="email" class="form-control" placeholder="Votre email">
					  </div>
					  <div class="form-group col-md-6 h5">
					  	<label for="date" class="h5"> Mot de Passe</label>
					  	<input type="password" name="pass" id="pass" class="form-control" placeholder="Votre mot de passe">
					  </div>
					  <div class="form-group col-md-6">
					  	 <button type="submit" class="btn btn-primary btn-block" name="envoi">Submit</button>
					  </div>

					 
				</form>
  			</div>
  		</div>

	</div>
</body>
</html>