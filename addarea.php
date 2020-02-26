
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
        <h2>Add Area</h2>
<form  action="Ins.php" method="POST" enctype="multipart/form-data" style="padding-left: 100px" >
    <label style="color: white">location</label>
    <input type="text" name="loc"><br><br>

    <label style="color: white">Zip Code</label>
    <input type="text" name="zip"><br><br>
    <label style="color: white">Name of ins</label>
    <input type="text" name="nfi"><br><br>

    <label style="color: white">Number Of people</label>
    <input type="text" name="nos"><br><br>
    <label style="color: white">Date</label>
    <input type="Date" name="date"><br><br>
    <input type="submit" name="btn" value="add">




  </form>
    
  </div>
</body>
</html>