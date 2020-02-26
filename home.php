<?php

require_once("condb.php");


$qur="SELECT * from area";
	
	$date=mysqli_query($con,$qur);

  include ("Auth.php");
use App\Auth\Auth;
$obj1= new Auth();
$data=$obj1->getAllUsers();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>  main page</title>

<h2>All requests from people</h2>



        <table style="border: 1px solid red;width: 100%;">

            <tr>
                <td style="border: 1px solid red;">Id</td>
                <td style="border: 1px solid red;">Location </td>
                <td style="border: 1px solid red;">Zip </td>
                <td style="border: 1px solid red;">Phone </td>
                <td style="border: 1px solid red;">Type of food </td>
                <td style="border: 1px solid red;">Quantity </td>
                <td style="border: 1px solid red;">Date </td>
                <td style="border: 1px solid red;">Accept or delete </td>
            </tr>
            <?php foreach ($data as $item) :?>
            <tr>
                <td style="border: 1px solid red;"><?php echo  $item['id'] ?> </td>
                <td style="border: 1px solid red;"><?php echo  $item['location'] ?> </td>
                <td style="border: 1px solid red;"><?php echo  $item['zip'] ?> </td>
                <td style="border: 1px solid red;"><?php echo  $item['Email'] ?> </td>
                <td style="border: 1px solid red;"><?php echo  $item['food'] ?> </td>
                <td style="border: 1px solid red;"><?php echo  $item['quantity'] ?> </td>
                <td style="border: 1px solid red;"><?php echo  $item['dat'] ?> </td>
                <td> <a href="recv.php"><button>Receive</button></a>
                    <a onclick="return confirm('are you sure')" href="home.php?idd=<?php echo $item['id'] ?>"class="btn btn-danger"><button>delete</button></a> </td>


            </tr>
                <?php

                $mysqli=new mysqli("localhost","root","","reg");
                if($mysqli->connect_error){
                    echo "Failes connect(".$mysqli->connect_error.")".$mysqli->connect_error;
                }

                if(isset($_GET['idd']))
                {
                    $idd=$_GET['idd'];
                    $result=$mysqli->query("DELETE FROM req WHERE req.`id` ='$idd'");
                    if($result)
                    {
                    }
                    else
                    {

                          echo "error";

                    }

                }

                ?>





            <?php endforeach; ?>
           </table>
           <h2>Registerd area</h2>

           <table style="border: 1px solid red;width: 100%;">

           	<tr>
           		<td style="border: 1px solid red;">Id</td>
           		<td style="border: 1px solid red;">Location </td>
           		<td style="border: 1px solid red;">Zip </td>
           		<td style="border: 1px solid red;">Name of institute </td>
           		<td style="border: 1px solid red;">no. of people </td>
           		<td style="border: 1px solid red;">Date </td>
           	</tr>
           	<?php foreach ($date as $item1) :?>
           	<tr>
           		<td style="border: 1px solid red;"><?php echo  $item1['id']  ?> </td>
           		<td style="border: 1px solid red;"><?php echo  $item1['loc'] ?> </td>
           		<td style="border: 1px solid red;"><?php echo  $item1['zip'] ?> </td>
           		<td style="border: 1px solid red;"><?php echo  $item1['noi'] ?> </td>
           		<td style="border: 1px solid red;"><?php echo  $item1['nop'] ?> </td>
           		<td style="border: 1px solid red;"><?php echo  $item1['dat'] ?>   </td>
           	</tr>
           <?php endforeach; ?>
           </table>
</head>
<body>

</body>
</html>