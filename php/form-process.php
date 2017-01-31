<?php

$errorMSG = "";

// FIRST NAME
if (empty($_POST["first_name"])) {
    $errorMSG = "First name is required ";
} else {
    $firstname = $_POST["first_name"];
}

// LAST NAME
if (empty($_POST["last_name"])) {
    $errorMSG = "Last name is required ";
} else {
    $lastname = $_POST["last_name"];
}

// ACCOUNT NUMBER
if (empty($_POST["acct_num"])) {
    $errorMSG .= "Account number is required ";
} else {
    $acctnum = $_POST["acct_num"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}

$EmailTo = "hassan.salman@yurz.com";
$Subject = "Admin Access";

// prepare email body text
$Body = "";
$Body .= "First Name: ";
$Body .= $firstname;
$Body .= "\n";
$Body .= "Last Name: ";
$Body .= $lastname;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Account Number: ";
$Body .= $acctnum;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
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
