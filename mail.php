<?php
/**
 * Created by PhpStorm.
 * User: Christophe
 * Date: 02/03/2016
 * Time: 20:52
 */

//setting some variables with form values
$name = $_POST["name"];
$password = $_POST["password"];
$email = $_POST["email"];

//email receiver
$to = $_POST["email"];

//email subject
$subject = "Befriend A Child - Survey Login";

//email content
$txt = "Dear $name,
        <br><br>
        An account has been set up in your name.
        <br>
        If you would like to fill out a survey concerning your experience with Befriend A Child,
        please follow the link to http://befriendachildtestsurvey.azurewebsites.net/volunteerlogin.html and login with:
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

//currently not used because I'm using the mail(to,subject,content) rather than mail(to,subject,content,headers) version
$headers = "From: christophe.meyers.312@gmail.com" . "\r\n" .
    "CC: somebodyelse@example.com";

//function to send email to (receiver, subject, content)
mail($to,$subject,$txt);

//print email content to display whether the content is as expected
echo $txt;
?>

