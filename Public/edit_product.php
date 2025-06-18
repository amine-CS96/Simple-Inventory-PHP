<?php
include '../db/db_connection.php';

$modid=$_GET['id'];

//select
$selectmod="SELECT * FROM products WHERE id=$modid";
 $resultat=$mysqli->query($selectmod);
 $row=$resultat->fetch_assoc();


if(isset($_POST['modifier'])){
   $desig=$_POST['desig'];
    $qnt=$_POST['qnt'];
    $pr=$_POST['prix'];
    $tot=$_POST['total'];
    
    
   $updat="UPDATE products SET name_product='$desig',quantity='$qnt',unit_price='$pr',total='$tot'  
                                            WHERE id =$modid";
   $upsql=$mysqli->query($updat);
     if($upsql==true){
        header("location:index.php");
     }
     else{
        echo"The Product is not modified.";
     }
    }

 ?>

<!DOCTYPE html>
<html>
<head>
   <title> Edit Product | SimpleInventory  </title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
        <style>
        body{
            font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;
            background-color: lightgrey;
            
        } 
        form{
            
            background-color: white;
            max-width: 35% ;
            margin:3% 0 0 33% ;
            border:2px solid white;
            border-radius: 7px;
            box-shadow: 2px 2px 10px gray ;
            
        } 
        h2{
            text-align: center;
            
        }
        label{
            font-weight: bold;
         
        }
        input{
            width: 89%; 
            margin-top: 4px;
            border: 2px solid lightslategray;
            border-radius: 5px;
            padding: 5px;
        }
        div{
            padding: 10px 0 10px 10px;
        }
        button#modbtn,#resbtn{
          
            font-size: 90%;
            font-weight: bold;
            border-radius: 5px;
            width: 45%;
            padding: 8px ;
            cursor: pointer;
              color: white;
        }
        #modbtn{
            background-color: #72F24B;
            border:2px solid #72F24B ;
        }
        #resbtn{
            background-color: red;
            border:2px solid red;
        }
        

        #btn2{
            margin: 22px 0px 20px 10px ;
        
        }
        #modbtn:hover{
           text-decoration: underline;
           background-color: #55B538;
        }
        #resbtn:hover{
           text-decoration: underline;
           background-color: #AB251A;
        }
       a{
            color:#7B8BFF;

        }
        a:hover{
            color:#616EC9; 
        }
    
    </style>
    </head>
    <body>
    
  

<form id="form" name="saisie2" action="" method="post">
    <a href="index.php" id="link"><-Back</a>
  <h2> Edit Product <?=$row['id']?> :</h2> 
 
  <div> 
    <label>  Name:</label> <br>
    <input type="text" name="desig" value="<?=$row['Designation']?>" required> <br>
  </div>
  <div>
    <label>  Quantity:</label><br>
    <input type="number" id="qnt" name="qnt" value="<?=$row['Quantite']?>" required> <br>
 </div>
  <div>
    <label>  Unit Price:</label><br>
    <input type="number" id="px" name="prix" value="<?=$row['Prix_Unit']?>" required> <br>
 </div>
  <div>
    <label>  Total:</label><br>
    <input type="number" id="tot" name="total" value="<?=$row['Total']?>" readonly> <br>
 </div>
  <div>  
 <div id="btn2">
    <button id="modbtn" type="submit" name="modifier" > Update</button>
    <button id="resbtn" type="reset"> Reset</button>
  </div>
</form>


<script>


</script>
    </body>
</html>
