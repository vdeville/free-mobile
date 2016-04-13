<?php
if($_POST){
    $text = $_POST["text"];
    $user = $_POST["user"];
    $apiKey = $_POST["apiKey"];

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "https://smsapi.free-mobile.fr/sendmsg?user=$user&pass=$apiKey&msg=$text");
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);

    $output = curl_exec($ch);
    curl_close($ch);

    echo $output;
}



?>
<html>
<head></head>
<body>
<form action="freemobile.php" method="POST">
    <label for="text">MSG</label><input type="text" name="text" /><br>
    <label for="user">ID User<input type="text" name="user" /></label for="user"><br>
    <label for="apiKey">apiKey</label><input type="text" name="apiKey" />
    <input type="submit">
</form>
</body>
</html>