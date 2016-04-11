<?php
/**
 * Created by PhpStorm.
 * User: Christophe
 * Date: 11/04/2016
 * Time: 09:47
 */

$username = $_POST["username"];
$password = $_POST["password"];

if ($username =="chris" && $password == "hello")
    setcookie('access_level_cookie','standarduser');


header('Location: homepage.php');


?>