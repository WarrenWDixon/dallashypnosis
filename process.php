<?php

if (isset($_POST['name'])) {
    $name = $_POST['name'];
}
else {
    $name = "No name provided"; 
}

if (isset($_POST['phone_number'])) {
    $phone = $_POST['phone_number'];
}
else {
    $phone = " No phone number provided"; 
}

if (isset($_POST['email'])) {
    $email = $_POST['email'];
}
else {
    $email = "nobody@test.com"; 
}

if (isset($_POST['comments'])) {
    $comments = $_POST['comments'];
}
else {
    $comments = "no comments"; 
}
$phone_message = "  Phone Number is " . $phone;
$comments = $comments . $phone_message;

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: ' . $email . "\r\n";

mail("tantricbiker@gmail.com", $name, $comments, $headers);
mail("warrenwdixon@sbcglobal.net",$name,$comments,$headers);

header('Location: index.html');
?>
