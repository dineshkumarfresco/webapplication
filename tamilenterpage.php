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
	    padding: 5px 30px 5px 30px;
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
       font-size: 40px;
}
.slidepara #sp1 span{
	color: green;
}
.slidepara #sp2{
   font-size: 30px;
   text-shadow: -3px 3px 30px black;
   color: white;
}
.slidepara #sp2 span{
   color: green;
   font-size: 35px;

   font-family: Monotype Corsiva;
}
.slidepara #sp3{
	font-size: 30px;
	background-color: green;
	color: white;
	margin: 10px 300px 0 300px;
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
.aboutas img{
	width:200px;
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
   font-size: 13px;
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
   font-size: 13px;
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
  font-weight:1000;
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
  font-size: 20px;
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
  font-size: 20px;
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
       font-size: 11px;
	}
	.head1{
		width: 200px;
       flex-direction: column-reverse;
       flex-wrap: wrap;
       margin: -90px 0 0 170px;

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
		margin:10px 20px 0 0;
		transform: scale(0.7);
	}
	.head .signout{
		transform: translateY(20px);
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
    	font-size:31px;
    }
    .slides .slidepara #sp2{
    	font-size: 20px;
    }
    .slides .slidepara #sp3{
    	margin-right: 20%;
    	margin-left: 20%;
    	font-size:20px;
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
	<p id="title">ஃப்ரெஸ்கோ நாட்-வெஜ்-மார்ட்</p>
    </div>
	<div class="head1">
	<div class="user">
		<img src="../user.png" id="userimg">
		<p id="username"><?php echo " ".$_SESSION['USERNAME'];?></p> 
	</div>
    <div class="language">
       <div class="lang">
       	<ul>
            <li><a href="#" id="trlanguage">மொழி</a>
            <ul>
			<li><a href="enterpage.php">English</a></li>
			<li><a href="tamilenterpage.php"  id="trtamil">தமிழ்</a></li>
		    </ul>
			</li>
        <ul>
       </div>
       <p class="signout"><a href="fnvmmainpage.php">வெளியேறு</a></p>
    </div>
    </div>
</div>

<div class ="neg">
	<p id="x" onclick="X()">=</p>
	<p id="is" onclick="isq()">X</p>
        <div class ="nav" id="nav">
		<ul>
			<li><a href="#home" id="trhome">முகப்பு</a></li>
			<li><a href="tproduct.php" id="trproducts">பொருட்கள்</a></li>
			<li><a href="#aboutas" id="traboutus">எங்களைப் பற்றி</a></li>
			<li><a href="#contact" id="trcontactus">தொடர்புக்கு</a></li>
		</ul>
        </div>

 
       <a href="Addtocardfnvm.php"> <div class="cartimg" id="ci">
        	<img src="../cart.png" class="cartlogo"><p id="cartname">கார்ட்</p>
        </div></a>
        <a href="order.php"><div class="orderl" id="ol">
        	<img src="../order.png" class="orderlogo"><p id="ordername">ஆர்டர்கள்</p>
        </div></a>


</div>


