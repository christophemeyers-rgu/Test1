<?php
/**
 * Created by PhpStorm.
 * User: Christophe
 * Date: 21/03/2016
 * Time: 09:42
 */

    define('DB_SERVER', 'ap-cdbr-azure-east-c.cloudapp.net');
    define('DB_USERNAME', 'baee53f3f72f44');
    define('DB_PASSWORD', '74455103');
    define('DB_DATABASE', 'christophemeyers-rgu-demodb');
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);


?>