<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View Products</title>
</head>
<style>
    table{
        background-color: darkgray;
        text-align: center;
        margin: 30px auto;
    }
    td{
        padding: 10px;
        background-color: white;
    }
    h1{
        color: black;
        text-shadow: -1px 1px 10px limegreen;
        font-family: Magneto;
    }
    #g{
        background-color: limegreen;
        color: white;
    }
    #go{
        color: black;
        background-color: gold;
    }


    .htotal{
   display: flex;

  
}
.head0{
    box-shadow:-1px 1px 4px black;
    margin: 10px 1px 10px 10px;
    display: none;
    flex-direction:column;
    background-color:white;
}
.head0 a{
    text-decoration:none;
    color:black;
    text-align: center;
}
.head0 #trhome{
          font-weight: bold;
          font-size: 20px;
        color: black;
        margin-top: 15px;
        padding: 10px;
        height: 100%;
        text-align: center;
 }
.head{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    width:100%;
    box-shadow: -3px 1px 10px black;
    border-bottom-left-radius:70px;
    border-top-left-radius:70px;
    margin: 10px 30px 0 50px;
    background-color:white;
}
.head .mmmlogo{
     display: flex;
     flex-wrap: wrap;
     margin: 0 50px 0 0;
}
.mmmlogo .fnvmlogo{
  width:130px;
       height:130px;
}
.mmmlogo #title{
       align-self: center;
       margin: 0 0 0 0;
       padding:0 0 0 0;
       font-family: Monotype Corsiva;
       font-weight: bold;
       font-size: 30px;
}
.h1{
    display: flex;
    flex-wrap: wrap;
}
.user{
    display: flex;
     flex-wrap: wrap;
    height:50px;
    align-self: flex-end;
}
.user #userimg{
    width:40px;
    height: 40px;

    align-self: center;
}
.user #username{
    color:black;
    align-self: center;
    margin: 0 0 0 10px;
}
.cards{
    display: flex;
    flex-wrap: wrap;
    flex-direction:column;
    justify-content: space-around;
    margin:0 100px 0 50px;
}
.cards a{
    text-decoration: none;
    color: black;
}
.cards img{
    width: 30px;
    height: 30px;
    margin-top:10px;
}
.cartimg{
    display: flex;
    flex-wrap: wrap;
    align-self: center;
}
.cartimg #cartname{
     align-self: center;
     color: white;
     text-shadow: 1px 1px 5px green;
     border:1px solid green;
     background-color: green;
     padding: 5px;
border-radius: 3px;
}
.orderl{
    display: flex;
    flex-wrap: wrap;
}
.orderl #orderlogo{
    align-self: center;
}
.orderl #ordername{
    color: white;
    align-self: center;
text-shadow: 1px 1px 5px green;
border:1px solid green;
padding: 5px;
background-color: green;
border-radius: 3px;
}
#ordertitle{
    font-family:Matura MT Script Capitals;
    margin: 30px 0 0 10px;
}



@media only screen and (max-width: 980px){
    body{
    }
    .htotal{
      overflow-x:hidden;
    }
    .head0{

   
    }
    .head{
        border-radius:0;
        height:100px;
        transform: translate(-15px,-12px);
        z-index: 5;
        overflow-x:hidden;
        overflow-y: hidden;
    }
    .head .mmmlogo{
        display: flex;
    }
    .mmmlogo .fnvmlogo{
        width:90px;
        height:90px;
    }
    .mmmlogo #title{
        font-size:20px;
    }
    .cards{
        transform:translate(230px,-130px);
    }
    .cards .cartimg{
        margin-bottom:20px;
        transform: translate(-50px,-27px);
    }
    .user{
        transform:translate(90px,-40px);
    }
    .user #userimg{
        width: 30px;
        height: 30px;
    }
    table{
        width:100px;
        height:200px;
        overflow:auto;
    }
    table td{
        width: 30px;

    }
}
</style>
<body>
<div class="htotal">

    <div class="head0">
        <a href="products.php" id="trhome"><p id="home"><
        </p></a>
    </div>


    <div class="head">

    <div class="mmmlogo">
        <img src="../fnvm.png" class="fnvmlogo">
        <p id="title">Fresco Nat-Veg-Mart</p>
        </div>
     
     <div class="h1">

        <div class="user">
        <img src="../user.png" id="userimg">
        <p id="username"><?php echo " ".$_SESSION['USERNAME'];?></p> 
        </div>

     <div class="cards">
    <a href="enterpage.php"> <div class="cartimg" id="ci">
            <p id="cartname">HOME</p>
        </div></a>
        <a href="products.php"><div class="orderl" id="ol">
            <p id="ordername">Products</p>
        </div></a>
           </div>

        </div>

    </div>
</div>
</div>






    <p id="ordertitle">
        My Orders / என் ஆர்டர்கள்
    </p>



<?php



$con= mysqli_connect('localhost','root','root');
mysqli_select_db($con,'fnvm');
$sql="SELECT * FROM deliveryinfo WHERE USERNAME = '{$_SESSION['USERNAME']}'";
$retval=mysqli_query($con,$sql);
$total=mysqli_num_rows($retval);



?>                         
<table border="1">
	<tr>
	</tr>

	<?php

while($result = mysqli_fetch_assoc($retval))
{
	echo "<tr>
          <td>".$result['ORDERID']."</td>
          <td id='g'>".$result['OPNAME']."</td>
          <td id='g'>".$result['OPQTY']."</td>
          <td id='g'>₹".$result['OPRATE']."</td>
          <td id='g'>₹".$result['TRATE']."</td>
          <td id='g'>₹".$result['GRANDTOTAL']."</td>
          <td>".$result['NAME']."</td>
          <td>".$result['MOBILENUMBER']."</td>
          <td>".$result['ADDRESS']."</td>
          <td>".$result['DISTRICT']."</td>
          <td>".$result['STATE']."</td>
          <td id='go'>".$result['ODATE']."</td>
          <td id='go'>".$result['OTIME']."</td>
          
        
          </tr>";
          //echo "<p>{$result['NAME']}</p>";



}
//echo "<p>".$result['MOBILENUMBER']."</p>"; <td>".$result['USERNAME']."</td>
?>
</table>
</body>
</html>