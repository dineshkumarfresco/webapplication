<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>fresco</title>
</head>
<style>
	*{
	 padding: 0;
	 margin: 0;
	 box-sizing: border-box;
	}
	html{
		scroll-behavior: smooth;
	}
	.all{

	}
	.head{
		display: flex;
		flex-wrap: wrap;
		justify-content: space-between;
        background-color: #e3e3e3;
        box-shadow: -1px 1px 10px black;
        padding: 10px;
	}
	.head0{
       display: flex;
	   flex-wrap: wrap;
	   justify-content: space-around;
	   margin: 0 0 0 80px;
	}
	.head0 .logo{
       width: 100px;
       height: 100px;

	}
	.head0 #title{
       align-self: center;
       margin: 0 0 0 10px;
       font-family: Monotype Corsiva;
       font-weight: bold;
       font-size: 30px;
	}
	.head1{
		display: flex;
		flex-wrap: wrap;
		flex-direction: row;
		justify-content: space-around;
		margin: 0 80px 0 0;
	}
	.user{
		display: flex;
		flex-wrap: wrap;
		flex-direction: row;
		height: 30px;
		align-self: flex-end;
		margin: 0 30px 7px 0;
	}
	.user #userimg{
		width: 30px;
		height: 30px;
	}
	.user #username{
		padding: 5px;
	}
	.language{
		display: flex;
		flex-wrap: wrap;
		flex-direction: column;
		justify-content: space-around;
        width: 80px;
        font-family: Footlight MT Light;
	}
	.language .lang {
		
		color: white;
		text-align: center;
		align-self: flex-start;
	}
	.language .lang ul{
		
     
	}
	.language .lang ul:hover{
		position: fixed;
	}
	.language .lang ul li{
		display: block;
		padding: 3px;
       
	}
	.language .lang ul li a{ 
	    text-decoration: none;
	    color: white;
	    background-color: gray;
	    padding: 5px;
	    border-radius: 5px;

	 }
	 .language .lang ul li ul{
       box-shadow: 1px 1px 10px grey; 
       padding-top: 5px;
       text-align: center;
       transition: all 2s linear;
      
	  }
	 .language .lang ul li ul li{
        display: none;
        background-color: white;
        transition: all 2s linear;
	 }
	 .language .lang ul li ul li a{
	 	background-color: white;
	 	color: green;
	 } 
	 .language .lang ul li:hover ul li{
	 	display: block;
	 } 
	 .language .signout{
       text-align: center;
       
       color: black;
       margin: 10px 3px 0 3px;
       
	 }

	 .language .signout a{
	 	text-decoration: none;
	 	color: black;
	 	outline: 1px solid gray;
	 	padding: 5px 10px 5px 10px;
	 	border-radius: 10px;
	 }
	 .language .signout a:hover{
       background-color: red;
	 	color: white;
	 	transition: all 0.3s linear;
	 }

