<?php
  include("Tpermi.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <title>Demande de Permi de construction !</title>
</head>
<body style="background-image: url('images/permis.jpg');background-size: cover; background-repeat: no-repeat;background-position: center center;">
  <div class="container-fluid" style="background-color: blue;width: 60%; margin-right: 100px; opacity:0.7">
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
    <h3 class="text-center" style="color: #fff;">Pour toute demande de permis de construction</h3>
      
      <?php if (isset($_SESSION['success'])): ?>

        <div class="alert alert-success" role="alert">
        Votre demande de <strong>Construction</strong> a éte enregistré avec succès, nous vous
        contaterons au plus <strong>48 heures !</strong>
        Cliquez ici pour continuer <a href="index.php">pour continuer</a>
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
          <form class="forms" method="post" action="" enctype="multipart/form-data" style="color: #fff;" >
          <div class="form-group col-md-6 h4 center">
              <label for="nom">Votre Nom</label>
              <input type="text" class="form-control" id="nom" aria-describedby="emailHelp" placeholder="Entre votre nom" name="nom">
            </div>
             <div class="form-group col-md-6 h4 center">
              <label for="prenoms">Prenoms</label>
              <input type="text" class="form-control" id="prenoms" placeholder="votre prenoms" name="prenoms">
            </div>
            <div class="form-group col-md-6 h4 center">
              <label for="date"> Email</label>
              <input type="email" name="email" id="date" class="form-control">
            </div>
            <div class="form-group col-md-6 h4 center">
              <label for="date"> Telephone</label>
              <input type="phone" name="phone" id="phone" class="form-control">
           </div>
              <div class="form-group col-md-6 h4 center">
              <label for="date" class="h4 center">Profession</label>
              <input type="text" name="profession" id="email" class="form-control">
            </div>
            <div class="form-group col-md-6 h4 center">
              <label for="date" class="h4 center">Ville</label>
              <input type="text" name="ville" id="ville" class="form-control">
            </div>

           <div class="form-group col-md-6 h4 center" >
          <label for="commune" class="h4 center">Communes</label>
           <select class="browser-default custom-select" name="commune" id="commune">
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
            <div class="form-group col-md-6">
              <label for="date" class="h4 center">CNI ou toutes autres pieces</label>
              <input type="text" name="cni" id="cni" class="form-control">
            </div>

            <div class="form-group col-md-6">
               <button type="submit" class="btn btn-primary btn-block mt-0" name="envoi">Submit</button>
            </div>

           
        </form>
        </div>
      </div>

  </div>
</body>
</html>