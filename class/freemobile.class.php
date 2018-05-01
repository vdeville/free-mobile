<?php

/**
 * Class FreeMobile
 */
class FreeMobile{


    /**
     * @var string
     */
    private $login;

    /**
     * @var string
     */
    private $apikey;

    /**
     * @var string
     */
    private $body;



    /**
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param string $login
     * @return $this
     */
    public function setLogin(string $login)
    {
        $this->login = $login;
        return $this;
    }

    /**
     * @return string
     */
    public function getApikey()
    {
        return $this->apikey;
    }

    /**
     * @param string $apikey
     * @return $this
     */
    public function setApikey(string $apikey)
    {
        $this->apikey = $apikey;
        return $this;
    }

    /**
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }


    /**
     * @param string $body
     * @return $this
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * @return string
     */
    private function sanitizeBody()
    {
        $body = urlencode($this->body);
        return $body;
    }

    /**
     * @return int
     *
     *  200 : Success
     *
     *  400 : Missing param or message refused (I dont know but when you say 'Have good day !', message is ban)
     *
     *  402 : Too many SMS
     *
     *  403 : Service not activated in your account
     *
     *  500 : Server error, try again
     *
     */
    public function sendSMS(){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://smsapi.free-mobile.fr/sendmsg?user=" . $this->login . "&pass=" . $this->apikey . "&msg=" . $this->sanitizeBody());
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_exec($ch);
        $output = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        return $output;
    }

}
