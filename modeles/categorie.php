<?php 
    session_start();
    function affiche_categ(){
    	global $chaineConnexion;
    	if (isset($_POST['sub1'])) {
    		# code...
    		
    	    $_SESSION['id']=$_POST['id'];
    	}
    	$news = array();
    	$req =mysqli_query($chaineConnexion,"SELECT* FROM produits WHERE  codecateg='".$_SESSION['id']."';");
    	while($ligne=mysqli_fetch_assoc($req)){
    		$news=$ligne;

    	}
    	return $news;
    }
 ?>