<?php
define('API_BASE', 'ocalhost/api-teste/api/index.php?email=');
echo '<h1>APP</h1>';

$result=api_request('valid');
echo '<pre>';
print_r($result);
function api_request($email){
    $client=curl_init(API_BASE .$email);
    curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
    $response=curl_exec($client);
    return json_decode($response,true);
}

?>