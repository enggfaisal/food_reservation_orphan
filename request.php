

<!DOCTYPE html>
<html>
<head>
    <title>Smart Food Distribution</title>
    <link rel="stylesheet" type="text/css" href="style.css">

         <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
          <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
</head>
<body>
  <div class="bgimage" >
    <div class="menu">
        <div class="leftmenu">
            <h4>Smart Food Distribution</h4>
        </div>
        <div class="rightmenu">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="addarea.php">Add Area</a></li>
                <li><a href="volan.php">Add Volunteer</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="login.php">login</a></li>
                <li><a href="request.php">Food Request</a></li>
                
            </ul>
        </div>
    </div> 
    <div id="login-main" align="center">
</div>
<head>
    <meta charset="utf-8">
    <title>Registation Page</title>
    <link rel="stylesheet" type="text/css" href="new.css">
</head>
<body >
  <div class="box" align="">
        <h2>Food Request</h2>
<form action="insert.php" method="POST" enctype="multipart/form-data">
    <label style="color: white">Location</label><br>
    <input type="text" name="loc"><br>

    <label style="color: white">Zip Code</label><br>
    <input type="text" name="zip"><br>
    <label style="color: white">email</label><br>
    <input type="tel" name="email"><br>

    <label style="color: white">Type of Food</label><br>
    <input type="text" name="tof"><br>

    <label style="color: white">Quntity</label><br>
    <input type="text" name="quntity"><br>
    <label style="color: white">Date</label>
    <input type="Date" name="date"><br><br>
    <input type="submit" name="btn" value="insert"><br><br>

</form>
    
  </div>
</body>
</html>