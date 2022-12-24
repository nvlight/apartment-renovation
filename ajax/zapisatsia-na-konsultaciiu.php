<?php

session_start();

//
if (!isset($_SESSION))
{
    $rs = ['success' => 0, 'message' => 'Start without session!'];
    die(json_encode($rs));
}

//
if (!array_key_exists('app_start', $_SESSION)){
    $rs = ['success' => 0, 'message' => 'Start without session!'];
    die(json_encode($rs));
}

//
if ($_SERVER['REQUEST_METHOD'] !== 'POST'){
    $rs = ['success' => 0, 'message' => 'there is no POST!'];
    die(json_encode($rs));
}

require_once '../vendor/autoload.php';
require_once '../php/functions.php';

/////

$s = serialize($_POST);
$sak = array_keys($_POST);
//echo Debug::d($sak);

// prepare need form keys and patterns for checking...
$need_form_keys = [
    ['Name','textd02e57_715ae6','^[А-Яа-яЁё\s_-]+$'],
    ['Phone','field259b0c_7d5bc8','^\+?[0-9]{11}$'],
    ['Captcha','sup_captcha','^[a-zA-Z\d]+$'],
];
$additional_form_keys = [
    // empty
];

// check for needed form keys
$all_keys_is_exists = true; 
foreach($need_form_keys as $k => $v){
    
    if (!in_array($v[1], $sak, true)) {
        $all_keys_is_exists = false; 
        break; 
    }
}
if (!$all_keys_is_exists){
    $rs = ['success' => 0, 'message' => 'not at all need keys we have!' , 'data' => $s];
    die(json_encode($rs));
}

// check form values from pattern
$all_checks_fine = true; $last_key_unchecked = '';
foreach($need_form_keys as $k => $v){
    $pattern = "#".$v[2]."#ui";
    if (!preg_match($pattern, $_POST[$v[1]])){
        $all_checks_fine = false;
        $last_key_unchecked = $v[1];
        break; 
    }
}
if (!$all_checks_fine){
    $rs = ['success' => 0, 'message' => 'Заполните все поля!' , 'last_error' => $last_key_unchecked];
    die(json_encode($rs));
}

// check captcha...
if ( mb_strtolower($_SESSION['captcha']) !== mb_strtolower($_POST['sup_captcha']) ){
    $rs = ['success' => 0, 'message' => 'Неправильный ввод капчи!' 
    //,'captcha' => $_SESSION['captcha']
    //,'right_captcha_:D' => $_SESSION['captcha']
    ];
    die(json_encode($rs));
}

// testing output for me!
// $rs = ['success' => 1, 'message' => 'test_success', 'data' => $s];
// die(json_encode($rs));

/////



mySendMailMessage($s,$need_form_keys,$additional_form_keys);

function mySendMailMessage($s,$need_form_keys,$additional_form_keys){
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
    // $username =      array_key_exists('name', $_POST) ? htmlspecialchars($_POST['name']) : 'name';
    // $email =         array_key_exists('email', $_POST) ? htmlspecialchars($_POST['email']) : 'email';
    // $message_inner = array_key_exists('message', $_POST) ? htmlspecialchars($_POST['message']) : 'message'; 
    // $message->addPart('Message from: <strong></strong><br>Example of inline image:<br><img src="'.$cid.'" width="200" height="200"><br>Thanks,<br>Admin', 'text/html');
    // $message->addPart('Message from: "'.$username.'" <strong>"'.$email.'"</strong><br>Message:<br>"'.$message_inner.'"', 'text/html');
    // $message->addPart('Hi there!<br>', 'text/html');
    // $message->addPart('Data string: '.$s, 'text/html');
    $message->addPart('Заявка на консультацию', 'text/html');
    foreach($need_form_keys as $k => $v){
        $clear_val = Debug::encode($_POST[$v[1]]);
        $message->addPart($v[0] . ': ' . $clear_val, 'text/html');
    }
    foreach($additional_form_keys as $k => $v){
        if (array_key_exists($v[1], $_POST)) {
          $clear_val = Debug::encode($_POST[$v[1]]);
          $message->addPart($v[0] . ': ' . $clear_val, 'text/html');  
        }
    }


    // Send the message
        $result = $mailer->send($message);
        $rs = ['success' => 0, 'message' => 'Сообщение успешно отправлено!',
            'add_info' => $result,
        ];
        die(json_encode($rs));
    } catch (Exception $e) {
        $rs = ['success' => 0, 'message' => 'Ошибка отправки, попробуйте повторить позднее!',
            //'message' => $e->getMessage(),
            //'good_captha' => $_SESSION['captcha']
        ];
        die(json_encode($rs));
    }
}