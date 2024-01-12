
<?php
try{

$bdd = new PDO ('mysql:host=localhost:3307; dbname=admin; charset=utf8', 'root', '');
} catch (Exception $e) {

die('Erreur : '. $e->getMessage());
}
$reponse = $bdd->query('SELECT * FROM eadmin');
$authentification = false;
while ($donnees = $reponse->fetch())
{
$username=$donnees ['username'];
$password = $donnees ['password'];
if ($_POST['username']==$username AND $_POST['password']==$password) { $authentification = true;
   
    header("location:crud.php");

}}
if ($authentification == false)

echo '<h3>Mot de passe incorrect. Réssayer </h3>';

?>