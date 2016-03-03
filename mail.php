<?php
/**
 * Created by PhpStorm.
 * User: Christophe
 * Date: 02/03/2016
 * Time: 20:52
 */


$name = $_POST["name"];
$password = $_POST["password"];
$email = $_POST["email"];

$to = $_POST["email"];
$subject = "Befriend A Child - Survey Login";
$txt = "Dear $name,
        \n\n
        An account has been set up in your name.
        \n
        If you would like to fill out a survey concerning your experience with Befriend A Child,
        \nplease follow the link to http://www.google.com and login with:
        \n\n
        Username: $email
        \n
        Password: $password
        \n\n
        You will be able to change your password once logged in.
        \n\n
        King Regards,
        \n\n
        The Befriend A Child Team";

$headers = "From: christophe.meyers.312@gmail.com" . "\r\n" .
    "CC: somebodyelse@example.com";

echo mail($to,$subject,$txt);

echo $txt;
?>

