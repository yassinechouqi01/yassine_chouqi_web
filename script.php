<?php
// Start the session
session_start();

// Database connection
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "login";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Sign Up
if (isset($_POST['signup'])) {
    $username = $_POST['user'];
    $password = password_hash($_POST['pass'], PASSWORD_DEFAULT);
    $email = $_POST['email'];

    $query = "INSERT INTO register (First_Name, Last_Name, Email, Password, File) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssss", $first_name, $last_name, $email, $hashed_password, $final_file);

    if ($stmt->execute()) {
        $_SESSION['user_email'] = $email; // Set session variable
        header("Location: rajastore.html");
        exit;
    } else {
        echo "Error. Please try again.";
    }
}

// Sign In
if (isset($_POST['signin'])) {
    $email = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM register WHERE Email=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $row['Password'])) {
            $_SESSION['user_email'] = $email; // Set session variable
            header("Location: rajastore.html");
            exit;
        } else {
            echo "Incorrect password!";
        }
    } else {
        echo "User not found!";
    }
}

// Close the database connection
$conn->close();
?>
