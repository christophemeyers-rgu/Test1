<?php

    include("databaseconnection.php");  //connect to database

    //test if connection was established and print any errors
    if($db->connect_errno){
        die('Connectfailed['.$db->connect_error.']');
    }

    // create a sql query as a string