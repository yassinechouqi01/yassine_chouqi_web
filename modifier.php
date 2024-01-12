<html>
<head>
<title>Modifier un produit</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<?php 
include('fonctions.php');
	if(isset($_GET['reference']))
	{
		connexion();
		$sql1="select * from produit where ref='".$_GET['reference']."'";
		$reponse = $bdd->query($sql1);
		while($enreg = $reponse->fetch())
		{
?>
			<center>
			<h3>Modification du produit : <?php echo $_GET['reference'] ?></h3>
			<form action="modifier.php" method="post">
			<table border="1">
			<tr><td bgcolor="#00FF99">Catégorie</td><td><input type="text" name="id" value="<?php echo $enreg['id']; ?>"></td></tr>
			<tr><td bgcolor="#00FF99">Nom</td><td><input type="text" name="nom" value="<?php echo $enreg['nom']; ?>"></td></tr>
			<tr><td bgcolor="#00FF99">quantite</td><td><input type="number" name="quantite" value="<?php echo $enreg['quantite']; ?>"></td></tr>
			<tr><td bgcolor="#00FF99">Prix</td><td><input type="number" name="prix" value="<?php echo $enreg['prix']; ?>"></td></tr>
			</table>
			<input type="submit" value="Modifier"> &nbsp;&nbsp;<input type="reset" value="Annuler">
			<input type="hidden" name="reference" value="<?php echo $_GET['reference']; ?>">
			</form>
			</center>
<?php
		}
    }
	// mise à jour de produit
	if(isset($_POST['nom']) and isset($_POST['quantite']) and isset($_POST['prix']))
	{
		connexion();
		$sql="update produits set nom='".$_POST['nom']."', quantite='".$_POST['quantite']."', prix='".$_POST['prix']."' where id= '".$_POST['reference']."'";
		$bdd->exec($sql);
		echo '<center> Modification du produit <strong>'.$_POST['nom'].'</strong> effectué avec succés </center>' ; //alerte('Modification du produit'.$_POST['nom'].' effectué avec succés');

	}
?>
</body>
</html>