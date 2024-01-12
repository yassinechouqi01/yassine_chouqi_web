<html>
<head>
<title>Supprission de produit</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
	<?php
		include('fonctions.php');
		include('menu.php');
		connexion();
		$sql="delete from produit where ref='".$_GET['reference']."'";
		$reponse = $bdd->query($sql);
		echo "<center> Le produit de référence : <strong>".$_GET['reference']."</strong> est supprimé avec succés</center>";
	?>
</body>
</html>