.neg{
    display:flex;
    flex-wrap:wrap;
    justify-content:space-around;
    background-color: white;
    box-shadow: 3px -1px 10px 2px darkgray;
    font-family: Footlight MT Light;

}
.nav{

}
.nav ul{
    display:flex;
    flex-wrap:wrap;
    justify-content:space-around;
    font-family: Footlight MT Light;
} 
.nav ul li{
   padding:9px 40px 7px 40px;
   display: block;

}
.nav ul li:hover{
	background-color:#1ab561;
	color: white;
	border-radius: 7px;
	transition: all 1s linear;
}
.nav ul li a{
    text-decoration:none;
    color: black;
}
.nav ul li a:hover{
	color: white;
}
.cartimg{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
 
}
.cartimg .cartlogo{
	width: 30px;
}
.cartimg #cartname{
	padding: 7px;
}
.cartimg #cartname:hover{
	color: green;
}
a{
 text-decoration: none;
 color: black;  
}
.orderl{
	display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
}
.orderl .orderlogo{
	width: 30px;
}
.orderl #ordername{
	padding: 7px;
}
.orderl #ordername:hover{
color: green;
}
.slides{
	margin: 10px;
	height: 57vh;
	background-color: black;
   background-image: url(../bb1.jpg);
  background-repeat: none;
  background-size:cover;
  background-position:cover;
  animation-name: sslide;
  animation-duration: 20s;
  animation-delay: 3s;
  animation-timing-function:ease-in-out;
  animation-iteration-count: infinite;
  animation-play-state: running;

}
@keyframes sslide{
	0%{
		background-image: url(../bb2.jpg);
		background-size: cover;
	}
	25%{
		background-image: url(../bb3.png);
		background-size: cover;
		}
	50%{
		background-image: url(../banner2.png);
		background-size: cover;
	}
	75%{
		background-image: url(../bb4.jpg);
		background-size: cover;
	}
	100%{
		background-image: url(../bb5.jpg);
		background-size: cover;
	}

}
.slidepara{
	display: flex;
	flex-wrap: wrap;
	flex-direction: column;
	justify-content: center;
	align-content: center;
    text-align: center;
    font-size: 20px;
}
.slidepara #sp1{
	  margin-top: 100px;
      font-family: Monotype Corsiva;
       font-size: 50px;
}
.slidepara #sp1 span{
	color: green;
}
.slidepara #sp2{
   font-size: 40px;
   text-shadow: -3px 3px 30px black;
   color: white;
}
.slidepara #sp2 span{
   color: green;
   font-size: 45px;

   font-family: Monotype Corsiva;
}
.slidepara #sp3{
	font-size: 45px;
	background-color: green;
	color: white;
	margin: 10px 200px 0 200px;
	padding: 5px;
	border: 3px outset darkgreen;
	border-top-right-radius: 75px;
	border-bottom-left-radius:75px;

}
.slidepara #sp3 a{
	text-decoration: none;
	color: white;
}
.slidepara #sp3:hover{
	cursor: pointer;
	border: 3 inset darkgreen;
	background-color: black;
	transition: all 0.3s linear;
}
.offers{
   display: flex;
   flex-wrap: wrap;
   justify-content: space-around;
   margin: 30px 0 25px 0;

}
.offers #off{
	width: 400px;
	height: 200px;
	margin: 30px;
	box-shadow: -1px 1px 50px 10px darkgray;
	border-radius: 10px;
}
.offers #off:hover{
	transform: scale(1.1);
    box-shadow: -1px 1px 10px  green;
    transition: all 0.5s linear;
}
.aboutas{
  margin: 20px;
  font-family: Footlight MT Light;
}
#aboutastitle{
  color: black;
  font-size: 40px;
  margin-bottom: 20px;
  padding:40px;
}
#aboutastitle span{
	color: green;
}
.aboutaspip{
	display: flex;
	flex-wrap: wrap;
	justify-content: space-around;
}
.aboutaspip #aboutaspara1 {
   
   width: 500px;
   word-spacing: 2px;
   align-self: flex-start;
   font-size: 17px;
  font-weight: 1000;
   
}
.aboutaspip img{
	width: 100px;
	height: 600px;
    animation-name: image;
    animation-duration: 2s;
    animation-iteration-count: infinite;
    animation-direction:alternate;
    animation-play-state: running;
}
@keyframes image{
	0%{
		transform: translateY(-70px);
	}
	100%{
		transform: translateY(40px);
	}
}
.aboutaspip img:hover{
     
}
.aboutaspip #aboutaspara2 {
   width: 500px;
   word-spacing: 2px;
   align-self: flex-end;
   font-size: 17px;
   font-weight: 1000;
  
}
.aboutaspip #aboutaspara2:hover{
	
}
.developers{
   display: flex;
   flex-wrap: wrap;
   justify-content: space-around;
   margin: 90px 30px 90px 30px;

}
.d1{
   border-radius: 20px;
   text-align: center;
   box-shadow: -1px 1px 10px 1px darkgray; 
}
.d1:hover{
   transform: scale(1.1);
}

