<?php
include('../controles/db_connexion.php');
session_start();
$idet0= $_GET['idef'];
echo $idet0;
   var_dump($idet0); 
   $suprimer = mysqli_query($chaineConnexion,"DELETE FROM produits WHERE  refproduits ='".$_GET['idef']."' ;");
   $resultat_requete=mysqli_query($chaineConnexion,"SELECT * FROM produits WHERE  refproduits='$idet0' ;");
        if (!$ligne=mysqli_fetch_assoc($resultat_requete)) {
   	       header('location:../index.php?page=affichage');
        }
        else{
        	    echo "echec de supression";
         }
     
?>