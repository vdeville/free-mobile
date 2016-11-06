#  Simple library to call Free API SMS

## How to use ?

```php
<?php

require_once 'class/freemobile.class.php';`

// Set login (Your Free ID)
$sms->setLogin(119199199);

// Set your acces key (Find it in your account on mobile.free.fr)
$sms->setApikey('YOUR API KEY');

// Set body text message for your SMS
$sms->setBody('Hello world!');

// Send SMS and Get the status code
echo "Status code: " . $sms->sendSMS();

```
Valentin DEVILLE