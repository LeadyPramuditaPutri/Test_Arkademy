<?php

$tanggal_1 = "2019-02-20";
$tanggal_2 = "2019-02-24";

// memecah bagian-bagian dari tanggal $date1
$date1 = explode("-", $tanggal_1);

// membaca bagian-bagian dari $date1
$year = $date1[0];
$month = $date1[1];
$day = $date1[2];




echo "<p>Tanggal yang merupakan hari adalah:</p>";


$i = 0;


$sum = 0;


do
{

   $tanggal = date("Y-m-d", mktime(0, 0, 0, $month, $day+$i, $year));

   if (date("a", mktime(0, 0, 0, $month, $day+$i, $year)) == 0)
   {
     $sum++;
     echo $tanggal."<br>";
   } 	 

 
   $i++;
}
while ($tanggal != $tanggal_2);   


echo "<p>Jumlah hari  antara ".$tanggal_1." - ".$tanggal_2." adalah: ".$sum."</p>";


?>