<div class="slides">
	<div class="slidepara">
	<p id="sp1">ஃ<span>ப்ரெஸ்கோ</span> ப<span>ரிசுகள்</span></p>
	<p id="sp2"><span>வா</span>ங்குக புதுசா & <span>சா</span>ப்பிடுங்க புதுசா & <span>வா</span>ழ்க புதுசா</p>
	<p id="sp3"><a href="tproduct.php">ஆராயுங்கள்</a></p>
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
	<p id="aboutastitle"><span>எங்களைப்</span>-பற்றி</p>
	<div class="aboutaspip">
	<p id="aboutaspara1">காய்கறிகள் என்பது மனிதர்கள் அல்லது பிற விலங்குகள் உணவாக உட்கொள்ளும் தாவரங்களின் பாகங்கள். அசல் பொருள் இன்னும் பொதுவாகப் பயன்படுத்தப்படுகிறது மற்றும் பூக்கள், பழங்கள், தண்டுகள், இலைகள், வேர்கள் மற்றும் விதைகள் உட்பட அனைத்து உண்ணக்கூடிய தாவரப் பொருட்களையும் குறிக்க தாவரங்களுக்கு கூட்டாகப் பயன்படுத்தப்படுகிறது. இந்த வார்த்தையின் மாற்று வரையறை ஓரளவு தன்னிச்சையாக பயன்படுத்தப்படுகிறது, பெரும்பாலும் சமையல் மற்றும் கலாச்சார பாரம்பரியம். பழங்கள், பூக்கள், கொட்டைகள் மற்றும் தானிய தானியங்கள் போன்ற சில தாவரங்களிலிருந்து பெறப்பட்ட உணவுகளை இது விலக்கலாம், ஆனால் இந்த வார்த்தையின் வரையறை ஓரளவு தன்னிச்சையாக பயன்படுத்தப்படுகிறது, பெரும்பாலும் சமையல் மற்றும் கலாச்சார பாரம்பரியத்தால். பழங்கள், பூக்கள், கொட்டைகள் மற்றும் தானிய தானியங்கள் போன்ற சில தாவரங்களிலிருந்து பெறப்பட்ட உணவுகளை இது விலக்கலாம், ஆனால் இந்த வார்த்தையின் வரையறை ஓரளவு தன்னிச்சையாக பயன்படுத்தப்படுகிறது, பெரும்பாலும் சமையல் மற்றும் கலாச்சார பாரம்பரியத்தால். அவர் 15 ஆம் நூற்றாண்டின் தொடக்கத்தில் இருக்கலாம். பழங்கள், பூக்கள், கொட்டைகள் மற்றும் தானிய தானியங்கள் போன்ற சில தாவரங்களில் இருந்து பெறப்பட்ட உணவுகளைத் தவிர்த்து, முதலில் பயன்படுத்தப்பட்டது, ஆனால் உயிரியல் சூழலில் தக்காளி போன்ற சுவையான பழங்களை உள்ளடக்கியது.[2] இது இடைக்கால லத்தீன் வெஜிடாபிலிஸ் "வளரும், செழித்து" (அதாவது ஒரு செடி), ஒரு சே மற்றும் கோவைக்காய், ப்ரோக்கோலி போன்ற பூக்கள் மற்றும் பருப்பு வகைகள் போன்ற விதைகளிலிருந்து பெறப்பட்டது.</p>
	<img src="../carteanim.png">
	<p id="aboutaspara2">காய்கறி என்ற சொல் முதன்முதலில் 15 ஆம் நூற்றாண்டின் தொடக்கத்தில் ஆங்கிலத்தில் பதிவு செய்யப்பட்டது. இது பழைய பிரெஞ்சில் இருந்து வருகிறது,[1] மற்றும் முதலில் அனைத்து தாவரங்களுக்கும் பயன்படுத்தப்பட்டது; உயிரியல் சூழல்களில் இந்த வார்த்தை இன்னும் இந்த அர்த்தத்தில் பயன்படுத்தப்படுகிறது.[2] இது இடைக்காலத்திலிருந்து பெறப்பட்டது, இது பழங்கள், கொட்டைகள் மற்றும் தானிய தானியங்கள் போன்ற சில தாவரங்களிலிருந்து பெறப்பட்ட உணவுகளை விலக்கலாம், ஆனால் இந்த வார்த்தையின் வரையறை ஓரளவு தன்னிச்சையாக பூக்கள், கொட்டைகள் மற்றும் தானிய தானியங்கள் பயன்படுத்தப்படுகிறது, ஆனால் இந்த வார்த்தையின் வரையறை ஓரளவு தன்னிச்சையாக பயன்படுத்தப்படுகிறது. சமையல் மற்றும் கலாச்சார பாரம்பரியம் மூலம். பழங்கள், பூக்கள், கொட்டைகள் மற்றும் தானிய தானியங்கள் போன்ற சில தாவரங்களிலிருந்து பெறப்பட்ட உணவுகளை இது விலக்கலாம், ஆனால் இந்த வார்த்தையின் வரையறை ஓரளவு தன்னிச்சையாக பயன்படுத்தப்படுகிறது, பெரும்பாலும் சமையல் மற்றும் கலாச்சார பாரம்பரியத்தால். இது பழங்கள், பூக்கள், கொட்டைகள் மற்றும் தானிய லத்தீன் வெஜிடாபிலிஸ் "வளரும், செழித்து" (அதாவது ஒரு தாவரம்), ஒரு சொற்பொருள் தன்னிச்சையாக சில தாவரங்களிலிருந்து பெறப்பட்ட உணவுகளை விலக்கலாம், பெரும்பாலும் சமையல் மற்றும் கலாச்சார பாரம்பரியத்தால் லேட் லத்தீன் என்பதிலிருந்து " புத்துணர்ச்சியூட்டவும், துரிதப்படுத்தவும்"பழங்கள், பூக்கள், கொட்டைகள் மற்றும் தானிய தானியங்கள் போன்ற சில தாவரங்களில் இருந்து பெறப்பட்ட உணவுகளை தவிர்த்து, ஆனால் தக்காளி மற்றும் கோவைக்காய் போன்ற சுவையான பழங்கள் அடங்கும்.</p> 
    </div>
