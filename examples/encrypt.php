<?php
$key = 'password to (en/de)crypt';
$string = ' string to be encrypted '; // note the spaces


$iv = mcrypt_create_iv(
    mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC),
    MCRYPT_DEV_URANDOM
);

$encrypted = base64_encode(
    $iv .
    mcrypt_encrypt(
        MCRYPT_RIJNDAEL_128,
        hash('sha256', $key, true),
        $string,
        MCRYPT_MODE_CBC,
        $iv
    )
);

$data = base64_decode($encrypted);
$iv = substr($data, 0, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC));

$decrypted = rtrim(
    mcrypt_decrypt(
        MCRYPT_RIJNDAEL_128,
        hash('sha256', $key, true),
        substr($data, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC)),
        MCRYPT_MODE_CBC,
        $iv
    ),
    "\0"
);

echo 'Encrypted:' . "\n";
var_dump($encrypted); // "m1DSXVlAKJnLm7k3WrVd51omGL/05JJrPluBonO9W+9ohkNuw8rWdJW6NeLNc688="

echo "\n";

echo 'Decrypted:' . "\n";
var_dump($decrypted); // " string to be encrypted 
?>