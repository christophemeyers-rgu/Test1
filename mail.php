<?php
/**
 * Created by PhpStorm.
 * User: Christophe
 * Date: 02/03/2016
 * Time: 20:52
 */


$name = $_POST["name"];


$to = "christophe.meyers@icloud.com";
$subject = "Befriend A Child - Survey Login";
$txt = "Hi $name!";
$headers = "From: christophe.meyers.312@gmail.com" . "\r\n" .
    "CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);
?>