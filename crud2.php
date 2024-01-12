<?php
try {
    $bdd = new mysqli("localhost:3307", "root", "", "stock");
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    

    <link rel='stylesheet'  href='bigprj.css'>
    <style>
        body{
            background-image:linear-gradient(#6a247a,#36113e);
            background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    padding-left: 400px;
    
        }
        input{
            border: solid , transparent ,0;
            border-radius: 10px;
            padding: 10px;
            background-image: linear-gradient(#A020F0,#000);
         
            
;
color:#fff;
        }
       table #update,#delete{
            border: solid , transparent ,0;
            border-radius: 10px;
            padding: 5px;
            background-color: #000;
            color:#fff;
            cursor :pointer;
         
        }
        #submit{
            border: solid , transparent ,0;
            border-radius: 10px;
            padding: 5px;
            background-color: #000;
            color:#fff;
            cursor :pointer;
         

        }
        table #a1{
            justify-content: space-between;
        }
    </style>

    
</head>
<body>
  
    <div class="container">
    <div class="crud">

    <div class="head">
        <h2> PRODUCT MANAGEMENT SYSTEM</h2>
     </div>
  
    <div class="inputs" >
       
    <div class="price">
       
    <input  type="text" placeholder="nom" id="nom" name="nom">
        <input  type="number" placeholder="price (buy)" id="price" name="prix">
<input type="text" placeholder="quantité" name="quantite">
    <small id="total"></small>
    
    
    </div> 

<button id="submit" name="creat" >Creat</button>
    </div>
   

        
    
    
    </div>
</div>
    <table border=1 >
        <tr>
        <th>
            ID
        </th>
        <th id="a1">TITLE</th>
        <th id="a1">PRICE</th>
    <th id="a1"> QUANTITY</th>
    
    <th>update</th>
<th>delete</th>
<?php 
$query="SELECT * FROM produits ";
$result=mysqli_query($bdd,$query);
if(!$result){
    die("query failed");

}
else{
    while($rows=mysqli_fetch_assoc($result)){
        ?>
       <tbody>
    <tr>
        <td id="a1"> <?php echo $rows ['id'];?></td>
        <td id="a2"><?php echo $rows ['nom'];?></td>
        <td id="a3"><?php echo $rows ['prix'];?></td>
        <td id="a4"><?php echo $rows ['quantite'];?></td>




<td><button id="update" name="update"><a href="update.php?id=<?php echo $row['id']; ?>">Update</a> </button></td>
<td><button id="delete" name="delete"><a href="delete.php ?id=<?php echo $row['id']; ?>">Delete</a>   </button></td>
</tr>





    <?php    
    }
}

  ?>  </tbody>
    </table>
     </div>
</div>

</body>
</html>