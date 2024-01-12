<?php
$conn = new mysqli("localhost:3307", "root", "", "stock");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['add'])) {
    $nom = $_POST['nom'];
    $prix = $_POST['prix'];
    $quantite = $_POST['quantite'];

    $sql = "INSERT INTO produits (nom, prix, quantite) VALUES ('$nom', '$prix', '$quantite')";
    $conn->query($sql);
} elseif (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prix = $_POST['prix'];
    $quantite = $_POST['quantite'];

    $sql = "UPDATE produits SET nom='$nom', prix='$prix', quantite='$quantite' WHERE id=$id";
    $conn->query($sql);
}

$result = $conn->query("SELECT * FROM produits");

$products = [];
while ($row = $result->fetch_assoc()) {
    $products[] = $row;
}

echo json_encode($products);

$conn->close();
?>
