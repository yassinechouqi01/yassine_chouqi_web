<div class="container">
        <div class="crud">


            <div class="inputs">
                <div class="price">
                    <form action="crudphp.php" method="post">
                        <input  type="text" placeholder="nom" id="nom" name="nom">
                        <input  type="number" placeholder="price (buy)" id="price" name="prix">
                        <input type="text" placeholder="quantité" name="quantite">
                        <small id="total"></small>
                        <button id="submit" name="creat" >Creat</button>
                    </form>
                </div>
            </div>
<?php
include("crud.php");

if (isset($_POST['creat'])) {
    
    $nom = $_POST['nom'];
    $quantite = $_POST['quantite'];
    $prix = $_POST['prix'];
   
    // Check if headers have already been sent
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
            // Insert the new user
            $insert_query = "INSERT INTO produits (nom, quantite, prix) VALUES (?, ?, ?)";
            $insert_stmt = $bdd->prepare($insert_query);
            $insert_stmt->bind_param("sii", $nom, $quantite, $prix);
    
            if ($insert_stmt->execute()) {
               ?> 
            <?php 
               
                
                
            } 
        } 
    }
    


?>
