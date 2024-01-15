<?php
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_form='mauryap209@gmail.com';
$email_subject='New form submission';

$email_body="User Name:$name.\n".
            "User Email:$email.\n".
            "Subject:$subject.\n".
            "User Message:$message.\n";

$to="mauryap8935@gmail.com";
$headers="Form:$email_form \r\n";
$headers.="Reply-to: emil \r\n";
mail($to, $email_subject,$email_body,$headers);
header("Location: contact.html")


?>