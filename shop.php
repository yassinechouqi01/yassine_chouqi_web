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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <link rel="stylesheet" href="shop.css">
    <link rel="icon" href="eagle.png" type="image/png"> <!-- Ajoutez cette ligne -->
    <title>shope</title>
<style>  #header a {
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
    
    <button class="btn" id="btn" >
    <img src="sahm6.png" alt="">
            </button>
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
    <section id="product1" class="section-p1">
        <h2>
            Featured product
        </h2>
        <p>New Season New collection </p>
        
    <div class="pro-container">
        <div class="pro">
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
            <a href="choose.php"><i class="fa fa-shopping-cart"></i></a>
        </div>
        <div class="pro">
            <img src="kit_green.webp" alt="">
            <div class="des">
                <span>One all sport</span>
                <h5> Green Jersey Season 2022/2023 </h5>
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
            <a href="choos2.php"><i class="fa fa-shopping-cart"></i></a>
        </div>
        <div class="pro">
            <img src="kit_w.webp" alt="">
            <div class="des">
                <span>One all sport</span>
                <h5> White Jersey Season 2022/2023 </h5>
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
            <a href="choos3.php"><i class="fa fa-shopping-cart"></i></a>
        </div>
        
    </div>    
    <div class="pc2">
        <div class="pro">
            <img src="fullkit_black.webp" alt="">
            <div class="des">
                <span>One all sport</span>
                <h5>Full Black Jersey Season 2022/2023 </h5>
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
            <h4> 700DH </h4>
            </div>
            <a href="choos3.php"><i class="fa fa-shopping-cart"></i></a>
        </div>
        <div class="pro">
            <img src="fullkit_w.webp" alt="">
            <div class="des">
                <span>One all sport</span>
                <h5> Full  white Jersey Season 2022/2023 </h5>
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
            <h4> 700DH </h4>
            </div>
            <a href="#"><i class="fa fa-shopping-cart"></i></a>
        </div>
        <div class="pro">
            <img src="sur.webp" alt="">
            <div class="des">
                <span>One all sport</span>
                <h5> Full  white Jersey Season 2022/2023 </h5>
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
            <h4> 700DH </h4>
            </div>
            <a href="#"><i class="fa fa-shopping-cart"></i></a>
        </div>
    </div>
    <div class="pc3">
       
            <div class="pro">
                <img src="short_w.webp" alt="">
                <div class="des">
                    <span>One all sport</span>
                    <h5> white short Jersey Season 2022/2023 </h5>
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
                <h4> 100DH </h4>
                </div>
                <a href="#"><i class="fa fa-shopping-cart"></i></a>
            </div>
       <div class="pro">
                <img src="short_w.webp" alt="">
                <div class="des">
                    <span>One all sport</span>
                    <h5>Full Black Jersey Season 2022/2023 </h5>
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
                <h4> 100DH </h4>
                </div>
                <a href="#"><i class="fa fa-shopping-cart"></i></a>
            </div>
            <div class="pro">
                <img src="kitgree2024-removebg.png" alt="">
                <div class="des">
                    <span>UMBRO</span>
                    <h5>Green Jersey Season 2023/2024 </h5>
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
                <h4> 750DH </h4>
                </div>
                <a href="#"><i class="fa fa-shopping-cart"></i></a>
            </div>
    </div>
    <div class="pc3">
       
        <div class="pro">
            <img src="[removal.ai]_26fc3e72-48df-402b-b789-281c93225782-pollo_J2CUGA.png" alt="">
            <div class="des">
                <span>UMBRO</span>
                <h5> POLLO season 2023/2024 </h5>
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
            <h4> 399DH </h4>
            </div>
            <a href="#"><i class="fa fa-shopping-cart"></i></a>
        </div>
   <div class="pro">
            <img src="[removal.ai]_16b4808e-dc0b-47e0-90a5-16c74ee23405-entr_S9OBAH.png" alt="">
            <div class="des">
                <span>UMBRO</span>
                <h5>kit d'entrainement season 2023/2024 </h5>
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
            <h4> 300dh </h4>
            </div>
            <a href="#"><i class="fa fa-shopping-cart"></i></a>
        </div>
        <div class="pro">
            <img src="surgreen-removebg.png" alt="">
            <div class="des">
                <span>UMBRO</span>
                <h5>Green  Season 2023/2024 </h5>
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
            <h4> 750DH </h4>
            </div>
            <a href="#"><i class="fa fa-shopping-cart"></i></a>
        </div>
</div>
      <div class="pro-container">
    <div class="pro">
        <img src="bluekit2018.png" alt="">
        <div class="des">
            <span>LEGEA</span>
            <h5> BLUE Jersey Season 2018/2019 </h5>
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
        <a href="#"><i class="fa fa-shopping-cart"></i></a>
    </div>
    <div class="pro">
        <img src="greenkits2018.png" alt="">
        <div class="des">
            <span>LEGEA</span>
            <h5> Green Jersey Season 2018/2019 </h5>
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
        <a href="#"><i class="fa fa-shopping-cart"></i></a>
    </div>
    <div class="pro">
        <img src="whitekits2018.png" alt="">
        <div class="des">
            <span>LEGEA</span>
            <h5> White Jersey Season 2018/2019 </h5>
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
        <a href="#"><i class="fa fa-shopping-cart"></i></a>
    </div>
      </div>
    
    <div class="pc4">
        <div class="pro">
            <img src="bluekit2018.png" alt="">
            <div class="des">
                <span>LEGEA</span>
                <h5> BLUE Jersey Season 2018/2019 </h5>
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
            <a href="#"><i class="fa fa-shopping-cart"></i></a>
        </div>
        <div class="pro">
            <img src="raja-tracksuit-top-2.jpg" alt="">
            <div class="des">
                <span>LEGEA</span>
                <h5> Green Jersey Season 2018/2019 </h5>
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
            <a href="#"><i class="fa fa-shopping-cart"></i></a>
        </div>
        <div class="pro">
            <img src="whitekits2025.jpg">
            <div class="des">
                <span>ONE ALL SPORT</span>
                <h5> White Jersey Season 2018/2019 </h5>
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
            <a href="#"><i class="fa fa-shopping-cart"></i></a>
        </div>
    </div>
    
    </section>
    <section id="newssletter">
        <div class="newstext">
            <h4>
                Sign Up for more solde
            </h4>
            <p>
                Get email updates about our latest shop and special offers
            </p>

        </div
    >
    <div class="form">
        <input type="email" placeholder="Your email adress">
    <button class="normal">Sign up</button>
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
            <a href="administration.php"> Administration</a>
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
<script>     
    
        let btn = document.getElementById('btn');
btn.addEventListener('click' ,  () => {


        window.scrollTo({
    top:0,
    behavior:"smooth"

})
})
const bar = document.getElementById('bar');
const nav = document.getElementById('navbar');
if(bar){
    bar.addEventListener('clock',()=>{
        nav.classList.add('active');
    })
}

            </script>
</body>
</html>