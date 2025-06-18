<!DOCTYPE html>
<html>
<head>

<title> Add Product | SimpleInventory  </title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
        <style>
        body{
            font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif; 
            background-color: lightgrey;
            font-family: Arial, Helvetica, sans-serif;
        } 
        form{
            
            background-color: white;
            max-width: 35% ;
            margin:5% 0 0 33% ;
            border:2px solid white;
            border-radius: 7px;
            box-shadow: 2px 2px 10px gray ;
            display:none;
            

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
        button#b1,#b2{
          
            font-size: 90%;
            font-weight: bold;
            border-radius: 5px;
            width: 45%;
            padding: 8px ;
            cursor: pointer;
              color: white;
        }
        #b1,#butt{
            background-color: #606CC7;
              border:2px solid #606CC7;     
        }
        #b2{
            background-color: red;
            border:2px solid red;   
        }
        #butt{
            font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;
            font-size: 90%;
            font-weight: bold;
            border-radius: 5px;
            width: 20%;
            padding: 8px ;
            cursor: pointer;
            color: white;
            margin-bottom: 30px;
        }

        #btn{
            margin: 22px 0px 20px 10px ;
        
        }
        #butt:hover{
           text-decoration: underline;
           background-color: #7B8BFF;
        }
        #b1:hover{
           text-decoration: underline;
           background-color: #7B8BFF;
        }
        button#b2:hover{
           text-decoration: underline;
           background-color: #AB251A;
        }
        th{
            font-weight: unset;
            font-family: Lato-Bold;
              font-size: 19px;
              color: #fff;
              line-height: 1.4;
            background-color: #6c7ae0;
          font-weight: bold;
            text-align: -internal-center;
            height: 49px;
            
        }
        
        td{
            font-weight: unset;
            font-family: Lato-Regular;
          font-size: 17px;
           color: #808080;
          line-height: 1.4;
          text-align: center;
        }
        table{
            border:2px solid #007BFF;
            border-collapse: collapse;
            border-radius: 10px;
            overflow: hidden;
           box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
          -moz-box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
          -webkit-box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
           -o-box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
           -ms-box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
           background-color: #fff;
           width: 119%;
           }
          
        #boxt{
            font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;
            background-color: white;
            max-width: 55% ;
            margin:3% 3% 0 5% ;
            border:2px solid white;
            border-radius: 7px;
            box-shadow: 2px 2px 10px gray ;
            padding: 2.5% 21% 3% 13%;
        }
        #bxs{
            display:flex;
            justify-content:space-between;
            width:15px;
           height: 2px;
           padding-bottom: 47%;
        }
       
        #bxs a#li1 :hover{
         border: 2px solid #6DE848;
        }
        #bxs a#li2 :hover{
         border: 2px solid red;
        }
      #bxs a i#i1 {
           font-size: 24px;
           color:#6DE848;
           margin-right: 3px;
               }
        #i2{
                font-size: 24px;
                color:red;
               }
        a#link{
            color:#7B8BFF;

        }
        a#link:hover{
            color:#616EC9; 
        }
        
    
    </style>
    </head>
    <body>

    
  
<form id="form" name="saisie" action="index.php" method="post">
    <a href="" id="link"><-Back</a>
  <h2>Product Information:</h2> 
 
  <div> 
    <label>  Name:</label> <br>
    <input type="text" name="desig" required> <br>
  </div>
  <div>
    <label>  Quantity:</label><br>
    <input type="number" id="qnt" name="qnt" required> <br>
 </div>
  <div>
    <label>  Unit Price:</label><br>
    <input type="number" id="px" name="prix" required> <br>
 </div>
  <div>
    <label>  Total:</label><br>
    <input type="number" id="tot" name="total"  readonly> <br>
 </div>

 <div id="btn">
    <button id="b1" type="submit" name="ajout" > Add</button>
    <button id="b2" type="reset"> Reset</button>
  </div>
</form>


<script>
/*
const q=document.getElementById("qnt");
const p=document.getElementById("px");
const t=document.getElementById("tot");
t.value=p.value*q.value;*/

function display1(){

const box=document.getElementById("boxt");
const form=document.getElementById("form");

box.style.display='none';
form.style.display='block';
}
function display2(){

const box=document.getElementById("boxt");
const form=document.getElementById("form");

box.style.display='block';
form.style.display='none';
}

var link=document.getElementById("link");
link.addEventListener("click",display2) ;


</script>
    </body>
</html>
<?php
include ('../db/db_connection.php');

if(isset($_POST['ajout'])){
 $desig=$_POST['desig'];
 $qnt=$_POST['qnt'];
 $pr=$_POST['prix'];
 $tot=$pr*$qnt;
 $insert="INSERT INTO products (name_product,quantity,unit_price,total)
           VALUES ('$desig','$qnt','$pr','$tot')";
$res=$mysqli->query($insert);
 
    }
 

    echo"<div id='boxt'>";

    echo"<button type='button' id='butt' onclick='display1()'> Add </button>";

    echo"<table border='2px' cellpadding='11.5px'  >";

    echo"<tr>";
   
    echo"<th>ID </th>";
    echo"<th>Name </th>";
    echo"<th>Quantity </th>";
    echo"<th>Unit Price</th>";
    echo"<th>Total </th>"; 
    echo"<th> Options </th>";  
     echo"</tr>";

    
$select= "SELECT * FROM products ORDER BY id";
$result=$mysqli->query($select); 
    
if($result->num_rows>0){
while($rows=$result->fetch_assoc()){
echo"<tr> ";
   echo"<td>".$rows['id']."</td>";
   echo"<td>".$rows['Designation']."</td>";
   echo"<td>".$rows['Quantite']."</td>";
   echo"<td>".$rows['Prix_Unit']."</td>";
   echo"<td>".$rows['Total']."</td>";
   echo" <td>  <div id='bxs'>  <a id='li1' href='edit_product.php?id=".$rows['id']."'> <i id='i1' class='bx bx-edit'></i> </a> ";
   echo" <a  id='li2' href='delete_product.php?id=".$rows['id']. "'> <i id='i2' class='bx bxs-trash'></i> </a></div> </td> ";
echo"</tr>";
    }  
}

echo"</table>";
  echo"</div>";
$mysqli->close() ;
?>