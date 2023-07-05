<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Fresco sign-in</title>


</head>
<style>
	*{
		padding: 0;
		margin: 0;
		box-sizing: border-box;
		font-family:Yu Gothic UI Light;
	}
   .container{
      display: flex;
      flex-direction: column;
      flex-wrap: wrap;
      justify-content: center;
      align-content: center;

   }
   img{
   	width: 150px;
   	margin:20px 0 20px 85px;
   }

   .logincontent{    
   box-shadow: -1px 1px 5px dimgray;
   padding: 15px;
   background-color: white;
   }

   .logincontent h1{
   	background-color: white;
    
   }
   input{
     width: 300px;
     padding: 3px;
     background-color: white;
     font-size:20px;
     font-weight:bold;
   }
   input:hover{
   	box-shadow: -1px 1px 5px green;
   	border: 1px solid green;
   }
   button{
   	background-color:green;
   	color: black;
    font-weight: bold;
    padding: 3px 7px 3px 7px;
    border-radius: 5px;
    width: 300px;
    font-family: Footlight MT Light;
   }
   button:hover{
   	color: white;
   }

   #b2para{
       padding-bottom: 7px;
       background-color: white;
    
   }
   #b2{
    	background-color: darkgray;
    	border-radius: 5px;
   }
   #b2 a{
	text-decoration: none;
	color: black;
	background-color: darkgray;
	
}   
   
   #b2 a:hover{
      color: white;
   }
   .loginpagefooter{
   	padding-left: 40px;
   	font-size: 12px;


   }
   .loginpagefooter span{
   	color:green;
   	font-weight: bold;
   	padding: 10px;
   }
   .loginpagefooter p{
   	font-size: 12px;
   	font-weight: bold;
   }
   label{
   	font-weight: bold;
   	font-family: Footlight MT Light;
   	background-color: white;
   }
   form{
   	background-color: white;
   }
#x{
    display: none;
}
#alert{
   background-color: white;
   color: red;
   font-size: 17px;
}



   @media only screen and (max-width: 980px){
    img{
        width: 400px;
        margin:20px 0 100px 210px;
    }
 form{
    width: 800px;
 }
 .logincontent{
    padding: 20px;
 }
 .logincontent h1{
    font-size: 120px;
    padding-bottom: 50px;
 }
  input{
     width: 800px;
     height: 70px;
     padding: 3px;
     background-color: white;
   }
 label{
    font-size:60px;
 }
 #b1{
    margin-top: 20px;
    width: 800px;
    height: 80px;
    font-size: 50px;
    padding: 10px;
}
#b2{
    margin-top: 20px;
    width: 800px;
    height: 80px;
    font-size: 50px;
    padding: 10px;
}
#b2 a{
	font-size: 43px;
}

#b2para{
	margin-top: 40px;
	font-size: 40px;
	width: 800px;
	text-align: center;
}
.loginpagefooter{
    margin: 150px 0 0 0;
    width: 800px;
    text-align: center;
  
   }
   .loginpagefooter span{
    color:green;
    font-size: 30px;
    padding:0 50px 0 50px;
    
   }
   .loginpagefooter p{
    font-weight: bold;
    font-size: 27px;
    text-align: center;
   }
   #x{
   	width: 50px;
   	text-shadow: -6px 6px 5px darkgreen;
    display: block;
    color: ghostwhite;
    font-size: 80px;
    transform: translate(-23px,40px);
}
#x a{
	text-decoration: none;
	color: white;
}

}




</style>

<body>
	<div class="container">
<p id="x"><a href="fnvmmainpage.php"><</a></p>

		<img src="../fnvm.png" alt="NO_IMAGE" class="mwbbimage">

		<div class="logincontent">
		<h1>Admin Signin</h1><br>

        <form method="POST">

		<label>User Id</label><br>
		<input type="text" name="userid"><br><br>
		<label>Password</label><br>
		<input type="password" name="password"><br><br><br>
		<button name="signin" id="b1">Sign-in</button><br><br>

        </form>
		
      <p id="alert"></p>
		</div>

        <div class="loginpagefooter"><br><br>
        <span>Conditions of Use</span><span>Privacy Notice</span><span>Help</span><br><br>
        <p>© 2019-2022, fresco-nat-veg-mart, Techie Blinders Project.</p>
            </div>
	</div>
</body>
</html>

<?php

if(isset($_POST['signin']))
{


    $con= mysqli_connect('localhost','root','root');
    mysqli_select_db($con,'fnvm');


    $USERID=$_POST['userid'];

    $PASSWORD=$_POST['password'];

    
    
    $sql="SELECT * FROM adminlogin WHERE userid='$USERID' && password='$PASSWORD'";
    
    $result=mysqli_query($con,$sql);

    $num=mysqli_num_rows($result);
    
if ($num == 0){
     echo "<script>document.getElementById('alert').innerHTML='You have not registred !!!';</script>";
     
}
else{
    $_SESSION['AUSERNAME']=$USERID;
    header("Location:dashboad.php");
}

    
}



?>