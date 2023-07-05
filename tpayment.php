<?php
session_start();
$us = $_SESSION['USERNAME'];
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Payment</title>
</head>
<style>
	*{
		padding: 0;
		margin: 0;
		box-sizing: border-box;
	}
	body{ 
		overflow-x:hidden;
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
    margin: 10px 30px 0 10px;
    background-color:white;
    display:none;
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

}
.cartimg{
	display: flex;
	flex-wrap: wrap;
	align-self: center;
}
.cartimg #cartname{
     align-self: center;
}
.orderl{
	display: flex;
	flex-wrap: wrap;
}
.orderl #orderlogo{
	align-self: center;
}
.orderl #ordername{
	align-self: center;
}

	.con{
       
	}
	.address{
		box-shadow: -1px 1px 10px 1px darkgray;
		width:600px;
		margin:50px auto;
		padding: 20px;
	}
	.address #addresstitle{
		color: white;
		background-color:darkgreen;
		font-size: 30px;
		padding: 5px;
		border-top-right-radius: 10px;
		border-bottom-left-radius:10px;
	}
	.address label{
		color: black;
		font-family: Footlight MT Light;
		font-size: 20px;

	}
	.address textarea{
		width: 100%;
		height: 150px;
		font-size: 20px;
	}
	.address input[type='text']{
		width: 250px;
		height: 30px;
		font-size: 20px;
	}
	.address input[type='number']{
		width: 250px;
		height: 30px;
		font-size: 20px;
	}
	.address #b1{
		background-color: blue;
		color:whitesmoke;
		padding: 10px 30px 10px 30px;
		font-size: 17px;
		border-radius: 5px;
		margin-top: 10px;
		margin-left: 450px;

	}
	.nm{
		display: flex;
		flex-wrap: wrap;
		justify-content: space-around;
	}
	.cash{
		display: flex;
		flex-wrap: wrap;
		justify-content: space-around;
	}
	.cash #bb1{
		padding: 20px 60px 20px 60px;
		background-color:darkgreen;
		color: white;
		border-radius:20px;
	}
	.cash #bb1:hover{
		background-color: gold;
	}
	.cash #bb2{
		padding: 20px 60px 20px 60px;
		background-color:darkgreen;
		color: white;
		border-radius:20px;
	}
	.cash #bb2:hover{
		background-color: gold;
	}
	.cash #bbn{
		color: darkgray;
		margin: 20px 0 0 0;
	}
	#username{
		color: blueviolet;
	}
	.Address2{
		display: flex;
		flex-wrap: wrap;
		justify-content: space-around;
		margin-bottom: 20px;
	}
	.Address2 select{
		width: 250px;
	}
	#state{
		color:lightgray;
	}









	@media only screen and (max-width: 980px){
		body{

		}
    .htotal{
      
    }
    .head0{

   
    }
    .head{
    	border-radius:0;
    	width:1200px;
    	height:100px;
    	display:none;
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
    }
    .user{
    	transform:translate(90px,-40px);
    }
    .user #userimg{
    	width: 30px;
    	height: 30px;
    }
    .con{
    	width:380px;
    	overflow-x:hidden;
    }
    .address{
    	width: 380px;
    }
    .address input[type='text']{
    	width: 100%;
    	height: 50px;
    	font-size:20px;
    }
    .address select{
    	margin:30px 0 25px 0;
    	width: 100%;
    	height: 40px;
    	z-index:3;
    	font-size:20px;
    }
    .address .nm{
    	width:100%;
    	margin: 20px 0 0 0;
    }
    .n{
    	margin-top: 20px;
    }
    .n input[type='text']{
    	width:100%;
    	height:50px;
    	font-size:30px;
    }
    .address input[type='number']{
    	width:100%;
    	height:50px;
    	margin:25px 0 0px 0;
    	font-size:30px;
	}
	#bb1{
		margin:30px;
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
	<a href="Addtocardfnvm.php"> <div class="cartimg" id="ci">
        	<img src="../cart.png" class="cartlogo"><p id="cartname">My cart</p>
        </div></a>
        <a href="order.php"><div class="orderl" id="ol">
        	<img src="../order.png" class="orderlogo"><p id="ordername">My order</p>
        </div></a>
           </div>

        </div>

	</div>
</div>
</div>




	<div class="con">
		<div class="address">
			<p id="addresstitle">விநியோக தகவல்</p><br>  
			<form method='POST'>
			<label>முகவரி</label><br>
			<textarea name="ADDRESS"></textarea><br><br>
			<div class="Address2">
				<input type="text" name="DISTRICT" placeholder="மாவட்டம்">

				<select name="STATE">
					<option id="state">--மாநிலம்--</option>
					<option value="TAMILNADU">தமிழ்நாடு</option>
					<option value="PONDICHERRY">பாண்டிச்சேரி</option>
					<option value="KERALA">கேரளா</option>
				</select>
			</div>
			<div class="nm">
			<div class="n">
			<label>பெயர்</label><br>
			<input type="text" name="NAME" ><br><br>
			</div>
			<div class="m">
			<label>கைபேசி எண்</label><br>
			<input type="number" name="NUMBER"><br><br>
		    </div>
            </div>
            <div class="cash">
	        <input type="submit" name="reg" id="bb1" value="ஆர்டர்">
	         </div>
	     </form>
		</div>
		
         
