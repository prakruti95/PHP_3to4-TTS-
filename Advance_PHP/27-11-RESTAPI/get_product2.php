<?php

    header("Content-Type: application/json");


  $address = 
    [
        [
            "street" => 1,
            "suite" => "Leanne Graham",
            "city"=> "Bret",
            "zipcode"=> "Sincere@april.biz"
        ],
         [
           "street" => 1,
            "suite" => "Leanne Graham",
            "city"=> "Bret",
            "zipcode"=> "Sincere@april.biz"
        ]
      
    ];
    $geo=
    [
        [ 
            "lat" => "-37.3159",
            "lng"=> "81.1496"
        ],
        [
             "lat" => "-37.3159",
             "lng"=> "81.1496"
        ]
       
    ];

    $company=
    [
        [
            "name"=> "Deckow-Crist",
            "catchPhrase"=> "Proactive didactic contingency",
            "bs"=> "synergize scalable supply-chains"
        ],
        [
            "name"=> "Deckow-Crist",
            "catchPhrase"=> "Proactive didactic contingency",
            "bs"=> "synergize scalable supply-chains"
        ]
        
    ];


    $data = 
    [
        [
            "id" => 1,
            "name" => "Leanne Graham",
            "username"=> "Bret",
            "email"=> "Sincere@april.biz",
            "phone" => 111111,
            "Website"=>"aaa.com",
            //"address"=>$address
        ],
         [
            "id" => 2,
            "name" => "Leanne Graham2",
            "username"=> "Bret2",
            "email"=> "Sincere@april.biz2",
             "phone" => 111111,
            "Website"=>"aaa.com"
        ]
      
    ];

   


    $response = 
    [
        "status" => "success",
        "data" => $data,
        "address"=>$address
       
    ];

    echo json_encode($response);
?>