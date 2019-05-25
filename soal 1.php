
<?php
// array
$array = Array (
    "0" => Array (
        "Name" => "Leady",
        "Address" => "Kampung Baru",
        "Hobiess" => Array (
            "reading a comic",
            "travelling"
        ),
        "is_married" =>  "not yet",
        "School" => Array (
            "Senior High School" => "SMA YPI Tunas Bangsa Palembang",
            "University" => "Lampung University"
        ),
        "Skill" => Array (
            "Name" => "HTML",
            "Score" => "8"
        ),
    ),
    "1" => Array (
        "Name" => "pramudita",
        "Address" => "Kampung Baru",
        "Hobiess" => Array (
            "reading a comic",
            "travelling"
        ),
        "is_married" =>  "not yet",
        "School" => Array (
            "Senior High School" => "SMA YPI Tunas Bangsa Palembang",
            "University" => "Lampung University"
        ),
        "Skill" => Array (
            "Name" => "HTML",
            "Score" => "8"
        ),
    ),
    "2" => Array (
        "Name" => "putri",
        "Address" => "Kampung Baru",
        "Hobiess" => Array (
            "reading a comic",
            "travelling"
        ),
        "is_married" =>  "not yet",
        "School" => Array (
            "Senior High School" => "SMA YPI Tunas Bangsa Palembang",
            "University" => "Lampung University"
        ),
        "Skill" => Array (
            "Name" => "HTML",
            "Score" => "8"
        ),
    ),
);

// encode array to json
$json = json_encode(array('data1' => $array));

// write json to file
if (file_put_contents("data1.json", $json))
    echo "File JSON sukses dibuat..." ;
        
    
else
    echo "Oops! Terjadi error saat membuat file JSON...";



?>
