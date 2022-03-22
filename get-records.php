<?php


function get_records()
{
    $access_token = '1000.9fc171f67604981bb66be7b5df5bf35d.8b551aa21077e5d2ced116f1a35554d5';


    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://www.zohoapis.com/crm/v2/Leads");
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Authorization: Zoho-oauthtoken ' . $access_token,
        'Content-Type: application/x-www-form-urlencoded'));

    $response = curl_exec($ch);
   // $response = json_encode($response);
    print_r($response);

}

  get_records();
