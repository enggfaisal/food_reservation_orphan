<?php

require_once("condb.php");
if(isset($_POST['btn']))
{

	$loc=$_POST['loc'];
	$zip=$_POST['zip'];
	$number=$_POST['email'];
	$tof=$_POST['tof'];
	$qun=$_POST['quntity'];
	$dat=$_POST['date'];
	//$val=" '$loc','$zip','$number','$tof','$qun','$dat'";
	$query="INSERT INTO req(location,zip,Email,food,quantity,dat) VALUES('$loc','$zip','$number','$tof','$qun','$dat')";
	//$sqlIn="INSERT INTO req VALUES($val)";
	$qryIn=mysqli_query($con,$query);

	if($qryIn)
	{
		echo "Data insert successfully";
	}
	else
	{
		echo "Has been error";
	}
}

?>