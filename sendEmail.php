<?php

$host = "localhost";
$port = "3306";
$dbname = "onepagemaraicher";
$charset = "UTF8";
$user = "root";
$password = "";

if (isset($_POST["submit_btn"])) {


    $to = "alainczr22@gmail.com";

    $subject = 'Mail sent from sendmail PHP script';

    $from = $_POST["email"];

    $message = $_POST["content"];

    $headers = "From: $from";


    if (mail($to, $subject, $message, $headers)) {

        $responseText = 'Mail sent successfully.';

    } else {

        $responseText = 'Unable to send mail. Please try again.';

    }
}

?>