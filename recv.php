<?php
require_once("condb.php");
$qur="SELECT phone from req where req.id=7";

$date=mysqli_query($con,$qur);
?>
<!DOCTYPE html>
 <head>
   <meta charset="utf-8" />
  </head>
  <body style="background: SlateGrey ;padding: 10% 25% 15% 35%;">
   <div id="container">
    <h1>Sending SMS for Receiving food. </h1>

<?php
      
       ?>
    <form action="sendf.php" method="POST">
     <ul>
      <li>
       <label for="email">Email</label>
       <input type="text" name="email" id="email"  /></li>
      <li>
      <label for="sub">Subject</label>
       <input type="text" name="sub" id="sub" />
      </li>
      <li>
       <label for="smsMessage">Message</label><br>
       <textarea name="smsMessage" id="smsMessage" cols="45" rows="15"></textarea>
      </li>
     <li><input type="submit" name="sendMessage" id="sendMessage" value="Send Message" /></li>
    </ul>
   </form>
  </div>
 </body>
</html>