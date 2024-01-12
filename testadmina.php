<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "login";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['login'])) {
    $admin_username = $_POST['username'];
    $admin_password = $_POST['password'];

    $query = "SELECT id, username, password FROM admins WHERE username=?";
    $stmt = $conn->prepare($query);

    if ($stmt) {
        $stmt->bind_param("s", $admin_username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            // Verify the password
            if (password_verify($admin_password, $row['password'])) {
                $_SESSION['admin_id'] = $row['id'];
                $_SESSION['admin_username'] = $row['username'];
                header("Location: rajastore2.php");
                exit;
            } else {
                echo "Incorrect password!";
            }
        } else {
            echo "User not found!";
        }

        $stmt->close();
    } else {
        echo "Error in preparing statement: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <link rel="stylesheet" href="styleadministration.css">
    <!-- Add additional CSS stylesheets if needed -->
    <style>
      /* Add your specific styles here */
.a1 {
    border: 1px solid black;
    border-radius: 20px;
    color: black;
    background-color: green;
    padding: 10px;
    cursor: pointer;
}

.a1:hover {
    border: 1px solid rgb(51, 255, 0);
    letter-spacing: 2px;
    background-color: transparent;
    transition: 0.5s;
}

    </style>
</head>

<body>
    <section>
        <div class="signin">
            <div class="content">
                <h2>Admin Sign In</h2>
                <form action="testadmina.php" method="post">
                    <div class="inputBox">
                        <input type="text" name="username" required>
                        <i>Username</i>
                    </div>
                    <div class="inputBox">
                        <input type="password" name="password" required>
                        <i>Password</i>
                    </div>
                    <div class="inputBox">
                        <input type="submit" value="Login" class="a1" name="login">
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>
