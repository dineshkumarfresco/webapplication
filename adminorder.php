<?php
session_start();
?>


<?php

$con= mysqli_connect('localhost','root','root');
mysqli_select_db($con,'fnvm');
$sql="SELECT d.*,di.* FROM deliveryinfo d,deliveryaddinfo di WHERE d.ORDERID = di.DORDERID";
//$sqll="SELECT * FROM deliveryaddinfo WHERE d.ORDERID = di.DORDERID";
$retval=mysqli_query($con,$sql);
$ototal=mysqli_num_rows($retval);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Products</title>
</head>
<style>
    body{
        background-color:#eeffe2;
    }
    .all{
        display:flex;
        flex-direction:row;
        justify-content:space-between;
        background-color:#eeffe2;
    }
.container{
    display:flex;
    flex-direction:column;
    flex-wrap:wrap;
    background:green;
    padding:10px;
    height: 100vh;
    border-radius:10px;
    }
.companynl{
    display:flex;
    flex-direction:row;
    flex-wrap:wrap;
    width:300px;
}
.companynl .logo{
    width:130px;
    height:130px;
}
.companynl #title{
    align-self: center;
       margin: 0 0 0 5px;
       font-family: Monotype Corsiva;
       font-weight: bold;
       font-size: 20px;
    }

.links{
    
    display:flex;
    flex-direction:column;
    flex-wrap:wrap;
    margin-top:60px;

}
.links p{
  padding:10px 0 10px 0;
  text-align: center;
  box-shadow:0px 1px 1px white;
}
.links p:hover{
   background-color:white;
   color:black;
   box-shadow:-1px 1px 1px lightgray;
   transition-duration:1s;
}
.links a{
   text-decoration:none;
   color:white;
   font-size:20px;
    font-family:Cambria Math;
   padding:10px;
}
.links a:hover{
    color:black;
}
.contents{
    display:flex;
    flex-direction:column;
    flex-wrap:wrap;
}
.user{
     display:flex;
     flex-direction:row;
     flex-wrap: wrap;
     align-self:flex-start;
     
}
.user #userimg{
        width: 30px;
        height: 30px;
        margin:5px;
        align-self:center;

    }
.user #username{
        padding: 5px;
    }
table{  
        width:500px;
     height:30vh;
        background-color:white;
        text-align:center;
        margin:0 0 0 0;
    }
table th{
  background-color:green;
  color:white;
  padding:10px;
}
table td{
    padding:10px;
    outline:0.1px solid lightgray;
}
#ptotal{
        align-self:center;
        margin:0 30px 0 50px;
        font-family:Microsoft JhengHei;
        font-weight: 1000;
    }
    .nav{
    margin:10px 0 10px 0;
}
ul{
    display:flex;
    flex-wrap:wrap;
}
ul li{
    display:inline-block;
    margin:0 100px 0 10px;
}
ul li a{
    border-radius:10px;
    background-color:black;
    text-decoration:none;
    color:white;
    padding:5px;
}
#allorder{
    background-color:#a2ff60;
}
.tablettt{
    width:1150px;
     height:90vh;
    overflow:auto;

}
</style>

<body>
    <div class="all">
    <div class="container" id="container">
<div class="companynl">
     <img src="../fnvm.png" alt="NO_IMAGE" class="logo">
     <p id="title">Fresco Nat-Veg-Mart</p>
    </div>
<div class="links">
    <p id="l1"><a href="dashboad.php">DASH BOARD</a></p>
    <p id="l2"><a href="viewproductsfnvm.php">VIEW PRODUCTS</a></p>
    <p id="l3"><a href="uploadfnvm.php">UPLOAD</a></p>
    <p id="l4"><a href="adminorder.php">ORDER DETAILS</a></p>
    <p id="l5"><a href="login.php">LOGIN INFO</a></p>
    </div>
 </div>

 <div class="contents" id="contents">
    <div class="nav" id="nav">
        <ul>
            <li><a href="todayorder.php" id="torder">Today Order</a></li>
            <li><a href="searchorder.php" id="search">Search</a></li>
            <li><a href="adminorder.php" id="allorder">All Order</a></li>
        </ul>
    </div>
    <div class="user">
        <p id="ptotal">Total Number of orders: <?php echo "$ototal";?></p>
        <img src="../user.png" id="userimg">
        <p id="username"><?php echo " ".$_SESSION['AUSERNAME'];?></p> 
    </div>
    <div class="tablettt">
    <table>
    <tr>
        <th>ORDERID</th>
        <th>USERNAME</th>
        <th>PRODUCT NAME</th>
        <th>PRODUCT QTY</th>
        <th>PRODUCT RATE</th>
        <th>SUBPRODUCT TOTAL AMOUNT</th>
        <th>GRANDTOTAL</th>
        <th>TO NAME</th>
        <th>TO MOBILENUMBER</th>
        <th>TO ADDRESS</th>
        <th>TO DISTRICT</th>
        <th>TO STATE</th>
        <th>ORDER DATE</th>
        <th>ORDER TIME</th>
    </tr>


<?php

while($result = mysqli_fetch_assoc($retval))
{
         echo "
            
    <tr> 
          <td><p>".$result['DORDERID']."</p></td>
          <td><p>".$result['DUSERNAME']."</p></td>
          <td id='g'>".$result['OPNAME']."</td>
          <td id='g'>".$result['OPQTY']."</td>
          <td id='g'>₹".$result['OPRATE']."</td>
          <td id='g'>₹".$result['TRATE']."</td>
          <td><p>₹".$result['GRANDTOTAL']."</p></td>       
          <td><p>".$result['DNAME']."</p></td>
          <td><p>".$result['DMOBILENUMBER']."</p></td>
          <td><p>".$result['DADDRESS']."</p></td>
          <td><p>".$result['DDISTRICT']."</p></td>
          <td><p>".$result['DSTATE']."</p></td>
          <td><p>".$result['DODATE']."</p></td>
          <td><p>".$result['DOTIME']."</p></td>
           </tr>";

}
?>


</table></div>
</div>
</div>
</body>
</html>