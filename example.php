<?php

require_once 'class/freemobile.class.php';

$sms = new FreeMobile();

$sms->setLogin('')->setApikey('');

$sms->setBody(
"Welcome,
If you receive this SMS, your application work !"
);

$result = $sms->sendSMS();

echo $result;
