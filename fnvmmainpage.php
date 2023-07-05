<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="fnvmmainpage.css">
	<title>Main Page</title>

</head>
<style>
	*{
	margin: 0;
	padding: 0;
}
body{
overflow: hidden;
}
.MAINPAGE{
   background-color:#eeffe2;

   overflow-x: hidden;
 }
 .m1{
 	position: relative;
   overflow: hidden;
   width: 100%;
   height: 100vh;
 }
.head{
	width: 100%;
	display: flex;
	flex-wrap: wrap;
	justify-content: space-between;
		background-color: gray;
		overflow: hidden;
		position:relative;
		top: 0;
       background: transparent;
		z-index: 3;
		overflow: hidden;
}
.head .fnvmlogo{
	width: 145px;
	margin: 23px 0 0 40px;
}
.head .aboutas{
	transform: translateX(570px);
		margin: 5px 50px 0 0;
	height: 20px;
	border-radius: 10px;
	padding: 10px 20px 10px 20px;
	border: 1px outset black;
	color: black;
    text-align: center;
    align-self: center;
}
.head .aboutas a{
	text-decoration: none;
	color: black;
}
.head .signin{
	margin: 5px 30px 0 0;
	height: 20px;
	font-size: 18px;
	background-color:darkgreen;
	border-radius: 10px;
	padding: 10px 20px 10px 20px;
	border: 1px outset greenyellow;
	color: white;
    text-align: center;
    align-self: center;
}
.signin a{
	text-decoration: none;
	color: white;
}
.center{
		display: flex;
	flex-direction: column;
	flex-wrap: wrap;
	justify-content: center;
	align-content: center;

	position: relative;
   z-index: 3;
   margin: 130px 32% 0 32%;
   font-size: 70px;
   text-shadow: -2 2px 10px black;
  
}
.center h1{
    text-align: center;
	color: #edffef;
	font-family: Algerian;
	text-shadow: -4px 4px 10px #002b05;
}
.center #sub{
	font-size: 17px;
	color:#edffef;
	text-shadow: 4px 4px 10px green;
}
.main{
	position: absolute;
	top: 0;
	width: 100%;
	min-height: 100vh;
	display: flex;
	justify-content: center;
	align-content: center;
	background-color: gray;
	overflow: hidden;
}
video{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  overflow: hidden;

}
.maskimg{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100vh;
  z-index: 2;
  user-select: none;
  mix-blend-mode: screen;
  overflow: hidden;
}
.body{
	border-radius: 10px;
	margin: 30px 10px 0 10px;
	background-color:#eeffe2;
	display: flex;
	flex-wrap: wrap;
	justify-content: space-around;
}
.body #bodyimg{
    width: 350px;
    height: 200px;
    margin: 20px 0 20px 0;
    border-radius: 20px;
}
.body #bodyimg:hover{
	transform: scale(1.1);
	transition-duration: 0.5s;
}




.about-product{
	border-radius: 10px;
	margin: 30px 30px 0 30px;
	background-color:white;
}
.about-product #aboutproducttitle{
	background-color: #074d00;
	color: white;
	border-top-right-radius: 20px;
	border-bottom-right-radius:20px;
	padding: 5px;
	width: 100px;
	font-size: 1.1em;
}
.about-product #aboutproductpara{
  padding: 10px;
}
.about-product .qualitysymbols{
	 display: flex;
	 flex-wrap: wrap;
	 flex-direction: row;
	 justify-content: space-around;
	 background-color: #f5faf6;
	 padding: 30px 0 30px 0;
}

.about-product .qualitysymbols img{
	 width: 100px;
	 height: 100px;
	 background-color: white;
	 border-radius: 50%;
    box-shadow: 1px 1px 10px black;
}
.about-product .qualitysymbols .round1 img:hover{
	cursor: pointer;
   transition: all 2s linear;
   transform: rotateY(360deg);
}
.about-product .qualitysymbols .round1 span{
	font-family: Trajan Pro;
	color: black;
	position: relative;
	right: 10px;
}

.about-product .certificates img{
   width: 357px;
   height: 230px;
   margin-bottom: 40px;
   box-shadow: 1px 1px 10px black;
}
.about-product .certificates img:hover{
	transform: translateY(-25px);
	transform: scale(1.1);
	transition-duration: 0.5s;
}
.about-product .certificates{
	display: flex;
	flex-wrap: wrap;
	justify-content: space-around;
	margin-bottom: 17px;
}



.footer{
	background-color: green;
}
.footer #foot{
	text-align: center;
	color: white;
}




@media only screen and (max-width: 980px){
  

   .head{
  
   }
	 .head .fnvmlogo{
   width: 270px;      
   mar
	 }
	 .head .signin{
	 	width: 100px;
	 	height: 50px;
	 	font-size: 33px;
	 	padding: 20px 30px 15px 30px;
	 }
	 .head .aboutas{
	 	margin: 0 0 0 -850px;
	 		 	width: 120px;
	 	height: 50px;
	 	display:none;
	 	font-size: 27px;
	 	padding: 15px 10px  0 10px;

	 
	 }
	 .center{
	 	margin-top: 550px;
	 }
	 .center h1{
	 	font-size: 200px;
	 }
	 .center #sub{
	 	font-size: 30px;
	 }
	 .body{
	 	margin: 30px 5px 0 5px;
	 }
	 .body #bodyimg{
	 	width: 900px;
	 	height: 500px;
	 }
  .about-product #aboutproducttitle{
  	width: 600px;
  	height: 80px;
  		border-top-right-radius: 80px;
	border-bottom-right-radius:80px;
	border-top-left-radius: 20px;
  	font-size: 50px;
  	padding: 10px 0 0 10px;
  }
  .about-product #aboutproductpara{
  	font-size: 70px;
  }
