<?php
require ("Location:../conversion/MVC/controler/database.php");
echo "<br>";
$print="";
if(isset($_REQUEST['submit']))
{
	$category=$_POST['category'];
	$unit=$_POST['unit'];
	$rate=$_POST['rate'];

	$sql = "INSERT INTO converter(category, unit, rate)VALUES('$category','$unit','$rate')";
	$query= musqli_query($conn,$sql);
	if($query)
	{
		echo "Entry Data Sucessfully";
	}
	else
	{
		echo"Error..!";
	}
	musqli_close($conn)
}
header("Location:"..//)
?php