.d1 img{
   width: 200px;
   height: 200px;
   border-radius: 50%;
   margin: 10px 0 10px 0;
   filter: grayscale(100%);

}
.d1 #dn{
  color: gold;
  margin: 10px 0 10px 0;
  font-family: Algerian;
}
.d1 #dt{
  color:white;
  background-color:black;
  font-size:20px ;
  padding: 5px;
  border-radius: 10px;
  margin: 10px 40px 10px 40px;
  font-family: Berlin Sans FB Demir;
  font-weight: bold;
}
.d1 #dp{
   width: 250px;
   margin: 10px 0 10px 10px;
   font-family:Matura MT Script Capitals;
   text-align: center;
}
.con{
	margin: 50px;
	font-family: Footlight MT Light;
}
.con #contacttitle{
	color: black;
	font-size: 40px;
	margin-bottom: 30px;
	padding: 30px;
}
.con #contacttitle span{
	color: green;
}
.contact{
  display: flex;
  flex-wrap: wrap;
  justify-content:space-around;
  padding: 50px;
  
  border-radius: 30px;
  box-shadow: -1px 1px 10px 1px darkgray;
}
form #contactt{
  color: black;
  font-family: Footlight MT Light;
  font-weight: bold;
  font-size: 30px;
  margin-bottom: 30px;
}
.contact form{
   padding: 10px;
   margin-right: 30px;
}
.contact form input{
	width: 350px;
	height: 30px;
	border-radius: 5px;
    
}
.contact form label{
	color: green;
	font-size: 20px;
}
.contact form textarea{
	width: 350px;
	height: 150px;
	border-radius: 10px;
}
.contact form input[type="submit"]{
	width: 130px;
	height: 50px;
	background-color: green;
    color: white;

}
.map{
  padding: 10px;
}
.map #mapt{
	font-weight: bold;
  font-size: 30px;
  margin-bottom: 30px;
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
#x{
	display: none;
}
#is{
	display: none;
}




@media only screen and (max-width: 980px){
	body{
overflow-x: hidden;
	}
	.all{
overflow-x: hidden;
	}
	.head{
		width: 100%;
       display: flex;
       flex-wrap: wrap;
       flex-direction: row;
       justify-content: space-between;


	}
	.head0{
        margin:0 0 0 0;
	}
    .head0 .logo{
            width: 80px;
            height: 80px;
	}
	.head0 #title{
       font-size: 20px;
	}
	.head1{
		width: 200px;
       flex-direction: column-reverse;
       flex-wrap: wrap;
       margin: -90px 0 0 230px;

	}
	.head1 .user{
      width: 130px;
      padding-top: 10px;
	}
	.head1 .user #userimg{
		width: 30px;
		height: 30px;
}
	.head1 .user #username{
		font-size: 10px;
		align-self: center;
	}
	.head .language{
		align-self: flex-end;
		margin:10px 10px 0 0;
	}
	.language .lang{

	}
	.neg{

	}
    .neg #x{
    	display: block;
    	font-size: 20px;
    	margin: 10px 350px 0 0;
    }
    .neg #is{
       transform: translate(-175px,5px);
       font-size: 30px;
       display: none;
    }
    .neg .nav{
    	margin: -30px 0 0 0;
    	display:none;  
    } 
    .neg .orderl{
    	margin: -25px 0 0 0;
    }
    .neg .cartimg{
         margin: -25px 0 0 70px;
    }
    .slides{
    	height: 80vh;
    }
    .slides .slidepara{

    }
    .slides .slidepara #sp1{
    	margin-top: 197px;
    }
    .slides .slidepara #sp2{
    	font-size: 30px;
    }
    .slides .slidepara #sp3{
    	margin-right: 20%;
    	margin-left: 20%;
    }
    .offers{
      
    }
    .offers #off{
        width: 370px;
    }
    .aboutas{

    }
    #aboutastitle{
  font-size: 45px;
  margin-bottom: 20px;
  padding:10px;
}
.aboutas #aboutaspara1{
	margin-bottom: 70px;
}
.aboutas #aboutaspara2{
	margin-top: 70px;
}