.about-product .qualitysymbols img{
	width: 300px;
	height: 300px;
}
.about-product .qualitysymbols .round1 span{
	font-size: 35px;
	margin: 0 0 70px 90px;
	
}

.about-product #aboutproductpara1{
	font-size: 70px;
	margin: 10px;
}
.footer #foot{
	font-size: 12px;
	padding: 7px;
}
.about-product .certificates img{
  width: 800px;
  height: 500px;
}
}


</style>
<body>
<div class="MAINPAGE">


<div class="m1">
<div class="head">
	<img src="../fnvm.png" class="fnvmlogo">
	<p class="aboutas"><a href="adminlogin.php">Admin</a></p>
	<p class="signin"><a href="signinfnvm.php">Sign-In</a></p>
</div>
<div class="center">
	<h1>Fresco</h1>
	<p id="sub">Our Products are High quality with perfect rated ,organic & Healthy to live long and strong...</p> 
</div>
<div class="main">
<video autoplay loop muted>
<source src="../videos/vegbg.mp4" type="video/mp4">
</video>
<img src="../mask.jpg" alt="NO_IMAGE" class="maskimg">
</div>
</div>

<div class="body">
	<img src="../f1.jpg" id="bodyimg">
	<img src="../f2.jpg" id="bodyimg">
	<img src="../f3.jpg" id="bodyimg">
	<img src="../f4.jpg" id="bodyimg">
</div>






<div class="about-product">
	<p id="aboutproducttitle">ABOUT-US</p>
	<p id="aboutproductpara">It facilitates direct contact between farmers and the public. It provides fresh vegetables and fruits at a reasonable price daily without any interference from the middlemen. Prices are listed down in the blackboards in shop...</p>
	<div class="qualitysymbols">
		<div class="round1">
      <img src="../high-quality.png"  style="background-color: yellow;"><br><br><span>High Quality</span></div>
      <div class="round1">
      <img src="../medal.png" style="background-color:red;"><br><br><span>1st, Greaded</span></div>
      <div class="round1">
      <img src="../iso-symbol.png" style="background-color: green;"><br><br><span>ISO Approved</span></div>
      <div class="round1">
      <img src="../nature.png" style="background-color: blue;"><br><br><span>100% Nature</span></div>
      <div class="round1">
      <img src="../shield.png" class="round1" style="background-color: black;"><br><br><span>Safe & Sequre</span></div>
      <p id="aboutproductpara">Vegetables are parts of plants that are consumed by humans or other animals as food. The original meaning is still commonly used and is applied to plants collectively to refer to all edible plant matter, including the flowers, fruits, stems, leaves, roots, and seeds. An alternate definition of the term is applied somewhat arbitrarily, often by culinary and cultural tradition. It may exclude foods derived from some plants that are fruits, flowers, nuts, and cereal grains, but include savoury fruits such as tomatoes and courgettes, flowers such as broccoli, and seeds such as pulses.<br><br><b>"Veggie" and "Veg" redirect here. For the diet that abstains from animal products and consists mostly of plants, see Veganism. For a vegetarian diet, see Vegetarianism. For other uses of "vegetable", see Vegetable (disambiguation). For other uses of "veggie", see Veggie (disambiguation). For other uses of "veg", see VEG.</b><br><br>Originally, vegetables were collected from the wild by hunter-gatherers and entered cultivation in several parts of the world, probably during the period 10,000 BC to 7,000 BC, when a new agricultural way of life  with vast acreages of single-product crops. Depending on the type of vegetable concerned, harvesting the crop is followed by grading, storing, processing, and marketing.<br>
Vegetables can be eaten either raw or cooked and play an important role in human nutrition, being mostly low in fat and carbohydrates,  plenty of fruit and vegetables, five or more portions a day often being recommended.<br><br>The word vegetable was first recorded in English in the early 15th century. It comes from Old French,[1] and was originally applied to all plants; the word is still used in this sense in biological contexts.[2] It derives from Medieval Latin vegetabilis "growing, flourishing" (i.e. of a plant), a semantic change from a Late Latin meaning "to be enlivening, quickening".
<p id="aboutproductpara1">The meaning of "vegetable" as a "plant grown for food" was not established until the 18th century.[3] In 1767, the word was specifically used to mean a "plant cultivated for food, an edible herb or root". The year 1955 saw the first use of the shortened, slang term "veggie".

As an adjective, edible or not—as in vegetable matter, vegetable kingdom, vegetable origin, etc</p></p>
	</div>
	<div class="certificates">
		<img src="../cer1.png" alt="NO_IMAGE" class="cer1">
		<img src="../cer2.jpg" alt="NO_IMAGE" class="cer2">
		<img src="../cer4.jfif" alt="NO_IMAGE" class="cer3">
</div>

</div>


<div class="footer">
	<p id="foot">© 2019-2022, fresco-nat-veg-mart, Techie Blinders project.
</div>


</div>
</body>
</html>