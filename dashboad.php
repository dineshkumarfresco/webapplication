<?php
session_start();
?>

<?php
$con= mysqli_connect('localhost','root','root');
mysqli_select_db($con,'fnvm');
$sql="SELECT * FROM productsdata";
$retval=mysqli_query($con,$sql);
$producttotal=mysqli_num_rows($retval);
?>

<?php
$con= mysqli_connect('localhost','root','root');
mysqli_select_db($con,'fnvm');
$dt=date('d/m/Y');
$sql="SELECT d.*,di.* FROM deliveryinfo d,deliveryaddinfo di WHERE d.ORDERID = di.DORDERID && ODATE='$dt'";
$retval=mysqli_query($con,$sql);
$todayorder=mysqli_num_rows($retval);
?>

<?php
$con= mysqli_connect('localhost','root','root');
mysqli_select_db($con,'fnvm');
$sql="SELECT * FROM logindata";
$retval=mysqli_query($con,$sql);
$logintotal=mysqli_num_rows($retval);
?>


<?php

$con= mysqli_connect('localhost','root','root');
mysqli_select_db($con,'fnvm');
$sql="SELECT d.*,di.* FROM deliveryinfo d,deliveryaddinfo di WHERE d.ORDERID = di.DORDERID";
//$sqll="SELECT * FROM deliveryaddinfo WHERE d.ORDERID = di.DORDERID";
$retval=mysqli_query($con,$sql);
$totalorders=mysqli_num_rows($retval);
?>
<?php

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View Products</title>
</head>
<style>
.all{
		display:flex;
        flex-direction:row;
        flex-wrap:wrap;
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
       font-size: 30px;
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
     align-self:flex-end;
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
		width:1000px;
		border-radius:10px;
		text-align:center;
	}
	table th{
		background-color:green;
		color:white;
	}
	table td{
		background-color:white;
		outline:0.1px solid lightgray;
	}
	
	table tr{
		box-shadow:-1px 1px 1px lightgray;
		margin-top:10px;
	}
	table tr:hover{
		background-color:#eeffe2;
		cursor:pointer;
	}
	table #edit a{
		text-decoration:none;
      background-color:blue;
      color:white;
      box-shadow:-1px 1px 1px lightgray;
      border-radius:5px;
      padding:5px;
	}
	table #delet a{
		text-decoration:none;
      background-color:red;
      color:white;
      box-shadow:-1px 1px 1px lightgray;
      border-radius:5px;
      padding:5px;
	}
	#ptotal{
		align-self:center;
		margin: 0px 30px 0 0;
		font-family:Microsoft JhengHei;
		font-weight: 1000;
	}
	.boxes{
		display:flex;
		flex-wrap:wrap;
		flex-direction:row;
		justify-content:space-between;
		margin: 30px 300px 0 0;
	}
	.boxes .b1{
		background-color:white;
		box-shadow: -1px 3px 10px lightgray;
		padding:5px 10px 5px 10px;
		margin:0 10px 0 10px;
		border-left:5px solid green;
	}
	#bp{
		font-size:20px;
		text-align:center;
	}
	#signout{
				margin-left:20px;
				margin-right:5px;
	}
	#signout a{
		text-decoration:none;
		color:black;
		border-radius:5px;
		padding:5px;
		border:1px solid black;
	}
	#signout a:hover{
		color:white;
		background-color:red;
	}
</style>
<body>
	<div class="all">
	<div class="container">
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

<div class="contents">
	<div class="user">
		<img src="../user.png" id="userimg">
		<p id="username"><?php echo " ".$_SESSION['AUSERNAME'];?></p> 
		<p id="signout"><a href="fnvmmainpage.php">Signout</a></p>
	</div>
<div class="boxes">
	<div class="b1">
	<p id="bn">Total No of Todayorder: </p>
	<p id="bp"><?php echo "$todayorder"; ?></p>
    </div>
    <div class="b1">
	<p id="bn">Total No of Products: </p>
	<p id="bp"><?php echo "$producttotal"; ?></p>
    </div>
    <div class="b1">
	<p id="bn">Total No of Customers: </p>
	<p id="bp"><?php echo "$logintotal"; ?></p>
    </div>
    <div class="b1">
	<p id="bn">Total No of Orders: </p>
	<p id="bp"><?php echo "$totalorders"; ?></p>
    </div>
</div>

</div>
</div>
</body>
</html>
