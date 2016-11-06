<?php

require_once 'class/freemobile.class.php';

$sms = new FreeMobile();

$sms->setLogin('');
$sms->setApikey('');

$backspace = "%0a";
$sms->setBody("Welcome," . $backspace . "If you receive this SMS, your application work !");

$result = $sms->sendSMS();

echo $result;