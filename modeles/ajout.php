<?php  
   
   	if (isset($_POST['sub1'])) {
   	 $libel=$_POST['lib'];
     $privt =$_POST['prix'];
     $categ=$_POST['catg'];
   	$chaineConnexion=mysqli_connect('localhost','root','');
     mysqli_query($chaineConnexion,'USE combio;') or
     exit(mysqli_error($chaineConnexion));
   	 $ajouter = array();
   	 if ($libel&&$privt&&$categ) {
   	 	 $sajout = mysqli_query($chaineConnexion,"INSERT INTO produits(libelle,prixvente ,codecateg)VALUES('".$libel."', '".$privt."', '".$categ."')");
   	 	
   	 	echo "<script>alert(\"Donnees sauvegardees\")</script>";
   	 	header('location:../index.php?page=affichage');
   	 }else{
   	 	echo "<script>alert(\"Veillez saisir tous les champs\")</script>";
   	 }
   	

   	}
     
   
?>