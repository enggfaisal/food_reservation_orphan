<?php

require_once("condb.php");
if(isset($_POST['btn']))
{

	$nam=$_POST['nam'];
	$add=$_POST['add'];
	$number=$_POST['phn'];
	$eml=$_POST['eml'];
	
	$dat=$_POST['date'];
	//$val=" '$loc','$zip','$number','$tof','$qun','$dat'";
	$query="INSERT INTO vol(name,addr,phn,eml,dat) VALUES('$nam','$add','$number','$eml','$dat')";
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