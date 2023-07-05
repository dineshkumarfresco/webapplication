<?php
session_start();
?>


<?php

$con= mysqli_connect('localhost','root','root');
mysqli_select_db($con,'fnvm');
$sql="SELECT * FROM logindata";
$retval=mysqli_query($con,$sql);
$Ltotal=mysqli_num_rows($retval);

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
		background-color:white;
		text-align:center;
		margin-right:250px;
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
		margin: 0px 30px 0 0;
		font-family:Microsoft JhengHei;
		font-weight: 1000;
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
	<div class="user">
		<p id="ptotal">Total Number of Customers: <?php echo "$Ltotal";?></p>
		<img src="../user.png" id="userimg">
		<p id="username"><?php echo " ".$_SESSION['AUSERNAME'];?></p> 
	</div>

	<table>
	<tr>
		<th>ID</th>
		<th>FULLNAME</th>
		<th>EMAIL-ID</th>
		<th>MOBILE NUMBER</th>
		<th>PASSWORD</th>
	</tr>
	<?php

while($result = mysqli_fetch_assoc($retval))
{


   echo "
   <tr>
   <td>".$result['ID']."</td>
   <td>".$result['FULLNAME']."</td>
   <td>".$result['EMAILID']."</td>
   <td>".$result['MOBILENUMBER']."</td>
   <td>".$result['PASSWORD']."</td>
   </tr>


   ";


	}
?>
</table>
</div>
</div>
</body>
</html>