<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = "pvverma703@gmail.com";
$subject = "mail from Apurdent";
$text = "Name = ". $name . "\r\n Email = " . $email . "\r\n Meassage = " . $message;
$headers = "From: noreply@pvverma703.com";
if($email!=NULL){
    mail($to,$subject,$text,$headers);
}
header("Location:thankyou.html");
?>
