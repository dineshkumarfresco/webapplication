<?php
session_start();
?>

 <?php
$con= mysqli_connect('localhost','root','root');
mysqli_select_db($con,'fnvm');
$sql="SELECT * FROM productsdata";
	$retval=mysqli_query($con,$sql);
	$total=mysqli_num_rows($retval);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>products</title>
</head>
<style>
*{
	box-sizing: border-box;
	margin: 0;
	padding: 0;
}
body{

}
.body{
	display:flex;
    flex-wrap:wrap;
    justify-content: space-around;
    background-color:#eeffe2;
    margin: 40px 30px 40px 30px;
    padding: 20px;
    border-radius: 17px;
}
.container{
  
}
.products img{
	width: 170px;
	height: 170px;
	margin-top: 20px;
    margin-bottom: 13px;

}
.products{
	width: 230px;
	background-color:white;
    margin: 10px 10px 10px 10px;
    padding: 5px;
}
.products:hover{
	box-shadow: 1px -1px  10px green;
	transform: translateY(-5px);

}
#p-offer{
	text-align: center;
    position: relative;
    right: 20px;
    top: 20px;
	width: 100px;
	font-size:13px;
	background-color: #074d00;
	overflow: hidden;
	color: white;
	border-top-right-radius: 20px;
	border-bottom-left-radius:20px;
}
#pp{
	color: green;
	text-align: center;
	margin: 15px 10px 10px 10px ;
	font-family: Trajan Pro;
	font-size: 15px;
}
#Rs{
	color: green;
	text-align: center;
	margin: 10px 0 20px 0;
}
a{
	text-decoration: none;
}
sup{
	color: gray;
	font-size: 10px;
}
#username{
   color: black;
}
.htotal{
   display: flex;
   margin-top: 10px;
}
.head0{
    box-shadow:-1px 1px 4px black;
    margin: 10px 1px 10px 10px;
    display: flex;
    flex-direction:column;
}
.head0 a{
	text-decoration:none;
	color: white;
	text-align: center;
}
.head0 #trhome{
	    background-color: green;
	    border: 1px solid green;
        color: white;
        padding: 20px;
 }
	.head0 .signout {
		color: white;
		background-color:red;
		padding:20px;

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
       margin: 0 0 0 10px;
       font-family: Monotype Corsiva;
       font-weight: bold;
       font-size: 20px;
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
}
.cartimg{
	display: flex;
	flex-wrap: wrap;
}
.cartimg #cartname{
     align-self: center;
}
.orderl{
	display: flex;
	flex-wrap: wrap;
}
.orderl #ordername{
	align-self: center;
}
.footer{
	background-color: green;
	padding: 20px;
}
.footer #foot{
	text-align: center;
	color: white;
	font-family: Footlight MT Light;
}



@media only screen and (max-width: 980px){
	body{
     margin: 0;
	}
	.htotal{
      display: flex;
      flex-wrap: wrap;
      flex-direction: row;
	}
	.head0{
	  display: flex;
      flex-wrap: wrap;
      flex-direction: row;
      justify-content: space-around;
      height:10px;
      
      box-shadow: none;
      margin:0 0 30px 0px;
	}
	.head0 #trhome{
	    border-radius: 5px;
	    border: 1px solid green;
        color: green;
        background-color: white;
        padding:5px 3px 1px 3px;
        margin: 0 0 0 20px;
   }
	.head0 .signout {
		color:red;
		border-radius: 10px;
		padding: 5px;
		border: 1px solid red;
		background-color: white;
	    margin: 0 0 0 180px;
	}
	.head0 .signout a{
		color: red;
	}
	.head{
		border-radius:3px;
		display: flex;
        flex-wrap: wrap;
        flex-direction: row;
        margin: 0 0 0 0;
        height: 100px;
	}
	.mmmlogo{
      margin: 0 0 0 0;
	}
	.mmmlogo .fnvmlogo{
		width:90px;
		height:90px;
		margin: 0 0 0 0;
	}
    .mmmlogo #title{
    	margin:0 0 0 0;
		font-size:13px;
	}
	.body{
		margin: 0 0 0 0;

	}
	.h1{
		display: flex;
		flex-wrap: wrap;
		flex-direction: row;
		margin: 0 0 0 0;
	}
	.user{
		margin: 0 0 50px 0;
	    transform:translate(90px,-40px);
	}
	.user #userimg{
		width:30px;
		height:30px;
	}
	.user #username{
		color: gray;
		transform:scale(0.9);
	}
	.cards{
		margin:0 0 0 0;
		transform:translate(108px,-89px);
	}
	.cards .cartimg{
		margin:10px 0 10px 0;
	}
	.cards .orderl{
		margin:10px 0 10px 0;
	}
	.cards #cartname{
		font-size:20px;
	}
	.cards #ordername{
		font-size:20px;
	}
	.container{
		
	}
	.products{
		width:150px;
		height: 220px;
		margin:0 0 50px 0;
	}
	.products img{
		width: 70px;
		height: 70px;
		margin: ;
	}
}


</style>
<body>
	<div class="htotal">

	<div class="head0">
		<a href="tamilenterpage.php" id="trhome"><p id="home">முகப்பு
		</p></a>
		<p class="signout"><a href="fnvmmainpage.php">வெளியேறு</a></p> 
	</div>


	<div class="head">

	<div class="mmmlogo">
		<img src="../fnvm.png" class="fnvmlogo">
		<p id="title">ஃப்ரெஸ்கோ நாட்-வெஜ்-மார்ட்</p>
	    </div>
     
     <div class="h1">

		<div class="user">
		<img src="../user.png" id="userimg">
		<p id="username"><?php echo " ".$_SESSION['USERNAME'];?></p> 
	    </div>

	 <div class="cards">
	<a href="tAddtocart.php"> <div class="cartimg" id="ci">
        	<img src="../cart.png" class="cartlogo"><p id="cartname">கார்ட்</p>
        </div></a>
        <a href="order.php"><div class="orderl" id="ol">
        	<img src="../order.png" class="orderlogo"><p id="ordername">ஆர்டர்கள்</p>
        </div></a>
           </div>

        </div>

	</div>
</div>
</div>

<div class="body">
<?php
while($result = mysqli_fetch_assoc($retval))
{
	echo "

     <div class='container'>
     <a href='tviewfnvm.php?id=".$result['pid']."'>
	 <div class='products'>
	 <p id='p-offer'>".$result['poffer']."சலுகை</p>
	 <center><img src='".$result['pimage']."'></center>
     <p id='pp'>".$result['ptname']." </p>
     <p id='Rs'>₹".$result['poffamount']."<sup><mark><del>₹".$result['prate']."</del></mark></sup></p>
     </div></a>
     </div>";      
}
?>
</div>

<div class="footer">
	<p id="foot">© 2019-2022, ஃப்ரெஸ்கோ நாட்-வெஜ்-மார்ட், டெக்கீ பிளைண்டர்கள் திட்டம்.</p>
	</div>
</body>
<script>
	
</script>
</html>