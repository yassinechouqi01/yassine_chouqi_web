<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION['username'])) {
    $loggedInUser = $_SESSION['username'];
    $redirectPage = "ticketing2.php"; // Change this to the appropriate page
} else {
    // If not logged in, set default values
    $loggedInUser = "SignIN";
    $redirectPage = "ticketing.php"; // Change this to the appropriate page
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="shop.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <link rel="icon" href="eagle.png" type="image/png"> <!-- Ajoutez cette ligne -->
    <title>shooping Jersey</title>

    <style>
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

        .pro-container{
            padding-left: 30%;
            padding-bottom: 50px;
            margin: 80px;
        }
     .pro{
        
        border: 2px solid black;
        border-radius: 20px;
    } </style>
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
    <div class="pro-container">
        
        <div class="pro">
            <h2 class="black">Black Jersey</h2>
            <hr>
            <img src="kit_black.webp" alt="">
            <div class="des">
                <span>One all sport</span>
                <h5> Black Jersey Season 2022/2023 </h5>
            <div class="star">
                <i class="fas fa-star"> </i>
               <i class="fas fa-star"> </i>
                   <i class="fas fa-star"> </i>
                   <i class="fas fa-star"> </i>
                   <i class="fas fa-star"> </i>
            </div>
            
            <div> <label for="size"> <b>Choose a Size:</b></label>

                <select name="size" id="size">
                  <option value="S">S</option>
                  <option value="M">M</option>
                  <option value="L">L</option>
                  <option value="XL">XL</option>
                </select></div>
            <h4> 299DH </h4>
            </div>
         <div class="Quantity"> <b>Quantity</b><input type="number"> </div>  
        </div>
    </div>
    <section class="payement">
    <div class="row">
        <div class="col-75">
          <div class="container">
            <form action="">
      
              <div class="row">
                <div class="col-50">
                  <h3>Billing Address</h3>
                  <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                  <input type="text" id="fname" name="firstname" placeholder="Yassine Chouqi">
                  <label for="email"><i class="fa fa-envelope"></i> Email</label>
                  <input type="text" id="email" name="email" placeholder="xx@example.com">
                  <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                  <input type="text" id="adr" name="address" placeholder="SIDI MAAROUF HAY NAJAH ....">
                  <label for="city"><i class="fa fa-institution"></i> City</label>
                  <input type="text" id="city" name="city" placeholder="Casablanca">
      
                  <div class="row">
                   
                    <div class="col-50">
                      <label for="zip">Zip</label>
                      <input type="text" id="zip" name="zip" placeholder="10001">
                    </div>
                  </div>
                </div>
      
                <div class="col-50">
                  <h3>Payment</h3>
                  <label for="fname">Accepted Cards</label>
                  <div class="icon-container">
                    <i class="fa-brands fa-cc-visa" style="color:navy;"></i>
                    <i class="fa-brands fa-cc-amex" style="color:blue;"></i>
                    <i class="fa-brands fa-cc-mastercard" style="color:red;"></i>
                    <i class="fa-brands fa-cc-discover" style="color:orange;"></i>
                  </div>
                  <label for="cname">Name on Card</label>
                  <input type="text" id="cname" name="cardname" placeholder="yassine chouqi">
                  <label for="ccnum">Credit card number</label>
                  <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                  <label for="expmonth">Exp Month</label>
                  <input type="text" id="expmonth" name="expmonth" placeholder="September">
      
                  <div class="row">
                    <div class="col-50">
                      <label for="expyear">Exp Year</label>
                      <input type="text" id="expyear" name="expyear" placeholder="2023">
                    </div>
                    <div class="col-50">
                      <label for="cvv">CVV</label>
                      <input type="text" id="cvv" name="cvv" placeholder="352">
                    </div>
                  </div>
                </div>
      
              </div>
              <label>
                <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
              </label>
              <input type="submit" value="Continue to checkout" class="btn2">
            </form>
          </div>
        </div>
      
        <div class="col-25">
          <div class="container">
            <h4>Cart
              <span class="price" style="color:black">
                <i class="fa fa-shopping-cart"></i>
                <b>4</b>
              </span>
            </h4>
          
            <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
          </div>
        </div>
      </div>
    </section>
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
                <i class="fab fa-facebook-f"> </i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-youtube"></i>
            </div>

        </div>
        
        </div>
        
        <div class="col">
            <h4> About</h4>
            <a href="administration.php">administration</a>
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
                <i class="fa-brands fa-google-play"></i>
                <i class="fa-brands fa-app-store-ios"></i>
            </div>
            <p>Secured Payement Getways</p>
            <i class="fa-brands fa-cc-visa" style="color:navy;"></i>
            <i class="fa-brands fa-cc-amex" style="color:blue;"></i>
            <i class="fa-brands fa-cc-mastercard" style="color:red;"></i>
        </div>
        
    </footer>
</body>
</html>