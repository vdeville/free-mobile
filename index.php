<?php
require_once "class/freemobile.class.php";

if($_POST){
    $sms = new FreeMobile();

    $sms->setLogin($_POST["user"]);
    $sms->setApikey($_POST["apiKey"]);

    $sms->setBody($_POST["text"]);

    // return status code
    echo "Status code: " . $sms->sendSMS();
}



?>
<html>
<body>
<form action="index.php" method="POST">
    <label for="text">MSG</label><input type="text" name="text" /><br>
    <label for="user">ID User<input type="text" name="user" /></label for="user"><br>
    <label for="apiKey">apiKey</label><input type="text" name="apiKey" />
    <input type="submit">
</form>
</body>
</html>