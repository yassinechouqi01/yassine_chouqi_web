<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION['username'])) {
    $loggedInUser = $_SESSION['username'];
    $redirectPage = "ticketing2.php";
} else {
    // If not logged in, set default values
    $loggedInUser = "";
    $redirectPage = "ticketing.php";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rajawe card</title>
    <link rel="stylesheet" href="shop.css">
    <link rel="icon" href="eagle.png" type="image/png"> <!-- Ajoutez cette ligne -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
<style>
  
  
* {box-sizing:border-box ;
    text-decoration: none;}
    .cards{
        display: flex;
        justify-content: space-between;
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

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */

/*.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
 
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
} 

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}


@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
    .ticket{
    max-width: 500px;
border: 1px solid black;
display: flex;
flex-direction: column;
padding: 20px;
border-radius: 10px;
box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
text-decoration: none;
}
.ticket img {

 border-radius: 5px;


}

.ticket ul{
    list-style-type: circle ;
    color: green;
}
.ticket ul span{
    list-style-type: circle ;
    color: rgb(0, 0, 0);
}
.ticket .cmd {
  text-decoration: none;
  width: 100px;
    height: 30px;
    outline: none;
    border-radius: 10px;
    border: 2px solide none;
    color: rgb(255, 255, 255);
    background-color: rgb(0, 0, 0);
    margin-left: 175px;

    
}
.ticket .cmd :hover{
  
    text-decoration: none;
  letter-spacing: 1px;
  transition: 0.5s;
  border-color: none;
 
  cursor: pointer;
  color: rgb(255, 255, 255);
    
}
.ticket {
    margin-top: 20px;
}

input{
    background-color: rgb(195, 197, 195);
    color: #f2f2f2;
    border-radius: 10px;
}


</style>

</head>
<body>
    <section id="header">
        <a href="rajastore.php"> <img src="eagle.png" alt="" class="logo"><span>RAJA</span> STORE</a>
         <div>
             <ul id="navbar">
                 <li><a class="active" href="rajastore.php">Home</a></li>
                 <li><a href="testslid.php"> NEWS </a></li>
                 <li><a href="shop.php"><i class="fa fa-cart-shopping"> Shop</i></a></li> </a></li>
                 <li><a href="ticketing.php">Ticketing</a></li>
              
                
                 <li>  
                    <?php if (!empty($loggedInUser)): ?>
                        <a href="logout.php"> Log-Out  <i class="fa fa-right-to-bracket"></i></a>
                    <?php else: ?>
                        <a href="loginpage.php"> Sign-In <i class="fa fa-right-to-bracket"></i></a>
                    <?php endif; ?>
                 </li>
             </ul>
         </div>
    
    </section>
    <!-- Slideshow container -->
    <section class="slide">
<div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="women.jpg" style="width:100%">
      <div class="text">RAJA FOOTBALL WOMEN</div>
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="news.jpg" style="width:100%">
      <div class="text">RAJA FOOTBALL</div>
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="news2.jpg" style="width:100%">
      <div class="text">RAJA BASKETBALL</div>
    </div>
  
  
  </div>
  <br>
  
  <!-- The dots/circles -->
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>
</section>
  <br>
  <section class="cards">
  <div class="ticket">
    
        <img src="7ViCXykpqjIDnSZu9IGoDk1bJNoCAHli3VsQewto.png" alt=""> 
    <span> <h1> Rajawe card</h1></span>
    <ul><li>
        <span> Carte rechargeable</span>
       
    </li>
    <li><span>Carte donnant acces au stade</span> </li>
    
    <li><span>Valable pour une saison sportive</span> </li>
</ul>
    <br>
<h2> Prix de la carte a partir de : 50DH</h2>
<button class="cmd">

    <a href="ticketing-card.php">Je commande !</a>

    
</button>

</div>

<div class="ticket">
    
    <img src="Kveo73YEtU8oN1Nd4o8uISxzP1NuAhE5qTWzxuiR.png" alt=""> 
<span> <h1> Carte d'abonnement</h1></span>
<ul><li>
    <span> abonnement annuel</span>
   
</li>
<li><span>Acces a tous les matchs de championanat a domicile</span> </li>

<li><span>Valable pour une saison sportive</span> </li>
</ul>
<br>
<h2> Prix de la carte a partir de : 700DH</h2>
<button class="cmd">

<a href="ticketing-card2.php">Je commande !</a>



</button>

</div>

</section>
<div class="ticket">
    
    <img src="QkU4urgkhopU39zPGsBMEH2AHfT1O6domKOQgIGK.png" alt=""> 
<span> <h1> RCA vs FAR</h1></span>
<span>    <h5> 25 septembre 2023- complexe Mohammed v</h5></span>
<h4> A partir de : 50DH</h4>
<input type="button" value=" Solde out">

</div>

    
    
 <footer class="section">
        <div class="col">
          
            <h4>Contact</h4>
            <p><strong>Adress: </strong>Boulevard Omar Al-Khayam B.P. 8094. Oasis, Casablanca.
            </p>
            <p><strong>Phone  </strong>+212690364654</p>
            <p><strong> Hours:</strong> 10:00-18:00,Mon-sat</p>
        <div class="follow">
            <h4>Follow us</h4>
            <div class="icon">
                <i class="fab fa-facebook-f"style="color:navy;"></i>
                <i class="fa-brands fa-square-x-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-youtube"></i>
            </div>

        </div>
       
        </div>
        
        <div class="col">
            <h4> About</h4>
            <a href="administration.php">  ADMINISTRATION</a>
            <a href="#">Delivery Informatique</a>
            <a href="#"> Privacy policy</a>
            <a href="#">terms & conditions</a>
            <a href="#"> Contact us</a>
        </div>
        <div class="col">
            <h4> My Account</h4>
            <a href="#">  Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My wishlist</a>
            <a href="#">Track My order</a>
            <a href="#"> Help</a>
        </div>
        <div class="colinst">
            <h4>Install App</h4>
            <p> From App Store or Google Play</p>
            <div class="row">
                <i class="fa-brands fa-google-play" style="color:rgb(179, 189, 192);"></i>
                <i class="fa-brands fa-app-store-ios"style="color:navy;"></i>
            </div>
            <p>Secured Payement Getways</p>
            <i class="fa-brands fa-cc-visa" style="color:navy;"></i>
            <i class="fa-brands fa-cc-amex" style="color:blue;"></i>
            <i class="fa-brands fa-cc-mastercard" style="color:red;"></i>
        </div>
        
    </footer>
  <script>
    let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 3000); // Change image every 2 seconds
}
 </script>
</body>
</html>
