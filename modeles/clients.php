<?php
  function addClient($nom,$prenom,$ville,$ctct,$id_par){
  	global $chaineConnexion;
  	$insrt= mysqli_query($chaineConnexion,"INSERT INTO clients(nom,prenoms,ville,contact,cli_parrain) VALUES('".$nom."','".$prenom."','".$ville."','".$ctct."','".$id_par."')");
  	return $insrt;
  }
?>