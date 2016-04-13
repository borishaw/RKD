<?php

//Redirect page if not POSTed here
if ($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('location: ../index.php');
    exit;
}

//Parameters to fill in
$required_fields = ['Name', 'Email', 'Outline'];
$site_name = 'RKDoors.ca';
$recaptcha_secret = '6LdzOxwTAAAAAAjIPZCcUyauKWKVnHI3CvXNIMaO';
$recipient_email_address = 'julie@ankitdesigns.com';
$recipient_name = 'Julie';


require_once '../vendor/autoload.php';
//Initiate Validator
use Respect\Validation\Validator as v;
$json_response = ['success' => 0, 'message' => ''];


if (!v::notEmpty()->validate($_POST['g-recaptcha-response'])){
    $json_response['message'] = 'Please check the ReCaptcha box or refresh the page';
    exit(json_encode($json_response));
}

/*
 * Validate ReCaptcha
 */
//Fill in ReCaptcha Secret here
$recaptcha = new \ReCaptcha\ReCaptcha($recaptcha_secret);
$resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

if ($resp->isSuccess()){

    //Validate all required input
    foreach ($required_fields as $field){
        if (!v::notEmpty()->validate($_POST[$field])){
            $json_response['message'] = 'Please enter the ' . $field . ' field';
            exit(json_encode($json_response));
        }
    }

    /*
     * Validate other fields
     */
    //Validate Email
    if (!v::email()->validate($_POST['Email'])){
        $json_response['message'] = 'Please enter a valid email address';
        exit(json_encode($json_response));
    }

    //Send email
    unset($_POST['g-recaptcha-response']);
    $mail = new PHPMailer();
    $mail->setFrom($_POST['Email'], $_POST['Name']);
    
    //Fill in the email address the form should be sent to:
    $mail->addAddress($recipient_email_address, $recipient_name);
    
    $mail->isHTML(true);
    if (isset($_POST['Subject'])){
        $mail->Subject = $_POST['Subject'];
    } else {
        $mail->Subject = 'New Message from ' . $site_name;
    }
    $mail->Body = '';
    foreach($_POST as $key => $value){
        $mail->Body .= $key . ': ' . $value. '<br/>';
    }

    if(!$mail->send()) {
        $json_response['message'] = 'Message could not be sent. Please try again. Mailer Error: ' . $mail->ErrorInfo;
        exit(json_encode($json_response));
    } else {
        $json_response['message'] = 'Message has been sent, we will get back to you soon.';
        $json_response['success'] = 1;
        exit(json_encode($json_response));
    }

} else {
    $json_response['message'] = 'ReCaptcha failed. Please refresh to page to retry';
    exit(json_encode($json_response));
}