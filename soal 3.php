<?php

$kalimat = "Leady Pramudita";
$jumlah = strlen($kalimat);
$total = 0;
$vokal = Array('a','e','i','o','u');

for ($i=0;$i<strlen($kalimat);$i++)
{
    for ($j = 0;$j<5;$j++)
        if ($kalimat[$i] == $vokal[$j])
        {
            $total++;
            break;
        }
}
echo "Kata = $kalimat";
echo "<br />";
echo "Jumlah huruf vokal = $total";
?>