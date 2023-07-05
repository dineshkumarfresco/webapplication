<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>upload</title>
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
	form{
		align-self:center;
		margin: -50px 250px 0 0;
		width:650px;
	}
 form input{
 	width:200px;
 	height:30px;
 	font-family:Yu Gothic UI Light;
 }
 form textarea{
 	width:300px;
 	height:70px;
 }
 form .names{
 	display:flex;
 	flex-wrap:wrap;
 	flex-direction:row;
 }
 .names .n1{
 	margin:0 130px 0 0;
 }
 form .paras{
 	display:flex;
 	flex-direction:row;
 }
 .paras .p1{
   margin:0 30px 0 0;
 }
 form input[type='submit']{
 	width:100%;
 	color:white;
 	background-color:green;
 }
 form input[type='submit']:hover{
  background-color:gold;
 }
   .affter{
   	margin:100px 40% 0 40%;
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
		<img src="../user.png" id="userimg">
		<p id="username"><?php echo " ".$_SESSION['AUSERNAME'];?></p> 
	</div>

	<form method="POST" enctype="multipart/form-data" id="form"><br><br>
  <label>Product Image</label><br>
	<input type="file" name="pimage" value="">
	<br><br>
<div class="names">
	<div class="n1">
	<label>Product Name</label><br>
	<input type="text" name="pname" required="" placeholder="Product Name">
</div>
<div class="n2">
	<label>Tamil Product Name</label><br>
	<input type="text" name="ptname" required="" placeholder="பெயர்">
</div>
</div>
	<br><br>
	<label>Rate</label><br>
	<input type="number" name="prate" required="" placeholder="Rate">
	<br><br>
	<label>Varity</label><br>
	<input type="text" name="pvarity" required="" placeholder="Varity">
	<br><br>
<div class="paras">
	<div class="p1">
	<label>Description</label><br>
	<textarea name="ppara" required=""></textarea>
  </div>
<div class="p2">
	<label>Tamil Description</label><br>
	<textarea name="ptpara" required=""></textarea>
	</div>
</div>
	<br><br>
	<label>Total Weight</label><br>
	<input type="number" name="pweight" required="" placeholder="Weight">	
	<br><br>
	<label>% of Offer</label><br>
	<input type="text" name="poffer" required="" placeholder="% of Offer">	
	<br><br>
	<label>Off Amount</label><br>
	<input type="number" name="poffamount" required="" placeholder="OffAmount to less">	
	<br><br>
	<input type="submit" name="upload" value="UPLOAD">
	<br><br>


</form>

</div>
</div>
</body>
</html>


<?php

if(isset($_POST['upload']))

{
  
 $con= mysqli_connect('localhost','root','root');
	 mysqli_select_db($con,'fnvm');

	$pimage=$_POST['pimage'];
	$pname=$_POST['pname'];
	$ptname=$_POST['ptname'];
	$prate=$_POST['prate'];
	$ppara=$_POST['ppara'];
	$ptpara=$_POST['ptpara'];
	$pvarity=$_POST['pvarity'];
	$pweight=$_POST['pweight'];
  $poffer=$_POST['poffer'];
  $poffamount=$_POST['poffamount'];                        
 

  $filename = $_FILES["pimage"]["name"];
  $tempname = $_FILES["pimage"]["tmp_name"];
  $folder = "../fnvmimages/".$filename;
  move_uploaded_file($tempname,$folder);
   


	$sql="INSERT INTO productsdata(pimage,pname,ptname,prate,ppara,ptpara,pvarity,pweight,poffer,poffamount) VALUES ('$folder','$pname','$ptname','$prate','$ppara','$ptpara','$pvarity','$pweight','$poffer','$poffamount')";
	
	$retval=mysqli_query($con,$sql);
	if($retval)
{
echo "<script>document.getElementById('contents').style.display='none';</script> 
  <script>document.getElementById('container').style.display='none';</script>";
echo "
<div class='affter'>
<img src='$folder' width='100px' height='100px' id='afimg'>
   <p id='afname'> $pname </p>
  <font color='green'>$pname uploaded successfully <a href='viewproductsfnvm.php'>view</a>
	 </div>";
  mysqli_close($con);

}
    
}
else{
	echo "Not working";
}
?>


