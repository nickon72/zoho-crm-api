<?php

function convert_contact()
{

    $access_token = '1000.9fc171f67604981bb66be7b5df5bf35d.8b551aa21077e5d2ced116f1a35554d5';

    $post_data = [
        "data" => [
            [
                "overwrite"         => true,
                "notify_lead_owner" => true,
                "notify_new_entity_owner" => true,
                "Accounts"          => "5249291000000361001",
                "Contacts"          => "5249291000000384001",
                "assign_to"         => "5249291000000361001",

            ]
        ],

        "Deals" => [
                "Deal_Name"     => "Robert",
                "Closing_Date"  => "2020-07-24",
                "Stage"         => "Closed Won",
                "Amount"        > 56.6
        ],

        "carry_over_tags"=> [
            "Contacts" => [
            "tag1",
            "tag2"
        ],
                "Accounts" => [
                    "tag1"
              ],
                "Deals" => [
                    "tag1"
               ]
       ]

    ];


    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://www.zohoapis.com/crm/v2/Leads/5249291000000384001/actions/convert");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post_data));
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Authorization: Zoho-oauthtoken ' . $access_token,
        'Content-Type: application/x-www-form-urlencoded'));

    $response = curl_exec($ch);
    $response = json_encode($response);

    var_dump($response);
}

convert_contact();
