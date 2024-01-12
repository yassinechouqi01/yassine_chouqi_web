
/*<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="eagle.png" type="image/png"> 
    <link rel="stylesheet" href="shop.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 

    <title>Sign In</title>
    <style>body{
        margin:0;
        color:#6a6f8c;
        background:#c8c8c8;
        font:600 16px/18px 'Open Sans',sans-serif;
    }
    *,:after,:before{box-sizing:border-box}
    .clearfix:after,.clearfix:before{content:'';display:table}
    .clearfix:after{clear:both;display:block }
    a{color:inherit;text-decoration:none}
    #header a {
    text-decoration: none;
    color: #12ff61; /* Green color */
    font-family:cursive;
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
<body>
    <section id="header">
        <a href="rajastore.html"> <img src="eagle.png" alt="" class="logo"> <span>RAJA</span> STORE</a>
         <div>
             <ul id="navbar">
                 <li><a class="active" href="rajastore.html">Home</a></li>
                 <li><a href="shop.html"><i class="fa fa-cart-shopping"> Shop</i></a></li> </a></li>
                 <li><a href="ticketing.html">Ticketing</a></li>
              
                
                 <li>  <a href="signin.html"> Sign in  <i class="fa fa-right-to-bracket"> </i> </a> </li>
             </ul>
         </div>
    
    </section>

     <div class="login-wrap">
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab"><a href="loginpage.php">sign-in</a></label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
          

          <div class="login-form">
             
                <form action="registration.php" method="POST">
                <div class="sign-up-htm">
                    <div class="group">
                        <label for="user" class="label">Username</label>
                        <input id="user" type="text" class="input" name="username" required>
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input id="pass" type="password" class="input" data-type="password" name="password" required>
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Repeat Password</label>
                        <input id="pass" type="password" class="input" data-type="password"  required>
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Email Address</label>
                        <input id="pass" type="text" class="input">
                    </div>
                    <div class="group">
                        <input type="submit" class="button" value="Sign Up" name="register">
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <label for="tab-1">Already Member?</a>
                    </div>
                </div></form>
            </div>
        </div>
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
                <i class="fab fa-facebook-f"> </i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-youtube"></i>
            </div>

        </div>
      
        </div>
        
        <div class="col">
            <h4> About</h4>
            <a href="#"> About us</a>
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
                <i class="fa-brands fa-google-play"  ></i>
                <i class="fa-brands fa-app-store-ios" ></i>
            </div>
            <p>Secured Payement Getways</p>
            <i class="fa-brands fa-cc-visa" style="color:navy;"></i>
            <i class="fa-brands fa-cc-amex" style="color:blue;"></i>
            <i class="fa-brands fa-cc-mastercard" style="color:red;"></i>
        </div>
        
    </footer>
</body>
</html>