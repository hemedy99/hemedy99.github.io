<?php
    $to = 'abdulhemedi99@gmail.com';
    $firstname = $_POST["name"];
    $message= $_POST["message"];
    $email= $_POST["email"];
    $subject= $_POST["subject"];
    


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "Subject: " . $subject . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $msg ='<table style="width:100%">
        <tr>
            <td>'.$firstname.'  </td>
        </tr>
        <tr><td>From: '.$email.'</td></tr>
        <tr><td>Message: '.$message.'</td></tr>
        
    </table>';

    if (@mail($to, $email, $msg, $headers))
    {
        echo 'The message has been sent.';
    }else{
        echo 'failed';
    }

?>
