<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
    <title></title>
</head>
<body>
<?php
include('header1.php');
// require_once('../controles/db_connexion.php');
$resultat_requete=mysqli_query($chaineConnexion,'SELECT * FROM produits;');
?>
<div class="container">
    <div class="panel panel-success margetop">
     <div class="panel-heading">AJOUTER UN PRODUIT</div>
     <div class="panel-body">
      <form method="POST" action="modeles/ajout.php" class="form-inline navbar-form pull-right">
        <div class="form-group">
         <input class="form-control" type="text" placeholder="Nom du produit" name="lib"></input> 
         <input class="form-control" type="text" placeholder="prix du produit" name="prix"></input> 
         <input class="form-control" type="text" placeholder="categorie" name="catg"></input> 
        </div>
      
        <button class="btn btn-success" type="submit" name="sub1" > <span class="glyphicon glyphicon-save"></span> ENREGISTRER </button>
      </form>
     </div>
 </div> 
         
</div> 

<?php include('footer.php');?>

    
</body>
</html>

