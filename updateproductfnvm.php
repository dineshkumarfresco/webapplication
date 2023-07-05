<?php
 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>update</title>
</head>
<style>
	body{
		background-color:#eeffe2;
	}
	form{
		margin:0 500px 0 500px;
		display:flex;
	    flex-direction:column;
	    flex-wrap:wrap;
	    justify-content:center;
	    align-content:center;
	    background-color:white;
	    

	}
	#ttable{
		background-color:white;
		color:black;
		text-align:center;
	}
	#ttable th{
        background-color:green;
        color:white;
	}
</style>
<body>
	<form method="GET" action="" id='form'>

   <img src="<?php echo $_GET['upimage']; ?>" width='200px' height='200px'>
	<br><br>
	<input type="text" name="pn" required="" placeholder="Name" value="<?php echo $_GET['upname']; ?>"> 
	<br><br>
	<input type="text" name="ptn" required="" placeholder="பொருளின் பெயர்" value="<?php echo $_GET['uptname']; ?>"> 
	<br><br>
	<input type="text" name="pr" required="" placeholder="Rate" value="<?php echo $_GET['uprate']; ?>">
	<br><br>
	<input type="text" name="pv" required="" placeholder="Varity" value="<?php echo $_GET['upvarity']; ?>">
	<br><br>
	<input type="text" name="pp" required="" placeholder="Para" id="para" value="<?php echo $_GET['uppara']; ?>">
	<br><br>
	<input type="text" name="ptp" required="" placeholder="விளக்கம்" id="tpara" value="<?php echo $_GET['uptpara']; ?>">
	<br><br>
	<input type="text" name="pw" required="" placeholder="Weight" value="<?php echo $_GET['upweight']; ?> ">
	<br><br>
	<input type="text" name="po" required="" placeholder="% Offer" value="<?php echo $_GET['upoffer']; ?> ">
	<br><br>
	<input type="text" name="poa" required="" placeholder="Offer amount" value="<?php echo $_GET['upoffamount']; ?> ">
	<br><br>
		
	<input type="submit" name="submit" value="UPDATE">

	<br><br>


</form>
<?php
if(isset($_GET['submit']))
{

 $con= mysqli_connect('localhost','root','root');
	 mysqli_select_db($con,'fnvm');

$name = $_GET['pn'];
$tname = $_GET['ptn'];
$rate = $_GET['pr'];
$para = $_GET['pp'];
$tpara = $_GET['ptp'];
$varity = $_GET['pv'];
$weight = $_GET['pw'];
$offer = $_GET['po'];
$offamount = $_GET['poa'];


$query = "UPDATE productsdata SET pname='$name', ptname='$tname', prate='$rate' , ppara='$para', ptpara='$tpara', pvarity='$varity' , pweight='$weight' , poffer='$offer' , poffamount='$offamount' WHERE pname='$name'";
$data = mysqli_query($con,$query);


if($data)
{
	echo "<font color='green'>Record updated successfully <a href='viewproductsfnvm.php'>view</a>";
	echo "<script>document.getElementById('form').style.display='none';</script> ";
	echo "<br><br>
	   <table border='1' id='ttable'> 
	    <tr>
		<th>name</th>
		<th>பொருளின் பெயர்</th>
		<th>rate</th>
		<th>varity</th>
		<th>Weight</th>
	    <th>para</th>
	    <th>விளக்கம்</th>
	    <th>%offer</th>
	    <th>offer amount</th>
	    </tr>

	       <tr>
	       <td>$name</td>
	       <td>$tname</td>
	       <td>$rate</td>
	       <td>$varity</td>
	       <td>$weight</td>
	       <td>$para</td>
	       <td>$tpara</td>
	       <td>$offer</td>
	       <td>$offamount</td>
	       </tr>
	       </table>";
}
else{
	echo "<font color='red'>Record Not updated";
   }
}
else{
	echo "not working";
}
?>
</body>
</html>