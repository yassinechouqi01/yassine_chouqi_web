<?php
session_start();
if (isset($_SESSION['username'])) {
    $loggedInUser = $_SESSION['username'];
    header("Location: rajastore2.php");
   exit;
} 
 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <link rel="icon" href="eagle.png" type="image/png"> <!-- Ajoutez cette ligne -->
    <link rel="stylesheet" href="rajastore.css">
    <title>Raja Store</title>
    <style>
    body {
    /*background-image: url("15-zAWusQtglbSg0lF.png");*/
    background-image: url('15-zAWusQtglbSg0lF.png');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    margin: 0; /* Add this to ensure no default margin */
    padding: 0; /* Add this to ensure no default padding */
}

       #header a {
    text-decoration: none;
    color: #ffffff; /* Green color */
    font-family:cursive;
}
#header a span {
    text-decoration: none;
    color: green;
    font-family:cursive;
}

#header a:hover {
    text-decoration: none;
    color: #12ff61; /* Green color */
    letter-spacing: 0.5px;
    transition: 0.6s;
}


    </style>
</head>
<body >
  
   
    <section id="header">
        <a href="rajastore.php"> <img src="eagle.png" alt="" class="logo"> <span>RAJA </span>STORE</a>
         <div>
             <ul id="navbar">
                 <li><a class="active" href="rajastore.php">Home</a></li>
                 <li><a href="testslid.php"> NEWS </a></li>
                 <li><a href="shop.php"><i class="fa fa-cart-shopping"> Shop</i></a></li> </a></li>
                 <li><a href="ticketing.php">Ticketing</a></li>        
                <li>  <a href="loginpage.php"> Sign in  <i class="fa fa-right-to-bracket"> </i> </a> </li>
             </ul>
         </div>
    
    </section>
    <section class="hero" >
     <!--   <img src="jjj.png" alt="" style="width: 100%;">-->
        <div class="text-container">

            <h2 class="a1" >Fly like the Eagles</h2>
            <h4 class="a1">Super value deals</h4>
            <p class="a1">Save more with coupons & up to 70% off!</p>
            <button><a href="shop.php" target="_blank">Shop Now</a></button>
        </div>
       
        <img src="photoraja-removebg-preview.png" alt="" class="photo">
    </section>
    
   
</body>
</html>
