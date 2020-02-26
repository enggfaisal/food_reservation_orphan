<?php

require_once("condb.php");

if(isset($_POST['del']=="Delete");
{
    $idd = $_POST[''];

    $result = "DELETE FROM `req` WHERE `req`.`id` ='$idd'";
    $qryIn = mysqli_query($con, $result);
    if ($qryIn) {
        echo "Data insert successfully";
    } else {
        echo "Has been error";
    }
}

?>