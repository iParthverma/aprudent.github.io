<?php
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];

if (empty($name) || empty($email) || empty($message))
{
    echo "Please fill all the fields";
}
else
{
    mail("pvverma703@gmail.com", "Aprudent Message", $message, "from: $name<$email>");
    echo "<script type= 'text/javascript'>alert('Your message sent successfully');
    window.history.log(-1);
    </script>";
}
?>