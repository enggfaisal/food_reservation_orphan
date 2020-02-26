<?php

require_once("condb.php");
if(isset($_POST['btn']))
{

	$loc=$_POST['loc'];
	$zip=$_POST['zip'];
	$nfi=$_POST['nfi'];
	$nos=$_POST['nos'];
	$dat=$_POST['date'];
	//$val=" '$loc','$zip','$number','$tof','$qun','$dat'";
	$query="INSERT INTO area(loc,zip,noi,nop,dat) VALUES('$loc','$zip','$nfi','$nos','$dat')";
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