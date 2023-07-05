<?php

session_start();
//echo "<pre>";
//print_r($_SESSION["CARTS"]);
//echo"</pre>";
?>
<html>
<head>
	<?php

	$con= mysqli_connect('localhost','root','root');
	mysqli_select_db($con,'fnvm');

?>
</head>
<style>
	body{
	background-color:#eeffe2;
	overflow-x: hidden;
}
	.htotal{
   display: flex;
  
}
.head0{
    box-shadow:-1px 1px 4px black;
    margin: 10px 1px 10px 10px;
    display: flex;
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
    margin: 0 23px 0 20px;
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
	display:flex;
	flex-wrap: wrap;
	align-self: center;
   background-color: red;
   border-radius:5px;
}
.cartimg #cartname{
     align-self: center;
      padding:1px 10px 1px 20px;
      color:white;
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





.tables{
 display: flex;
 flex-wrap: wrap;
 justify-content:space-around;
 margin: 50px 20px 0 20px;
}
.producttable{
	width: 900px;
	background-color:white;
	text-align: center;
	overflow: hidden;
	border-radius: 2px;
	box-shadow: 0 1px 1px 2px rgb(0 0 0 / 20%);
}
.producttable th{
	height: 50px;
	background-color: green;
	color: white;
	border: 2px solid green;
	padding: 10px;
	font-family: Trajan Pro;
	font-size: 20px;
}
.producttable td{
	height: 20px;
	padding: 10px;
	font-size: 20px;
	padding-top: 15px;
	padding-bottom: 15px;
}
.producttable b{
   color: darkgreen;
}
.totaltable{
	width: 300px;
    height: 340px;
	background-color:white;
    padding: 10px;
	font-family: Trajan Pro;
    text-align: left;    
box-shadow: 0 1px 1px 2px rgb(0 0 0 / 20%);
}
.totaltable u{
	color: green;
	font-weight: bold;
}
.totaltable span{

	text-align:right;
}


.totaltable  p{
    margin: 7px 0 7px 0;
    font-size: 18px;
	padding: 0 10px 0 10px ;
	display: flex;
	flex-wrap: wrap;
    justify-content: space-between;
}
.totaltable #ttt{
	font-weight: bold;
	font-size: 23px;
}
.producttable tr td a{
	text-decoration: none;
	color:whitesmoke;
	padding:5px 10px 5px 10px;
	background-color: red;
   border-top-left-radius:20px;
   border-bottom-right-radius:20px;
}

#title{
	color: darkgreen;
	font-size: 30px;
	background-color: white;
	width: 230px;
	font-family: Algerian;
	transform: translate(10px,10px);
	border-top-right-radius: 30px;
	border-bottom-left-radius:30px;
	text-align: center;

}

#order{
width: 300px;
height: 50px;
margin: 15px 0 10px 0;
background-color: green;
color: white;
border-color: darkgreen;
}
#order:hover{
	background-color: gold;
	border-color: yellow;
}
#order a{
	text-decoration:none;
	color: white;
}
#weight{
	color:darkred;
	font-size: 30px;
}
.footer{
   width: 100%;
	background-color: green;
	padding: 5px;
	position:absolute;
	bottom: 0px;
}
.footer #foot{
	text-align: center;
	color: white;
	font-family: Footlight MT Light;
}




@media only screen and (max-width: 980px){
	.htotal{

	}
	.tables{
		margin: 40px 0 0 0;
		display: flex;
		flex-wrap: wrap;
		flex-direction: column;
	}
	.tables table{
		margin: 0 10px 0 10px;
		align-self: center;
	}
	.tables table th{
		font-size: 40px;
	}
	.tables table td{
		font-size: 30px;
	}
	.totaltable{
margin: 50px 0 0 0;
align-self: center;
width: 400px;
height:450px;
	}
	.totaltable .tt1 p{
		font-size: 30px;
	}
	.tt1 #ttt{
		font-size: 35px;
	}
	#order{
		width: 100%;
		font-size: 30px;
		margin-top:40px;
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
	<a href="Addtocardfnvm.php"> <div class="cartimg" id="ci">
        	<p id="cartname">Singout</p>
        </div></a>
        <a href="order.php"><div class="orderl" id="ol">
        	<img src="../order.png" class="orderlogo"><p id="ordername">My order</p>
        </div></a>
           </div>

        </div>

	</div>
</div>
</div>





	<div class="cont">
		<div class="tables">
		<table class='producttable'>
			<tr>
				<th>Item Name</th>
				<th>Qty</th>
				<th>Price</th>
				<th>Total</th>
				
				<th>X</th>
			</tr>
			<?php
			if(isset($_GET["del"]))
			{
				foreach($_SESSION["CARTS"] as $keys=>$values)
				{
					if($values["pid"]==$_GET["del"])
					{
						unset($_SESSION["CARTS"][$keys]);
					}
				}
			}



			if(!empty($_SESSION["CARTS"]))
			{
				$total=0;
				foreach($_SESSION["CARTS"] as $keys=>$values)
				{   
					
					$amt=$values["QTY"]*$values["PRATE"];
					$total+=$amt;
					$DC=60;
					$grandtotal=$DC+$total;
					$countt=count($pid);
					$TW=$values["PWEIGHT"]-$values["QTY"];
					$ppp=$values["PNAME"];
               $qqq=$values["QTY"];
					
					echo "<tr>
					<td>{$values["PNAME"]}</td>
					<td>{$values["QTY"]} kg</td>
					<td>₹{$values["PRATE"]}</td>
					<td>₹{$amt}</td>
					
					<td><a href='Addtocardfnvm.php?del={$values["pid"]}'>X</a></td>
					";
              
				}
				//echo "<button id='order'> <a href='payment.php? gt={$grandtotal} & opn={$ppp} & opq={$qqq}' > PLACE ORDER </a> </button>";<td>{$values["PWEIGHT"]}</td>
					//<td>{$TW}</td>
			}
			?>
		</table>
		<div class="totaltable">
			<div class="tt1">
			<?php
			$countt=count($pid);
			echo "
			      <p><u>PRICE LIST</u></p><br>
			      <p>ITEAMS(count)<span>: {$countt}</span></p><br>
			      <p>SUB TOTAL <span>: ₹{$total}</span></p><br>
			      <p>DELIVER CHARGE <span>: ₹{$DC}</span></p><br>
			      <p id='ttt'>TOTAL<span>: ₹{$grandtotal}</span></p>
			      ";
               
			?></div>
         <div class="tt2">
		 <button id="order"><?php echo " <a href='payment.php? gt={$grandtotal} & opn={$ppp} & opq={$qqq}' > PLACE ORDER </a> ";?></button>
		 
	     </div>
		</div>

        </div>
       

<table>
	<tr>
		
	</tr>

	
</table>

<?php

				//if($_SESSION["CARTS"])
				//{  

					//echo "<button id='order'> <a href='payment.php? gt={$grandtotal} & opn={$ppp} & opq={$qqq}' > PLACE ORDER </a> </button>";

                 // }
	?>
</div>
<div class="footer">
	<p id="foot">© 2019-2022, fresco-nat-veg-mart, Techie Blinders project.
</div>
</body>
</html>