.developers{
	margin: 50px 0 50px 0;
}
.developers .d1{
	margin: 50px 0 50px 0;
	transform: scale(1.1);
}
.con{

}
.con #contacttitle{
text-align: center;
}
.contact{
padding-right: 7px;
box-shadow: none;
}
.contact form{
	
	border-radius: 20px;
}
.map{
width: 350px;
margin: 130px 110px 20px 70px;
padding:0 0 0 0;
}
.map #mapt{

}
.map iframe{
   width: 350px;
}
}







</style>
<body>
<div class="all">



<div class="head" id='home'>
	<div class="head0">
	<img src="../fnvm.png" alt="NO_IMAGE" class="logo">
	<p id="title">Fresco Nat-Veg-Mart</p>
    </div>
	<div class="head1">
	<div class="user">
		<img src="../user.png" id="userimg">
		<p id="username"><?php echo " ".$_SESSION['USERNAME'];?></p> 
	</div>
    <div class="language">
       <div class="lang">
       	<ul>
            <li><a href="#" id="trlanguage">Language</a>
            <ul>
			<li><a href="enterpage.php">English</a></li>
			<li><a href="tamilenterpage.php"  id="trtamil">தமிழ்</a></li>
		    </ul>
			</li>
        <ul>
       </div>
       <p class="signout"><a href="fnvmmainpage.php">Signout</a></p>
    </div>
    </div>
</div>

<div class ="neg">
	<p id="x" onclick="X()">=</p>
	<p id="is" onclick="isq()">X</p>
        <div class ="nav" id="nav">
		<ul>
			<li><a href="#home" id="trhome">HOME</a></li>
			<li><a href="products.php" id="trproducts">PRODUCTS</a></li>
			<li><a href="#aboutas" id="traboutus">ABOUT-US</a></li>
			<li><a href="#contact" id="trcontactus">CONTACT-US</a></li>
		</ul>
        </div>

 
       <a href="Addtocardfnvm.php"> <div class="cartimg" id="ci">
        	<img src="../cart.png" class="cartlogo"><p id="cartname">My cart</p>
        </div></a>
        <a href="order.php"><div class="orderl" id="ol">
        	<img src="../order.png" class="orderlogo"><p id="ordername">My order</p>
        </div></a>


</div>


<div class="slides">
	<div class="slidepara">
	<p id="sp1">F<span>resco</span> P<span>resents</span></p>
	<p id="sp2"><span>B</span>uy Fresco & <span>E</span>at Fresco  & <span>L</span>ive Fresco</p>
	<p id="sp3"><a href="products.php">Explore</a></p>
    </div>
</div>



<div class="offers">
	<img src="../f1.jpg" id="off">
	<img src="../banner2.png" id="off">
	<img src="../f2.jpg" id="off">
	<img src="../frescobb.jpg" id="off">
	<img src="../f3.jpg" id="off">
</div>




