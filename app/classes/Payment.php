<?php

class Payment {
    private $api_url;
    private $api_key;

    public function __construct($url, $key) {
        $this->api_url = $url;
        $this->api_key = $key;
    }

    public function makeRequest($method, $data) {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $this->api_url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Authorization: Bearer ' . $this->api_key
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        return json_decode($response);
    }
}

// API'ye bağlanmak için kullanacağımız URL ve API anahtarını tanımlıyoruz
$url = 'http://212.175.89.13:40259/PaymentType/List';
$key = ':Z~pvK0Se';

// Payment sınıfını kullanarak API'ye istek gönderiyoruz
$api = new Payment($url, $key);
$response = $api->makeRequest('GET', array('company','langu','paymtype','stext'));

// Yanıtı işliyoruz
if ($response === false) {
    echo 'Curl hatası: ' . curl_error($api);
} else {
    $http_code = curl_getinfo($api, CURLINFO_HTTP_CODE);
    if ($http_code != 200) {
        echo 'İstek başarısız oldu: ' . $response->error_message;
    } else {
        echo 'İstek başarıyla tamamlandı.';
    }

}
