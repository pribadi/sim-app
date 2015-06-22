<?php
$tanggal = date('Y-m-d');

$pisah = explode("-", $tanggal);
$tgl = $pisah[2];
$bln = $pisah[1];
$thn = $pisah[0];

echo "<b> Tanggal Awal </b><br>";
echo "$tanggal <br><br>";
echo "<b> Tanggal Sesudah Explode </b><br>";
echo "$tgl-$bln-$thn";



echo "<hr>";



$data = array("Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu");
// jadikan satu dengan penghubung ->
$implode = implode("->", $data);

// tampilkan kalimat sebelum implode
echo "<b> Sebelum Implode </b><br>";
print_r($data);
echo "<br><br><br>";

// tampilkan kalimat sesudah perintah implode
echo "<b> Sesudah Implode </b><br>";
echo "<font face='Courier New'> $implode </font>";
 ?>