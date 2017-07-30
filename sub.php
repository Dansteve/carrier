<?php
error_reporting (E_ALL ^ E_NOTICE);

$post = (!empty($_POST)) ? true : false;

if($post)
{

$subject = 'Message from bizfocusva.com contact form';
    
$to = '"contact@bizfocusva.com" <contact@bizfocusva.com>';

$headers = "From: " . strip_tags($_POST['email']) . "\r\n";
$headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
$headers .= "CC: contact@bizfocusva.com,danstevea@gmail.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    
$message = '<html><body style="text-align: center;">';
    $message .= '<img src="https://www.bizfocusva.com/img/mainLOGO.jpg" alt="" />';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
$message .= "<tr><td><strong>Message:</strong> </td><td>" . strip_tags($_POST['message']) . "</td></tr>";
$message .= "</table>";
$message .= "<p>this email is from Bizfocusva.com conatct form</p>";
$message .= "</body></html>";
    
    
if(mail($to, $subject, $message, $headers))
{

header('Location: https://www.bizfocusva.com/contact.php?sent_successfull');
}
}
    

echo $_POST['name'];
?>
