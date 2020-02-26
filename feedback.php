<!DOCTYPE html>
 <head>
   <meta charset="utf-8" />
  </head>
  <body style="background: SlateGrey ;padding: 10% 30% 15% 35%;">
   <div id="container">
    <h1>Sending SMS for feedback </h1>
    <form action="sendf.php" method="POST">
     <ul>
      <li>
       <label for="Email">Email</label>
       <input type="text" name="email" id="email" /></li>
      <li>
      <label for="sub">Subject</label>
       <input type="text" name="sub" id="sub" />
      </li>
      
       <label for="smsMessage">Message</label><br>
       <textarea name="smsMessage" id="sms" cols="45" rows="15"></textarea>
      </li>
     <li><input type="submit" name="sendMessage" id="mssg" value="mssg" /></li>
    </ul>
   </form>
  </div>
 </body>
</html>