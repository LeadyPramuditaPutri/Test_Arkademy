
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
        "is_married" => false,
        "list_School" => Array (
            "Senior High School" => Array (
                "Tunas Bangsa Palembang",
                "year_in" => "2012",
                "year_out" => "2015"
             ),
            ),
            
            "University" => Array (
                "Lampung University",
                "year_in" => "2015",
                "year_out" => "until now"
             ),
        "Skill" => Array (
            "Name" => "HTML",
            "level" => "Beginner"
        ),
        "interest_in_coding" => true

);

// encode array to json
$json = json_encode(array('data1' => $array));

// write json to file
if (file_put_contents("data.json", $json))
    echo "File JSON sukses dibuat..." ;
        
    
else
    echo "Oops! Terjadi error saat membuat file JSON...";



?>
