<?php
$name = $_REQUEST['name'];
$email = $_REQUEST['Email'];
$message = $_REQUEST['Message'];


if (empty($name) || empty($email) || empty($message))
{
    echo "Please Fill out all the Feilds!";
}
else
{
    mail("pccustom123@yahoo.com", "CPC Message", $message, "From: $name <
        $email>");
} 
    

?>