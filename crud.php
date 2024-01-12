<?php
try {
    $bdd = new mysqli("localhost:3307", "root", "", "stock");
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Product Management System</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href='bigprj.css'>
    <style>
        body {
            background: linear-gradient(to right, #30cfd0, #221037);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .crud {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            padding: 20px;
            width: 80%;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }

        .head {
            text-align: center;
            padding-bottom: 20px;
        }

        h2 {
            color: #333;
        }

        .inputs {
            text-align: center;
            padding-bottom: 20px;
        }

        input {
            border: none;
            border-radius: 10px;
            padding: 10px;
            background-image: linear-gradient(#A020F0, #000);
            color: #fff;
            text-decoration: none;
        }

        #submit {
            border: none;
            border-radius: 10px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
            cursor: pointer;
        }

        #submit:hover {
            background-color: #45a049;
        }

        #delete {
            border: none;
            border-radius: 10px;
            padding: 10px 20px;
            background-color: #f44336;
            color: #fff;
            text-decoration: none;
            cursor: pointer;
        }

        #delete:hover {
            background-color: #d32f2f;
        }

        .tab {
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            color: #333;
        }

        th {
            background-color: #30cfd0;
            color: white;
        }

        #update, #delete {
            border: none;
            border-radius: 10px;
            padding: 5px 10px;
            color: #fff;
            text-decoration: none;
            cursor: pointer;
        }

        #update:hover, #delete:hover {
            text-decoration: none;
        }

        #update {
            background-color: #007BFF;
        }

        #update:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="crud">
            <div class="head">
                <h2>PRODUCT MANAGEMENT SYSTEM</h2>
            </div>

            <div class="inputs">
                <div class="price">
                    <form action="crudphp.php" method="post">
                        <button id="submit" name="creat"><a href="creat.php">ADD</a></button>
                    </form>
                </div>
            </div>

            <div class="tab">
                <table border=1>
                    <tr>
                        <th>ID</th>
                        <th>TITLE</th>
                        <th>PRICE</th>
                        <th>QUANTITY</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>

                    <?php 
                    $query = "SELECT * FROM produits ";
                    $result = mysqli_query($bdd, $query);

                    if (!$result) {
                        die("query failed");
                    } else {
                        while ($rows = mysqli_fetch_assoc($result)) {
                            ?>
                            <tbody>
                                <tr>
                                    <td id="a1"><?php echo $rows['id']; ?></td>
                                    <td id="a2"><?php echo $rows['nom']; ?></td>
                                    <td id="a3"><?php echo $rows['prix']; ?></td>
                                    <td id="a4"><?php echo $rows['quantite']; ?></td>
                                    <td><button id="update" name="update"><a href="update.php?id=<?php echo $rows['id']; ?>">Update</a></button></td>
                                    <td><button id="delete" name="delete"><a href="delete.php?id=<?php echo $rows['id']; ?>">Delete</a></button></td>
                                </tr>
                            </tbody>
                        <?php
                        }
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>