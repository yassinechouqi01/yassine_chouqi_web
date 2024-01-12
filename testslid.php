<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="shop.css">
 <link rel="icon" href="eagle.png" type="image/png"> 
    <title>NEWS</title>
<style>* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    height: 100vh;
    display: grid;
    place-items: center;
    overflow: hidden;
}
#header a {
    text-decoration: none;
    color: #12ff61; /* Green color */
    font-family:cursive;
}

#header a:hover {
    text-decoration: none;
    color: #12ff61; /* Green color */
}

main {
    position: relative;
    width: 100%;
    height: 100%;
    box-shadow: 0 3px 10px rgba(0,0,0,0.3);
}

.item {
    width: 200px;
    height: 300px;
    list-style-type: none;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    z-index: 1;
    background-position: center;
    background-size: cover;
    border-radius: 20px;
    box-shadow: 0 20px 30px rgba(255,255,255,0.3) inset;
    transition: transform 0.1s, left 0.75s, top 0.75s, width 0.75s, height 0.75s;
   
    

    &:nth-child(1), &:nth-child(2) {
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        transform: none;
        border-radius: 0;
        box-shadow: none;
        opacity: 1;
    }

    &:nth-child(3) { left: 50%; }
    &:nth-child(4) { left: calc(50% + 220px); }
    &:nth-child(5) { left: calc(50% + 440px); }
    &:nth-child(6) { left: calc(50% + 660px); opacity: 0; }
}

.content {
    width: min(30vw,400px);
    position: absolute;
    top: 50%;
    left: 3rem;
    transform: translateY(-50%);
    font: 400 0.85rem helvetica,sans-serif;
    color: white;
    text-shadow: 0 3px 8px rgba(0,0,0,0.5);
    opacity: 0;
    display: none;

    & .title {
        font-family: 'arial-black';
        text-transform: uppercase;
    }

    & .description {
        line-height: 1.7;
        margin: 1rem 0 1.5rem;
        font-size: 0.8rem;
    }

    & button {
        width: fit-content;
        background-color: rgba(0,0,0,0.1);
        color: white;
        border: 2px solid white;
        border-radius: 0.25rem;
        padding: 0.75rem;
        cursor: pointer;
    }
}

.item:nth-of-type(2) .content {
    display: block;
    animation: show 0.75s ease-in-out 0.3s forwards;
}

@keyframes show {
    0% {
        filter: blur(5px);
        transform: translateY(calc(-50% + 75px));
    }
    100% {
        opacity: 1;
        filter: blur(0);
    }
}

.nav {
    position: absolute;
    bottom: 2rem;
    left: 50%;
    transform: translateX(-50%);
    z-index: 5;
    user-select: none;
}

.nav .btn {
    background-color: rgba(255,255,255,0.5);
    color: rgba(0,0,0,0.7);
    border: 2px solid rgba(0,0,0,0.6);
    margin: 0 0.5rem; /* Add margin to create space */
    padding: 0.75rem;
    border-radius: 50%;
    cursor: pointer;
}

.nav .btn:hover {
    background-color: rgba(255,255,255,0.3);
}
@media (min-width: 650px) and (max-width: 900px) {
    .content {
        & .title        { font-size: 1rem; }
        & .description  { font-size: 0.7rem; }
        & button        { font-size: 0.7rem; }
    }
    .item {
        width: 160px;
        height: 270px;

        &:nth-child(3) { left: 50%; }
        &:nth-child(4) { left: calc(50% + 170px); }
        &:nth-child(5) { left: calc(50% + 340px); }
        &:nth-child(6) { left: calc(50% + 510px); opacity: 0; }
    }
}

@media (max-width: 650px) {
    .content {
        & .title        { font-size: 0.9rem; }
        & .description  { font-size: 0.65rem; }
        & button        { font-size: 0.7rem; }
    }
    .item {
        width: 130px;
        height: 220px;

        &:nth-child(3) { left: 50%; }
        &:nth-child(4) { left: calc(50% + 140px); }
        &:nth-child(5) { left: calc(50% + 280px); }
        &:nth-child(6) { left: calc(50% + 420px); opacity: 0; }
    }
}


* {box-sizing:border-box ; text-decoration: none;}

.cards {
    display: flex;
    justify-content: space-between;
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

button a {
    text-decoration: none;
    color: white;
}

button a:hover {
    text-decoration: none;
    color: white;
}   

    </style>

</head>
<body>
    <main>
        <ul class='slider'>
          <li class='item' style="background-image: url('news.jpg')">
            <div class='content'>
              <h2 class='title'>"Resultat"</h2>
              <p class='description'> Match Null  </p>
             
            </div>
          </li>
          <li class='item' style="background-image: url('Kveo73YEtU8oN1Nd4o8uISxzP1NuAhE5qTWzxuiR.png')">
            <div class='content'>
              <h2 class='title'>"abonnement Season 2023/2024"</h2>
              <p class='description'>Abonnement annuel,Accès à tous les matchs de championnat à domicile pour season 2023/2024 </p>
              <button > <a href="ticketing-card.php"> Take it Now!!!!! </a> </button>
            </div>
          </li>
          <li class='item' style="background-image: url('7ViCXykpqjIDnSZu9IGoDk1bJNoCAHli3VsQewto.png')">
            <div class='content'>
              <h2 class='title'>"Carte rajawi"</h2>
              <p class='description'> Carte rechargeable,Carte donnant accès au stade
                 Valable pour une saison sportive
                Prix de la carte A partir de : 50DH  </p>
                <button><a href="ticketing-card2.php">Take it Now!!!!!</a></button>
            </div>
          </li>
          <li class='item' style="background-image: url('champios.jpg')">
            <div class='content'>
              <h2 class='title'>New Collections</h2>
             
            </div>
          </li>
          <li class='item' style="background-image: url('women.jpg')">
            <div class='content'>
              <h2 class='title'>Next Match WOMEN</h2>
             
            </div>
          </li>
          <li class='item' style="background-image: url('news2.jpg')">
            <div class='content'>
              <h2 class='title'>Next Match</h2>
           
          </li>
        </ul>
        <nav class='nav'>
          <ion-icon class='btn prev' name="arrow-back-outline" style="margin-right: 50px;"></ion-icon>
          <ion-icon class='btn next' name="arrow-forward-outline" ></ion-icon>
        </nav>
      </main>
    
      <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
      <script src="jkf.js"> </script>
</body>
</html>