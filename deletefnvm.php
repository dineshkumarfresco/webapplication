<?php
$id=$_GET['delid'];
 $con= mysqli_connect('localhost','root','root');
 mysqli_select_db($con,'fnvm');
$query = "DELETE FROM productsdata WHERE pid='$id'";
$data = mysqli_query($con,$query);
if($data)
{
	echo "<font color='green'>Record Deleted from Table";
	header("Location:viewproductsfnvm.php");

}
else{
	echo "<font color='red'>Sorry, Delete process failed <a href='viewproductsfnvm.php'>view</a>";
}

?>