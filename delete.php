<?php
try {
    $bdd = new mysqli("localhost:3307", "root", "", "stock");
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM produits WHERE id=?";
    $stmt = $bdd->prepare($query);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        } else {
            echo "No records found for the given ID.";
        }
    } else {
        die("Prepared statement execution failed: " . $stmt->error);
    }

    $stmt->close();
}

if (isset($_POST['DELETE'])) {
    $id = $_POST['id'];

    $query = "DELETE FROM produits WHERE id=?";
    $st = $bdd->prepare($query);

    if ($st) {
        $st->bind_param("i", $id);

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
        background-color: #f44336;
        color: #fff;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #d32f2f;
    }
</style>

    </style>
</head>
<body>
    

<form action="delete.php?id=<?php echo $id; ?>" method="post">
    <input type="text" placeholder="nom" id="nom" name="nom" value="<?php echo $row['nom'] ?? ''; ?>">
    <input type="number" placeholder="price (buy)" id="price" name="prix" value="<?php echo $row['prix'] ?? ''; ?>">
    <input type="text" placeholder="quantité" name="quantite" value="<?php echo $row['quantite'] ?? ''; ?>">
    <input type="hidden" name="id" value="<?php echo $row['id'] ?? ''; ?>">
    <br>
    <input type="submit" name="DELETE" value="DELETE">
</form>
</body>
</html>