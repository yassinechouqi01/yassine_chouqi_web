
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
        <a href="rajastore.php"> <img src="eagle.png" alt="" class="logo"> <span>RAJA</span> STORE</a>
         <div>
             <ul id="navbar">
                 <li><a class="active" href="rajastore.php">Home</a></li>
                 <li><a href="shop.php"><i class="fa fa-cart-shopping"> Shop</i></a></li> </a></li>
                 <li><a href="ticketing.php">Ticketing</a></li>
              
                
                 <li>  <a href="loginpage.php"> Sign in  <i class="fa fa-right-to-bracket"> </i> </a> </li>
             </ul>
         </div>
    
    </section>

     <div class="login-wrap">
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"><a href="pagetest.php">sign-up</a></label>
          

          <div class="login-form">
             <form action="loginlast.php" method="post">
                <div class="sign-in-htm">
                    <div class="group">
                        
                        <input type="text" class="input" name="username" >
                    </div>
                    <div class="group">
                       
                        <input type="password" class="input" data-type="password" name="password">
                    </div>
                    <div class="group">
                        <input id="check" type="checkbox" class="check" checked>
                        <label for="check"><span class="icon"></span> Keep me Signed in</label>
                    </div>
                    <div class="group">
                   <input type="submit" class="button" value="Sign In" name="login" >  
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <a href="#forgot">Forgot Password?</a>
                    </div>
                </div> </form> 
                
           <!--     <form action="registration.php" method="POST">
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
        -->    </div>
        </div>
    </div>









</body>
</html>