<?php
//some known credentials as a PHP associative array

$credentials=[  "admin"=>"hello",
    "jsmith"=>"mypassword",
    "jdoe"=>"L3tM31n",
    "auser"=>"rememberme"
];

header("Content-type: text/plain"); //make the reply simple plain text instead of HTML
?>
Some username-password pairs:

===Plain password===

<?php
foreach ($credentials as $username=>$password)  //print out all username-password pairs
{
    echo $username . " => " . $password . "\n";
}
?>

Hashing the passwords by the SHA256 algorithm:

===Passwords hashed by SHA256===
<?php
$method="SHA256";
foreach ($credentials as $username=>$password)
{
    $digest=openssl_digest($password,$method);  //compute hash value of each password using SHA256
    echo $username . " => " . $digest . "\n";
}
?>


A hacker can pre-compute hash values of thousands of common passwords and
compare them with the hash values in the password database/file.
See how the hash code of "hello" gets a match:

===Common passwords hashed by SHA256===

<?php
$commonPasswords=[  "hello",        //an array of common passwords to try
    "world",
    "letmein"
];
foreach ($commonPasswords as $password)
{
    $digest=openssl_digest($password,$method);  //compute hash value using SHA256
    echo $password . " : " . $digest . "\n";
}
?>


Salting add a random salt to the data before hashing.
This gives a different hash value even if the data remain unchanged.

The following example uses a random 8-byte long salt for each password.
If you reload this page, the salt will be different.
The salt needs to be stored with the hash value as it is needed in checking the password.

===Salt+passwords hashed by SHA256===

<?php
$storedCredentials=array(); //this associative array will store username->hash value pairs
$method="SHA256";
foreach ($credentials as $username=>$password)
{
    $salt=openssl_random_pseudo_bytes(8);                   //generate an 8 byte-long random salt
    $digest=openssl_digest($salt.$password,$method);        //compure hash value of salt+password
    $storedCredentials[$username]=bin2hex($salt).$digest;   //hex encode salt before concatenanting with hash value
    echo $username . " => " .$storedCredentials[$username] . "\n";
}
?>


As hashing is a 1-way function, we can never get the original password from the hash value.
To check for the validity of an entered password (or attempt password), we need to
go through the same hashing process, with the same salt (as used in computing the original hash value).

In this example, we take the attempted password to compute its hash value and compare
against the stored hash value:

<?php
$user = "admin";            //attempted username
$passwordAttempt = "hello"; //attempted password

echo "===Password check ($user=>$passwordAttempt)===\n";

if (passwordCheck($user,$passwordAttempt,$storedCredentials,$method))   //call PHP function below to check validity
    echo "Valid password\n";
else echo "Incorrect password\n";
?>


In this example, we can see how the incorrect password generates a different hash value
which does not match the stored one:

<?php
$user = "admin";            //attempted username
$passwordAttempt = "world"; //attempted password

echo "===Password check ($user=>$passwordAttempt)===\n";

if (passwordCheck($user,$passwordAttempt,$storedCredentials,$method))   //check for validity
    echo "Valid password\n";
else echo "Incorrect password\n";


/*
 * This function take a username, a password, an array of stored credential (with hashed password values)
 * and a hashing algorithm to check for the validatiy of a password attempt.
 */
function passwordCheck($user,$passwordAttempt,$storedCredentials,$method)
{
    $storedHash = $storedCredentials[$user];    //get stored hash value associated with username
    $saltInHex = substr($storedHash, 0, 16);    //salt is hex-encoded in the 1st 16 characters
    $salt = hex2bin($saltInHex);                //decode salt

    $digest = openssl_digest($salt . $passwordAttempt, $method);    //compute hash value of salt+attempted password
    echo "Computed hash of password attempt: " . $digest . "\n";
    echo "Salt with hash value: ".$saltInHex.$digest."\n";
    return $saltInHex . $digest == $storedHash;                     //see if freshly computed hash value matches the stored one
} //end function
?>

