<?php 
     $chaineConnexion=mysqli_connect('localhost','root','');
     mysqli_query($chaineConnexion,'USE combio;') or
     exit(mysqli_error($chaineConnexion));
 ?>