<div class="aboutas" id="aboutas">
	<p id="aboutastitle"><span>About</span>-us</p>
	<div class="aboutaspip">
	<p id="aboutaspara1">Vegetables are parts of plants that are consumed by humans or other animals as food. The original meaning is still commonly used and is applied to plants collectively to refer to all edible plant matter, including the flowers, fruits, stems, leaves, roots, and seeds. An alternate definition of the term is applied somewhat arbitrarily, often by culinary and cultural tradition. It may exclude foods derived from some plants that are fruits, flowers, nuts, and cereal grains, but includedefinition of the term is applied somewhat arbitrarily, often by culinary and cultural tradition. It may exclude foods derived from some plants that are fruits, flowers, nuts, and cereal grains, but include definition of the term is applied somewhat arbitrarily, often by culinary and cultural tradition. It may he early 15th century. It comes from Old French,[1] and was originally applied exclude foods derived from some plants that are fruits, flowers, nuts, and cereal grains, but inclued savoury fruits such as tomatoes in this sense in biological contexts.[2] It derives from Medieval Latin vegetabilis "growing, flourishing" (i.e. of a plant), a se and courgettes, flowers such as broccoli, and seeds such as pulses.</p>
	<img src="../knief.png">
	<p id="aboutaspara2">The word vegetable was first recorded in English in the early 15th century. It comes from Old French,[1] and was originally applied to all plants; the word is still used in this sense in biological contexts.[2] It derives from Medieval It may exclude foods derived from some plants that are fruits, nuts, and cereal grains, but includedefinition of the term is applied somewhat arbitrarily flowers, nuts, and cereal grains, but includedefinition of the term is applied somewhat arbitrarily, often by culinary and cultural tradition. It may exclude foods derived from some plants that are fruits, flowers, nuts, and cereal grains, but include definition of the term is applied somewhat arbitrarily, often by culinary and cultural tradition. It may exclude foods derived from some plants that are fruits, flowers, nuts, and cereal Latin vegetabilis "growing, flourishing" (i.e. of a plant), a semantic arbitrarily, often by culinary and cultural tradition change from a Late Latin meaning "to be enlivening, quickening"exclude foods derived from some plants that are fruits, flowers, nuts, and cereal grains, but include savoury fruits such as tomatoes and courgettes.</p> 
    </div>
</div>



<div class="developers">
	<div class="d1">
	<img src="../prathip.jpg">
	<p id="dn">Praithp</p>
	<p id="dt">Front End Developer</p>
	<p id="dp">Hi Iam the prathip Front-end-developer & Iam designed and developed the frontend of our website</p>
    </div>
    <div class="d1">
	<img src="../rambo.jpg">
	<p id="dn">Rambhupathi</p>
	<p id="dt">UI/UX Designer</p>
	<p id="dp">Hi Iam the Rambhupathi UI/UX Designer & Iam designed the front view of our website</p>
	</div>
	<div class="d1">
	<img src="../dinesh.jpg">
	<p id="dn">Dineshkumar</p>
	<p id="dt">Bask End Developer</p>
	<p id="dp">Hi Iam the Dineshkumar Back-end-developer & Iam developed the Backend of our website</p>
    </div>
</div>




<div class="con" id="contact">
  <p id='contacttitle'><span>Contact-</span>Us</p>
<div class="contact">
	<form>
		<p id="contactt">Feel free to ask anything</p>
		<label>Name</label><br>
		<input type="text" name="CNAME" placeholder="NAME"><br><br>
		<label>Email id</label><br>
		<input type="email" name="CEMAIL" placeholder="EMAIL"><br><br>
		<label>Mobile Number</label><br>
		<input type="number" name="CPHONE" placeholder="MOBILE NUMBER"><br><br>
		<label>Message</label><br>
		<textarea> </textarea><br><br>
		<input type="submit" name="SUBMIT">
	</form>
     <div class="map">
            <p id="mapt">Where you can find us</p>
            <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.0535907331787!2d80.17855427905849!3d13.032259317115871!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5266d11f9ca625%3A0xf77d1733be7b5b74!2sSRM%20Institute%20Of%20Science%20And%20Technology!5e0!3m2!1sen!2sin!4v1630049458298!5m2!1sen!2sin" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
     </div>
</div>
</div>








<div class="footer">
	<p id="foot">© 2019-2022, fresco-nat-veg-mart, Techie Blinders project.
</div>







</div>
</body>
<script>
function X(){
        document.getElementById('nav').style.display="block";
        document.getElementById('x').style.display="none";
        document.getElementById('is').style.display="block";
        document.getElementById('ci').style.display="none";
        document.getElementById('ol').style.display="none";
        }
function isq(){
	document.getElementById('cartname').style.transform="translate(25px,-33px)";
	document.getElementById('ordername').style.transform="translate(25px,-33px)";
	document.getElementById('x').style.marginbottom="none";
      document.getElementById('nav').style.display="none";
      document.getElementById('is').style.display="none";
      document.getElementById('x').style.display="block";
      document.getElementById('ci').style.display="block";
      document.getElementById('ol').style.display="block";
}	
</script>

</html>
