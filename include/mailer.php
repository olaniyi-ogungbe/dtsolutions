<?php // the message

if(isset($_POST['submit'])){

    $msg = wordwrap($msg,70);

    $to = "info@dtsolutions.com.ng";
    $subject =  wordwrap($_POST['subject'], 70);
    $body =  $_POST['name'] . "\n";
    $body .=  $_POST['phone'] . "\n";
    $body .=  $_POST['message'];
    $header =  $_POST['email']; 
    $phone =  $_POST['phone'];
     
    mail($to,$subject,$body, $header );
    
}

if(isset($_POST['send'])){

    $msg = wordwrap($msg,70);

    $to = "info@dtsolutions.com.ng";
    $subject =  wordwrap($_POST['service'], 70);
    $body =  $_POST['name'] . "\n";
    $body .=  $_POST['brand'] . "\n";
    $body .=  $_POST['message'];
    $header =  $_POST['email']; 
    $phone =  $_POST['phone'];
     
    mail($to,$subject,$body, $header );
    
}

?>