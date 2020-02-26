<?php
 
if ( isset( $_POST['mssg'] )) 
{
 
 
    $message = wordwrap( $_POST['sms'], 70 );
    $to = $_POST['email'] ;
    $s =$_POST['sub'];
    $header= "From: michelclark1998@gmail.com" . "\r\n" .
               "CC: michelclark1998@gmail.com";
    
   
    $result = mail( $to, $s, $message,$header );
    if($result){
                 print 'Message was sent to ' . $to;
                }
  
    else {
          print 'Not all information was submitted.';
        }
}
 
?>