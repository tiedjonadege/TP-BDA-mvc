<?php 
    require_once('controles/db_connexion.php');  
    if (!empty($_GET['page']) AND is_file('controles/'.$_GET['page'].'.php')) {
    	include('controles/'.$_GET['page'].'.php');
    }else{
    	include('vues/header1.php');

    	 include('controles/index.php');
    	 include('vues/footer.php');

    }
?>

<!DOCTYPE html>
<html>
<head>
	
	<title>accueil</title>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/glyphicons-halflings-regular.eot">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/glyphicons-halflings-regular.ttf">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/glyphicons-halflings-regular.woff">
    <link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
</head>
<body>

</body>
</html>