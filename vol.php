<?php

require_once("condb.php");

$query ="SELECT * from vol";

	$data=mysqli_query($con,$query);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>  volunteer pge</title>

<h2>All of the volunter here</h2>

           <table style="border: 1px solid red;width: 100%;">

           	<tr>
           		<td style="border: 1px solid red;">Id</td>
           		<td style="border: 1px solid red;">Name </td>
           		<td style="border: 1px solid red;">Address </td>
           		<td style="border: 1px solid red;">Phone </td>
           		<td style="border: 1px solid red;">Email </td>
     
           		<td style="border: 1px solid red;">joining Date </td>
               <td style="border: 1px solid red;">Update or delete </td>

           	</tr>
           	<?php foreach ($data as $item) :?>
           	<tr>
           		<td style="border: 1px solid red;"><?php echo  $item['id'] ?> </td>
           		<td style="border: 1px solid red;"><?php echo  $item['name'] ?> </td>
           		<td style="border: 1px solid red;"><?php echo  $item['addr'] ?> </td>
           		<td style="border: 1px solid red;"><?php echo  $item['phn'] ?> </td>
           		<td style="border: 1px solid red;"><?php echo  $item['eml'] ?> </td>
           
           		<td style="border: 1px solid red;"><?php echo  $item['dat'] ?> </td>
              <td> <a href="update.php?id=<?php echo  $item['id'] ?>"><button>Update</button></a>
                <a onclick="return confirm('are you sure')" href="vol.php?idd=<?php echo $item['id'] ?>"class="btn btn-danger"><button>delete</button></a>
              </td>
           	</tr>
             <?php

                $mysqli=new mysqli("localhost","root","","reg");
                if($mysqli->connect_error){
                    echo "Failes connect(".$mysqli->connect_error.")".$mysqli->connect_error;
                }

                if(isset($_GET['idd']))
                {
                    $idd=$_GET['idd'];
                    $result=$mysqli->query("DELETE FROM vol WHERE vol.`id` ='$idd'");
                    if($result)
                    {
                    }
                    else
                    {



                    }

                }

                ?>


           <?php endforeach; ?>
           </table>
           </head>
<body>

</body>
</html>