<?php
$code=rand(9999,1111);
$COD="FN".$code."VM";
?> 



		
<?php


             

              

  if(!empty($_SESSION["CARTS"]))
			{
			$total=0;
				foreach($_SESSION["CARTS"] as $keys=>$values)
				{ 
					$amt=$values["QTY"]*$values["PRATE"];
					$dt=date('d/m/Y');
					$NAME=$_POST['NAME'];
					$NUMBER=$_POST['NUMBER'];
					$ADDRESS=$_POST['ADDRESS'];
					$DISTRICT=$_POST['DISTRICT'];
					$STATE=$_POST['STATE'];
					$TW=$values["PWEIGHT"]-$values["QTY"];
					echo date_default_timezone_set('Asia/kolkata');
					$tme=date('h:i:s A');
			
	           echo "
	           <form method='POST'>
	           <input type='hidden' value='{$COD}' name='ORDERID'>
	           <input type='hidden' value='{$_SESSION['USERNAME']}' name='OUSERNAME'>
               <input type='hidden' value='{$NAME}' name='ONAME'>
               <input type='hidden' value='{$NUMBER}' name='ONUMBER'>
               <input type='hidden' value='{$ADDRESS}' name='OADDRESS'>
               <input type='hidden' value='{$DISTRICT}' name='ODISRICT'>
               <input type='hidden' value='{$STATE}' name='OSTATE'>
	           <input type='hidden' value='{$dt}' name='ODATE'>
               <input type='hidden' value='{$tme}' name='OTIME'>
	           <input type='hidden' value='{$values["PNAME"]}' name='OPNAME'>
               <input type='hidden' value='{$values["QTY"]}' name='OQTY'>
               <input type='hidden' value='{$values["PRATE"]}' name='OPRATE'>
               <input type='hidden' value='{$amt}' name='OTRATE'>
               <input type='hidden' value='{$values["PWEIGHT"]}' name='OWEIGHT'>
	           <input type='hidden' value='{$TW}' name='OTW'>
               <input type='hidden' value='{$_GET['gt']}' name='OGRANDTOTAL'>
                  </form>
                  
              
	           "; 


if(isset($_POST['reg']))
{
$con= mysqli_connect('localhost','root','root');
              mysqli_select_db($con,'fnvm');
              
              $OI=$_POST['ORDERID'];
	          $OUS=$_POST['OUSERNAME'];
	          $ON=$_POST['ONAME'];
              $OMN=$_POST['ONUMBER'];
              $OA=$_POST['OADDRESS'];
              $OD=$_POST['ODISTRICT'];
              $OS=$_POST['OSTATE'];
              $OD=$_POST['ODATE'];
              $OT=$_POST['OTIME'];
              $OPN=$_POST['OPNAME'];
              $OQ=$_POST['OQTY'];
              $OPR=$_POST['OPRATE'];
              $OTR=$_POST['OTRATE'];
              $OGT=$_POST['OGRANDTOTAL'];


$sql="INSERT INTO deliveryinfo(ORDERID,USERNAME,NAME,MOBILENUMBER,ADDRESS,DISTRICT,STATE,ODATE,OTIME,OPNAME,OPQTY,OPRATE,TRATE,GRANDTOTAL) VALUES ('{$COD}','{$_SESSION['USERNAME']}','{$NAME}','{$NUMBER}','{$ADDRESS}','{$DISTRICT}','{$STATE}','{$dt}','{$tme}','{$values["PNAME"]}','{$values["QTY"]}','{$values["PRATE"]}','{$TW}','{$_GET['gt']}')";

$retval=mysqli_query($con,$sql);	


 echo "<script>confirm('you have successfully ORDERED')</script>";
 header("Location:order.php");

mysqli_close($con);          
			
			
   }

	           
             
  }
}


?>
<?php
if(isset($_POST['reg']))
{
$conn= mysqli_connect('localhost','root','root');
              mysqli_select_db($conn,'fnvm');

                    $dt=date('d/m/Y');
					$NAME=$_POST['NAME'];
					$NUMBER=$_POST['NUMBER'];
					$ADDRESS=$_POST['ADDRESS'];
					$DISTRICT=$_POST['DISTRICT'];
					$STATE=$_POST['STATE'];
					echo date_default_timezone_set('Asia/kolkata');
					$tme=date('h:i:s A');

$sqll="INSERT INTO deliveryaddinfo(DORDERID,DUSERNAME,DNAME,DMOBILENUMBER,DADDRESS,DDISTRICT,DSTATE,DODATE,DOTIME,DGRANDTOTAL) VALUES ('{$COD}','{$_SESSION['USERNAME']}','{$NAME}','{$NUMBER}','{$ADDRESS}','{$DISTRICT}','{$STATE}','{$dt}','{$tme}','{$_GET['gt']}')";

$retvaal=mysqli_query($conn,$sqll);


 echo "<script>confirm('successfully ORDERED')</script>";

mysqli_close($conn);          
			
			
   }
?>






	</div>

</body>

</html>
