<?php
/**
 * Created by PhpStorm.
 * User: Christophe
 * Date: 02/03/2016
 * Time: 20:52
 */

//ini_set("SMTP", "smtp.gmail.com");
//ini_set("sendmail_from", "christophe.meyers.312@gmail.com");


//setting some variables with form values
$name = $_POST["name"];
$password = $_POST["password"];
$email = $_POST["email"];
//
////email receiver
//
//
////email subject
//$subject = "Befriend A Child - Survey Login";
//
////email content
//$txt = "Dear $name,
//        <br><br>
//        An account has been set up in your name.
//        <br>
//        If you would like to fill out a survey concerning your experience with Befriend A Child,
//        please follow
//        <a href='http://befriendachildtestsurvey.azurewebsites.net/volunteerlogin.html'>this link</a>
//        and login with:
//        <br><br>
//        Username: $email
//        <br>
//        Password: $password
//        <br><br>
//        You will be able to change your password once logged in.
//        <br><br>
//        King Regards,
//        <br><br>
//        The Befriend A Child Team";
//
////currently not used because I'm using the mail(to,subject,content) rather than mail(to,subject,content,headers) version
//$headers = "From: christophe.meyers.312@gmail.com" . "\r\n" .
//    "CC: somebodyelse@example.com";
//
////function to send email to (receiver, subject, content)
//mail($email,$subject,$txt);


require_once("Mail.php");

$from = "Christophe Meyers <email@blahblah.com>";
$to = "$name <$email>";
$subject = "Subject";
$body = "Lorem ipsum dolor sit amet, consectetur adipiscing elit...";

$host = "smtp.gmail.com";
$username = "christophe.meyers.312@gmail.com";
$password = "AnnachengAddress";

$headers = array('From' => $from, 'To' => $to, 'Subject' => $subject);

$smtp = Mail::factory('smtp', array ('host' => $host,
    'auth' => true,
    'username' => $username,
    'password' => $password));

$mail = $smtp->send($to, $headers, $body);

if ( PEAR::isError($mail) ) {
    echo("<p>Error sending mail:<br/>" . $mail->getMessage() . "</p>");
} else {
    echo("<p>Message sent.</p>");
}



//print email content to display whether the content is as expected
//echo $txt;
?>

