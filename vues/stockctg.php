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
if (isset($_POST['sub1'])) {
    $resultat_requete=mysqli_query($chaineConnexion,"SELECT * FROM produits, contenir,clients,commandes, categories WHERE codecateg=codecategs and refproduits= refproduit and noclient= noclients AND nocommande=nocommandes AND codecateg='".$_POST['id']."' order by nom;");
}
?>
<div class="container">
    <div class="panel panel-success margetop">
     <div class="panel-heading">RECHERCHE PAR CATEGORIE</div>
     <div class="panel-body">
      <form method="POST" action="index.php?page=stockctg" class="form-inline navbar-form pull-right">
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
     <div class="panel-heading">Liste de produits disponibles en stock</div>
     <div class="panel-body">
      <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Nom du client</th> 
                <th>Prenom du client</th> 
                <th>Ville du client</th> 
                <th>Contact du client</th> 
                <th>References</th>
                <th>Nom du produit</th>
                <th>P U</th>
                <th>categorie </th>
                <th>QTE</th>
                <th>Type</th>
                <th>Action</th> 
            </tr>
        </thead>
        <tbody>
                <?php
                
                  while ($n=mysqli_fetch_assoc($resultat_requete)) 
                   { ?>
                      <tr>
                        <td><?php echo $n['nom']; ?> </td>
                        <td><?php echo $n['prenoms']; ?> </td>
                        <td><?php echo $n['ville']; ?> </td>
                        <td><?php echo $n['contact']; ?> </td>
                        <td><?php echo $n['refproduits']; ?> </td>
                        <td><?php echo $n['libelle']; ?> </td>
                        <td><?php echo $n['prixvente']; ?> </td>
                        <td><?php echo $n['codecateg']; ?> </td>
                        <td>
                            <?php echo $n['quantite']; ?>
                        </td>
                        <td>
                            <?php echo $n['nomcatego']; ?>
                        </td>
                        <td><a onclick="return confirm('Etes vous sûr de vouloir modifier la quantité de ce produit? si oui veillez retenir la référence de ce produit et cliquer sur ok.')" href="vues/modif_quantite.php?qte=<?php  echo $n['quantite']; ?>" ><span class="glyphicon glyphicon-edit"></span></a></td>
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

