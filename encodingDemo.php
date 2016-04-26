<?php
header("Content-type: text/plain");

$credentials=[  "admin"=>"hello",
    "jsmith"=>"mypassword",
    "jdoe"=>"L3tM31n",
    "auser"=>"rememberme"
];
?>
This example shows the conversion between plain data and an encoding scheme.
Notice that an encoding is a 2-way function. You can always get the original data from the encoded version.
No special key is required.

<?php
echo "===Encoding in Base64 vs Hex===\n\n";
foreach ($credentials as $username=>$password)
{
    $base64Encoded=base64_encode($password);
    $hexEncoded=bin2hex($password);
    echo $username . " => " . $password . "\n";
    echo "    based64: ".$base64Encoded."\n";
    echo "    hex    : ".$hexEncoded."\n\n";
}
?>
