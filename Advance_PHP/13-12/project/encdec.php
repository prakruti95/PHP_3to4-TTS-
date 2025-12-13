<?php

echo "<h2>Secure Encryption (password_hash)</h2>";

$password = "mySecret123";

// Encrypt password
$secureHash = password_hash($password, PASSWORD_BCRYPT);

echo "Original Password: $password <br>";
echo "Encrypted (BCRYPT): $secureHash <br><br>";

echo "Verify Correct Password: ";
echo password_verify("mySecret123", $secureHash) ? "✔ Valid<br>" : "✘ Invalid<br>";

echo "Verify Wrong Password: ";
echo password_verify("wrongPass", $secureHash) ? "✔ Valid<br>" : "✘ Invalid<br>";


echo "--------------------------------------------<br>";

echo "<h2>MD5 Encryption</h2>";

$md5Password = "hello123";

// MD5 Encrypt
$md5Hash = md5($md5Password);

echo "Original Password: $md5Password <br>";
echo "MD5 Hash: $md5Hash <br><br>";

// Verify
echo "Verify Correct Password: ";
echo (md5(string: "hello123") === $md5Hash) ? "✔ Valid<br>" : "✘ Invalid<br>";

echo "Verify Wrong Password: ";
echo (md5("wrong") === $md5Hash) ? "✔ Valid<br>" : "✘ Invalid<br>";

?>