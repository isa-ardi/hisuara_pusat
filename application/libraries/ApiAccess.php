<?php 

class ApiAccess {
    private $api_url;
    private $token;

    public function __construct($api_url, $token) {
        $this->api_url = $api_url;
        $this->token = $token;
    }

    public function get($endpoint) {
        $ch = curl_init($this->api_url . $endpoint);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization: Bearer ' . $this->token
        ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }
}