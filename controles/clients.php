<?php
     include(dirname(__FILE__).'/../modeles/clients.php');
     if (isset($_POST['sub11'])) {
     	$nom= htmlspecialchars(trim($_POST['ino']));
     	$prenom= htmlspecialchars(trim($_POST['ipre']));
     	$ville= htmlspecialchars(trim($_POST['ivil']));
     	$ctct= htmlspecialchars(trim($_POST['ictct']));
     	$id_par= htmlspecialchars(trim($_POST['ipar']));
     	if ($nom && $prenom && $ville && $ctct && $id_par) {
     		# code...
     		$client=addClient($nom,$prenom,$ville,$ctct,$id_par);
     		echo "<script>alert(\"Données sauvegardées\")</script>";
     	}
     	else{
     		echo "<script>alert(\"Veillez saisir tous les champs\")</script>";

     		header('location:index.php?page=clients');
     	}
     	
     	
     }
     include(dirname(__FILE__).'/../vues/clients.php');
?>