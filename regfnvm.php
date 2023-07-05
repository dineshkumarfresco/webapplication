<!DOCTYPE html>
<html>
<head>

	<title>Register fresco</title>

</head>

<style>
	*{
		padding: 0;
		margin: 0;
		box-sizing: border-box;
		font-family:Yu Gothic UI Light;
        background-color: #eeffe2;
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
   	text-align: center;
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
          font-size: 20px;
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
    
   }
   #b2{
    	background-color: darkgray;
    	border-radius: 5px;
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
   	font-size: 11px;
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
    font-size: 80px;
    padding-bottom: 50px;
 }
  input{
     width: 800px;
     height: 70px;
     padding: 3px;
     background-color: white;
   }
 label{
    font-size:50px;
 }
#b1{
    margin-top: 20px;
    width: 800px;
    height: 70px;
    font-size: 50px;
    padding: 10px;
}
   .loginpagefooter{
    width: 700px;
    margin: 150px 0 0 40px;
    padding-left: 40px;
    font-size: 12px;
    text-align: center;
   }
   .loginpagefooter span{
    color:green;
    font-weight: bold;
    padding: 30px;
    font-size: 30px;
    text-align: center;

   }
   .loginpagefooter p{
    font-weight: bold;
    font-size: 25px;
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

<p id="x"><a href="signinfnvm.php"><</a></p>


		<img src="../fnvm.png" alt="NO_IMAGE" class="mwbbimage">

		<div class="logincontent">
		<h1>Create Account</h1><br>
        <form method="POST">
		<label>FULLNAME:</label><br>
		<input type="text" name="FULLNAME"><br><br>
		<label>EMAILID:</label><br>
		<input type="email" name="EMAILID"><br><br>
        <label>MOBILE NUMBER:</label><br>
        <input type="number" name="MOBILENUMBER"><br><br>
        <label>PASSWORD:</label><br>
        <input type="password" name="PASSWORD"><br><br>
		<button name="register" id="b1">CREATE ACCOUNT</button><br><br>
        </form>
		</div>

        <div class="loginpagefooter"><br><br>
        <span>Conditions of Use</span><span>Privacy Notice</span><span>Help</span><br><br>
        <p>© 2019-2022, fresco-nat-veg-mart, Techie Blinders Project.</p>
            </div>




	</div>
</body>
</html>
<?php


if(isset($_POST['register']))
{

    $con= mysqli_connect('localhost','root','root');
    mysqli_select_db($con,'fnvm');

    $FULLNAME=$_POST['FULLNAME'];
    $EMAILID=$_POST['EMAILID'];
    $MOBILENUMBER=$_POST['MOBILENUMBER'];
    $PASSWORD=$_POST['PASSWORD'];



    $sql="INSERT INTO logindata(FULLNAME,EMAILID,MOBILENUMBER,PASSWORD) VALUES ('$FULLNAME','$EMAILID','$MOBILENUMBER','$PASSWORD')";
    
    $retval=mysqli_query($con,$sql);

    echo "<script>confirm('you have successfully register')</script>";
    echo "<script>confirm('userid = your Emailid & password = u given password')</script>";
    header("Location:signinfnvm.php");
    
    mysqli_close($con);
}

?>