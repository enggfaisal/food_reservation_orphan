<?php



require_once("condb.php");
if (isset($_GET['id'])) 
{
    $id=$_GET['id'];
    if (isset($_POST['update-btn'])) {
        $nam=$_POST['nam'];
        $addr=$_POST['add'];
        $phn=$_POST['phn'];
        $eml=$_POST['eml'];
        
        $dat=$_POST['date'];
        $update_query="UPDATE vol SET name='$nam',addr='$addr',phn='$phn',eml='$eml',dat='$dat' WHERE id='".$id."'";
        

        if (mysqli_query($con,$update_query)) {
            echo "Successfully Updated.";
        }
        else
            echo "Failed to updated";
        # code...
    }

    $query ="SELECT * from vol WHERE id='".$id."'";

}


    $datas=mysqli_query($con,$query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add volunteer</title>
</head>
<body style="background: DarkGray ;padding: 15% 30% 15% 30%;">
<div id="login-main" align="center">
<?php foreach ($datas as $value): ?>
    
<form action="" method="POST" enctype="multipart/form-data">
    <label>Name</label>
    <input type="text" name="nam" value="<?php echo $value['name'] ?>"><br><br>

    <label>address</label>
    <input type="text" name="add" value="<?php echo $value['addr'] ?>"><br><br>
    <label>phone Number</label>
    <input type="text" name="phn" value="<?php echo $value['phn'] ?>"><br><br>

    <label>email</label>
    <input type="text" name="eml" value="<?php echo $value['eml'] ?>"><br><br>
    <label>Date</label>
    <input type="Date" name="date"  value="<?php echo $value['dat'] ?>"><br><br>
    <input type="submit" name="update-btn" value="Update">

</form>

<?php endforeach ?>
</div>
</body>
</html>
