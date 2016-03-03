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
        <br><br>
        An account has been set up in your name.
        <br>
        If you would like to fill out a survey concerning your experience with Befriend A Child,
        please follow the link to http://www.google.com and login with:
        <br><br>
        Username: $email
        <br>
        Password: $password
        <br><br>
        You will be able to change your password once logged in.
        <br><br>
        King Regards,
        <br><br>
        The Befriend A Child Team";

$headers = "From: christophe.meyers.312@gmail.com" . "\r\n" .
    "CC: somebodyelse@example.com";

echo mail($to,$subject,$txt);

echo $txt;
?>

