<?php
$password="Yehudah23";

$hash= password_hash($password, PASSWORD_DEFAULT);

IF(password_verify("Yehudah23", $hash)){
    echo"you are logged in!";
    echo $hash;
}else{
    echo "Incorrect password";
}