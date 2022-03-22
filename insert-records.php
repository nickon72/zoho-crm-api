<?php

 function insert_leads()
 {

     $access_token = '1000.9fc171f67604981bb66be7b5df5bf35d.8b551aa21077e5d2ced116f1a35554d5';

      $post_data = [
          "data" => [
        [
            "Company"    => "Test Company number2",
            "Last_Name"  => "Vasiliy",
            "First_Name" => "Pupkin-2",
            "Email"      => "pupkin-2@example.com",
            "State"      => "Kirovograd",
            "Phone"     => "2233224545777",
            "Description" => "opisanie proba 2"
        ]
      ],

    "trigger" => [
         "approval",
         "workflow",
         "blueprint"
     ]
    ];


     $ch = curl_init();
     curl_setopt($ch, CURLOPT_URL, "https://www.zohoapis.com/crm/v2/Leads");
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

  insert_leads();

