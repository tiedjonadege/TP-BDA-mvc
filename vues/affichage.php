<!DOCTYPE html>
<html>
<head>
<meta charset="utf8">
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
     <div class="panel-heading">RECHERCHE PAR CATEGORIE</div>
     <div class="panel-body">
      <form method="POST" action="index.php?page=categorie" class="form-inline navbar-form pull-right">
        <div class="form-group">
         <!-- <input class="form-control" type="text" placeholder="matricule etudiant" name="le"></input> -->
         <!-- <input class="form-control" type="text" placeholder="le niveau" name="niv"></input> -->
         <select class="form-control" name="id" id="niveau">
            <option value="0"> categories</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
         </select>
         <!-- <input class="form-control" type="text" placeholder="l'année accademique" name="ak"></input>   -->
        </div>
      
        <button class="btn btn-success" type="submit" name="sub1" > <span class="glyphicon glyphicon-search"></span> RECHERCHE.. </button>
      </form>
     </div>
 </div> 
         
</div> 
 

<div class="container">
    <div class="panel panel-primary margetop">
     <div class="panel-heading">Liste de produits disponibles</div>
     <div class="panel-body">
      <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>References</th>
                <th>Nom du produit</th>
                <th>Prix de vente</th>
                <th>categorie </th>
                <!-- <th>Classe</th> -->
                <th>Suprimer</th> 
            </tr>
        </thead>
        <tbody>
                <?php
                session_start();

                  while($ligne=mysqli_fetch_assoc($resultat_requete))
                    // $_SESSION['ref']=$ligne['refproduits'];
                   { ?>
                      <tr>
                        <td><?php echo $ligne['refproduits']; ?> </td>
                        <td><?php echo $ligne['libelle']; ?> </td>
                        <td><?php echo $ligne['prixvente']; ?> </td>
                        <td><?php echo $ligne['codecateg']; ?> </td>
                        <td>
                        <a onclick="return confirm('Etes vous sûr de suprimer cet eleve?')" href="vues/suprimer_def.php?idef=<?php echo $ligne['refproduits']; ?> "><span class="glyphicon glyphicon-trash"></span></a>
                        </td>
                        </td>
                     </tr>
                 <?php }
                ?>
        </tbody>
      </table>
     </div>
 </div> 
         
</div> 

<?php include('footer.php');?>

    
</body>
</html>