</div>



<div class="developers">
	<div class="d1">
	<img src="../prathip.jpg">
	<p id="dn">பிரதீப்</p>
	<p id="dt">Front End Developer</p>
	<p id="dp">வணக்கம் நான் பிரதீப் Front-end-developer நான் இந்த வலைத்தளத்தின் முன் பார்வையை உருவாக்கினேன்.</p>
    </div>
    <div class="d1">
	<img src="../rambo.jpg">
	<p id="dn">ராம்பூபதி</p>
	<p id="dt">UI/UX Designer</p>
	<p id="dp">வணக்கம் நான் ராம்பூபதி UI/UX Designer நான் இந்த வலைத்தளத்தின் முன் காட்சியை வடிவமைத்தேன்.</p>
	</div>
	<div class="d1">
	<img src="../dinesh.jpg">
	<p id="dn">தினெஷ்குமார்</p>
	<p id="dt">Bask End Developer</p>
	<p id="dp">வணக்கம் நான் தினெஷ்குமார் Front-end-developer நான் இந்த வலைத்தளத்தின் பின்தளத்தை உருவாக்கினேன்.</p>
    </div>
</div>




<div class="con" id="contact">
  <p id='contacttitle'><span>தொடர்பு</span>-க்கு</p>
<div class="contact">
	<form>
		<p id="contactt">எதையும் தயங்காமல் கேளுங்கள்</p>
		<label>பெயர்</label><br>
		<input type="text" name="CNAME" placeholder="NAME"><br><br>
		<label>மின்னஞ்சல் முகவரி</label><br>
		<input type="email" name="CEMAIL" placeholder="EMAIL"><br><br>
		<label>கைபேசி எண்</label><br>
		<input type="number" name="CPHONE" placeholder="MOBILE NUMBER"><br><br>
		<label>செய்தி</label><br>
		<textarea> </textarea><br><br>
		<input type="submit" name="SUBMIT">
	</form>
     <div class="map">
            <p id="mapt">நீங்கள் எங்களை எங்கே காணலாம்</p>
            <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.0535907331787!2d80.17855427905849!3d13.032259317115871!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5266d11f9ca625%3A0xf77d1733be7b5b74!2sSRM%20Institute%20Of%20Science%20And%20Technology!5e0!3m2!1sen!2sin!4v1630049458298!5m2!1sen!2sin" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
     </div>
</div>
</div>








<div class="footer">
	<p id="foot">© 2019-2022, ஃப்ரெஸ்கோ நாட்-வெஜ்-மார்ட், டெக்கீ பிளைண்டர்கள் திட்டம்.</p>
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
