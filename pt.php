<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "gestion";

$conn = new mysqli($servername, $username, $password, $dbname);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="pt.php" method="post">
 <p>Login :</p> <input type="text" name="login">
  <p> passeword :</p><input type="password" name="password">
<input type="submit" name="submit">
<input type="reset" name="reset">

</form>

<?php
if(isset($_POST['submit'])){
$password=$_POST['password'];
$login=$_POST['login'];
if($password==="admin" || $login==="login"){
  echo"welcom";
  
}
else{
  echo'failed';
}
}
?>
</body>
</html>