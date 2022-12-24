<?php

//defined('app_start') or die('error');
session_start();

if (!array_key_exists('app_start', $_SESSION)){
    $rs = ['success' => 0, 'message' => 'something gone wrong!'];
    die(json_encode($rs));
}
if ($_SERVER['REQUEST_METHOD'] !== 'POST'){
    $rs = ['success' => 0, 'message' => 'something gone wrong again!'];
    die(json_encode($rs));
}

require_once '../vendor/autoload.php';

//$rs = ['success' => 122211, 'message' => $_SESSION];
//die(json_encode($rs));
mySendMailMessage();

function mySendMailMessage(){
	$myParams = require '../php/params.php'; $params = $myParams;
	$myConfig = require '../php/config.php';

	try {
    // Create the SMTP Transport
		$transport = (new Swift_SmtpTransport($myConfig['mailer']['transport']['host'],
			$myConfig['mailer']['transport']['port']))
		->setUsername($myConfig['mailer']['transport']['username'])
		->setPassword($myConfig['mailer']['transport']['password'])
		->setEncryption($myParams['sw_enc']);

    // Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);

    // Create a message
    $message = new Swift_Message();

    // Set a "subject"
    $message->setSubject($myParams['sw_subject']);

    // Set the "From address"
    $message->setFrom([$myParams['sw_frommail'] => $myParams['my_name']]);

    // Set the "To address" [Use setTo method for multiple recipients, argument should be array]
    $message->addTo( $myParams['sw_tomail2'],'recipient name');

    // Add "CC" address [Use setCc method for multiple recipients, argument should be array]
	//$message->addCc('recipient@gmail.com', 'recipient name');

    // Add "BCC" address [Use setBcc method for multiple recipients, argument should be array]
	//$message->addBcc('recipient@gmail.com', 'recipient name');

    // Add an "Attachment" (Also, the dynamic data can be attached)
	//$attachment = Swift_Attachment::fromPath('example.xls');
	//$attachment->setFilename('report.xls');
	//$message->attach($attachment);

    // Add inline "Image"
	//$inline_attachment = Swift_Image::fromPath('nature.jpg');
	//$cid = $message->embed($inline_attachment);

    // Set the plain-text "Body"
    $message->setBody("This is the plain text body of the message.\nThanks,\nAdmin");

    // Set a "Body"
    $cid = '';
    // POST --> name; email; message;
    $username = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message_inner = htmlspecialchars($_POST['message']);
    //$message->addPart('Message from: <strong></strong><br>Example of inline image:<br><img src="'.$cid.'" width="200" height="200"><br>Thanks,<br>Admin', 'text/html');
    $message->addPart('Message from: "'.$username.'" <strong>"'.$email.'"</strong><br>Message:<br>"'.$message_inner.'"', 'text/html');

    // Send the message
		$result = $mailer->send($message);
        $rs = ['success' => 0, 'message' => 'we send the message!',
            'add_info' => $result,
        ];
        die(json_encode($rs));
	} catch (Exception $e) {
	    $rs = ['success' => 0, 'message' => $e->getMessage() ];
        die(json_encode($rs));
	}
}