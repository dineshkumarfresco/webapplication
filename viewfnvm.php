<!DOCTYPE html>
<html>
<head>
	<?php
	 session_start();
    $con= mysqli_connect('localhost','root','root');
	mysqli_select_db($con,'fnvm');
?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=d1evice-width, initial-scale=1">
	<title>view</title>
</head>
<style>
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
.footer{
	background-color: green;
	padding: 20px;
}
.footer #foot{
	text-align: center;
	color: white;
	font-family: Footlight MT Light;
}
.container{
		background-color:#eeffe2;
		padding: 20px;
		margin: 50px 50px 0 50px;
		border-radius: 25px;
	}
form{
	display:flex;
	flex-wrap: wrap;
	justify-content:space-around;
}
.imageclass{
	width: 450px;
	height: 450px;
  cursor: pointer;
  border-radius:20px;
}
strong{
	font-size: 3.0em;
 font-family: Trajan Pro;
 color:#004105;
 text-shadow: 1px 1px 5px white;

}
#rate{
   font-size:27px;
   background-color: green;
   color: white;
   width:70px;
   border-radius: 10px;
   text-align: center;
   border-top-right-radius: 35px;
	border-bottom-left-radius:35px;
}
input[type="number"]{
          width: 30px;
          border: none;
          font-size:17px;
   background-color: white;
   color:black;
   width:40px;
   height: 20px;
   border-radius: 10px;
   border: 1px solid green;
}
.others{
width: 450px;

}
#para{

	font-size: 17px;
	font-family:Magneto;
	padding: 3px;
	color:#004105;
}
input[type="submit"]{
	     background-color:green;
	     border: none;
	     color: white;
	     outline: 3px solid black;
	     border-radius:9px;
	     height: 35px;
	     font-family:Magneto;
	     box-shadow: -1px 1px 10px black;
	     transform: translateY(-40px);
}
input[type="submit"]:hover{
	color:white;
	background-color: black;
	box-shadow: -2px 3px 10px black;
}
#slashed{
font-size: 20px;
color: gray;
}
.footer{
	margin-top: 90px;
	background-color: green;

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
      margin:0 0 30px 20px;
	}
	.head0 #trhome{
	    border-radius: 5px;
        color: green;
        z-index: 5;
        font-size:30px;
        transform: translate(-20px,-50px);
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
		font-size:23px;
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
	    transform:translate(87px,-70px);
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
		transform:translate(120px,-106px);
	}
	.cards .cartimg{
		margin:10px 0 0px 0;
	}
	.cards .orderl{
		margin:7px 0 10px 0;
	}
	.cards #cartname{
		font-size:17px;
	}
	.cards #ordername{
		font-size:17px;
	}
	.container{
		margin: 10px 0 0 0;
	}
	.container form{
		margin: 0 0 0 0;
	}
	.container form .imageclass{
		width: 350px;
		height: 350px;
	}
	.others{
		margin:10px;
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

<div class="container">


<?php

if(isset($_POST["ADDCARD"])){
  if(isset($_SESSION["CARTS"]))
	{
		$pid_array=array_column($_SESSION["CARTS"],"pid");

		if(!in_array($_GET["id"],$pid_array))
	  {
      $index=count($_SESSION["CARTS"]);
	  	$item=array(
            'pid'  => $_GET["id"],
            'PNAME'=> $_POST["PNAME"],
            'PRATE'=> $_POST["PRATE"],
            'QTY'  => $_POST["QTY"],
            'PWEIGHT'  => $_POST["PWEIGHT"],
            );
	  	  $_SESSION["CARTS"] [$index]= $item;
		   echo "<script>alert('Product Addedd...');</script>";
		   header("Location:Addtocardfnvm.php");
		  	  }
	  else
	  {
	  	echo "<script>alert('Already Added');</script>";
	  	
	  }
		
		
	}

	else
	{
		   $item=array(
            'pid'  => $_GET['id'],
            'PNAME'=> $_POST['PNAME'],
            'PRATE'=> $_POST['PRATE'],
            'QTY'  => $_POST['QTY'],
            'PWEIGHT'  => $_POST["PWEIGHT"],
             );
		   $_SESSION["CARTS"] [0]= $item;
		   echo "<script>alert('Product Added...');</script>";
		   header("Location:Addtocardfnvm.php");
	}


}








if(isset($_GET["id"]))
{
	$sql="SELECT * FROM productsdata WHERE pid={$_GET["id"]}";
	$retval=mysqli_query($con,$sql);
	if($retval->num_rows>0)
	{
    $row=$retval->fetch_assoc();
    //echo "<pre>";
    //print_r($row);
   // echo "</pre>";
    echo "
          <form action='{$SERVER["REQUEST_URI"]}' method='post'>
          <img src='{$row["pimage"]}' class='imageclass'>
          <div class='others'>
          <p> <strong>{$row["pname"]}</strong></p>
          <p id='slashed'><del>₹{$row["prate"]}</del></p>
          <p id='rate'>₹ {$row["poffamount"]}</p>
          <input type='number' name='QTY' placeholder='Qty' required=''><br>
          <p id='para'> {$row["ppara"]}</P>
        
          <input type='hidden' value='{$row[pname]}' name='PNAME'><br>
          <input type='hidden' value='{$row[poffamount]}' name='PRATE'>
          <br><br>
          <input type='hidden' value='{$row[pweight]}' name='PWEIGHT'>
          <br><br>
          <input type='submit' name='ADDCARD' value='Add to Card'>
          </div>
          </form>
          ";


    }
	else{
		header("locataion:products.php");
	}

}
else
{
	header("locataion:products.php");
}

?>
</div>

<div class="footer">
	<p id="foot">© 2019-2022, fresco-nat-veg-mart, Techie Blinders project.
</div>

</body>
</html>