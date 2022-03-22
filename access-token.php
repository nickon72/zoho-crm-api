<?php

include 'function.php';


function generate_access_token()
{
    $post =[
        'refresh_token'  => '1000.6c7c88fd6a937b5a96db1ed5a2fd8795.3cd29b70cdeb2027ef84d034949ea75c',
        'client_id'      => '1000.F6X9SHJ3V6MK41LDITLAKN0EL80RTE',
        'client_secret'  => '3bc7c4399ae4f83d12f2a14ba073aa32db9bee2caf',
        'grant_type'     => 'refresh_token'
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://accounts.zoho.com/oauth/v2/token");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));

    $response = curl_exec($ch);
    $response = json_encode($response);
    dd($response);

}
generate_access_token();
