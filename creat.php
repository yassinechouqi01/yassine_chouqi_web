<?php
try {
    $bdd = new mysqli("localhost:3307", "root", "", "stock");
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}



if (isset($_POST['creat'])) {
    $nom = $_POST['nom'];
    $prix = $_POST['prix'];
    $quantite = $_POST['quantite'];

    // If you're inserting a new record, you shouldn't provide an ID in the INSERT query
    $query = "INSERT INTO produits (nom, prix, quantite) VALUES (?, ?, ?)";
    $st = $bdd->prepare($query);

    if ($st) {
        $st->bind_param("sii", $nom, $prix, $quantite);

        if ($st->execute()) {
            header("Location: crud.php");
            exit;
        } else {
            echo "Error: " . $st->error;
        }

        $st->close();
    } else {
        echo "Error: " . $bdd->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 300px;
    }

    input {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    input[type="submit"] {
        background-color: #4caf50;
        color: #fff;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>

</head>
<body>
    

<form action="creat.php" method="post" >
    <input type="text" placeholder="nom" id="nom" name="nom" >
    <input type="number" placeholder="price (buy)" id="price" name="prix" >
    <input type="text" placeholder="quantité" name="quantite" >
    <!-- Remove the hidden ID input for a new record -->
    <!-- <input type="hidden" name="id" value=""> -->
    <br>
    <input type="submit" name="creat" value="ADD" >
</form>
</body>
</html>
