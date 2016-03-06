<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Submitted</title>
</head>
<body>

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

    //email subject
    $subject = "Befriend A Child - Survey Login";

    //email content
    $txt = "Dear $name,
            <br><br>
    An account has been set up in your name.
    <br>
    If you would like to fill out a survey concerning your experience with Befriend A Child,
    please follow
    <a href='http://befriendachildtestsurvey.azurewebsites.net/volunteerlogin.html'>this link</a>
    and login with:
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



    require_once 'swiftmailer/lib/swift_required.php';

    $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
    ->setUsername('christophe.meyers.312@gmail.com')
    ->setPassword('AnnachengAddress');

    $mailer = Swift_Mailer::newInstance($transport);

    $message = Swift_Message::newInstance('Befriend A Child Test Mail')
    ->setFrom(array('christophe.meyers.312@gmail.com' => 'ABC'))
    ->setTo(array('estima.meyers@gmail.com'))
    ->setBody('This is a test mail.');

    $result = $mailer->send($message);

    if($mailer->send($message) == 1){
    echo 'send ok';
    }
    else {
    echo 'send error';
    }

    echo function_exists('proc_open') ? "Yep, that will work" : "Sorry, that won't work";
    //email receiver




    /*
    //currently not used because I'm using the mail(to,subject,content) rather than mail(to,subject,content,headers) version
    $headers = "From: christophe.meyers.312@gmail.com" . "\r\n" .
    "CC: somebodyelse@example.com";

    //function to send email to (receiver, subject, content)
    mail($email,$subject,$txt);*/


    /*require_once("Mail.php");

    $from = "<christophe.meyers.312@gmail.com>";
    $to = "<$email>";
    $subject = "Test Befriend A Child Mail";
    $body = "Dear $name,
    <br><br>
    An account has been set up in your name.
    <br>
    If you would like to fill out a survey concerning your experience with Befriend A Child,
    please follow
    <a href='http://befriendachildtestsurvey.azurewebsites.net/volunteerlogin.html'>this link</a>
    and login with:
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

    $host = "smtp.gmail.com";
    $username = "christophe.meyers.312@gmail.com";
    $password = "AnnachengAddress";
    $port = "465";

    $headers = array(
    'From' => $from,
    'To' => $to,
    'Subject' => $subject
    );

    $smtp = Mail::factory('smtp', array (
    'host' => $host,
    "port" => $port,
    'auth' => true,
    'username' => $username,
    'password' => $password));

    $mail = $smtp->send($to, $headers, $body);

    if ( PEAR::isError($mail) ) {
    echo("<p>Error sending mail:<br/>" . $mail->getMessage() . "</p>");
    } else {
    echo("<p>Message sent.</p>");
    }*/



    //print email content to display whether the content is as expected
    //echo $txt;
    ?>


</body>
</html>