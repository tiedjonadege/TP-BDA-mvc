<?php 
    //function actioned_modif(){
    	//global $chaineConnexion;
    if (isset($_POST['sub1'])) {
   	 $libel=$_POST['lib'];
     $privt =$_POST['prix'];
     $categ=$_POST['catg'];
   	// $chaineConnexion=mysqli_connect('localhost','root','');
    //  mysqli_query($chaineConnexion,'USE combio;') or
    //  exit(mysqli_error($chaineConnexion));
   	//  $ajouter = array();
     global $chaineConnexion;
   	 if ($libel&&$privt&&$categ) {
   	 	 $op=mysqli_query($chaineConnexion,"UPDATE produits SET prixvente='".$_POST['prix']."' WHERE codecateg='$categ' and libelle='$libel';");
   	 	
   	 	echo "<script>alert(\"Donnees sauvegardees\")</script>";
   	 }else{
   	 	echo "<script>alert(\"Veillez saisir tous les champs\")</script>";
   	 }
   	

   	}

    //}
 ?>