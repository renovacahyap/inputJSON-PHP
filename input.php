<?php
include 'koneksi.php';


// $url = "countries.json";
// $json = file_get_contents($url);
// $array = json_decode($json, true);
// var_dump($array) ;

// // memecah data json per record
// // $split = explode("\n", $json);
// // var_dump($split);
// foreach ($array as $row) {

//     //sql insert data ke database mysql tabel pegawai2
//     $sql = "INSERT INTO countries VALUES ('' ,'".$row['name']."', '".$row['code']."')";

//     $result = mysqli_query($connect, $sql);
// }


// echo "Import data berhasil !!";


//baca file json dari url web
$url = "countries.json";
$json = file_get_contents($url);

// memecah data json per record
$split = explode("\n", $json);

foreach ($split as $record) { 
$row = json_decode($record,true);
$name = $row['name'];
$code = $row['code'];

//sql insert data ke database mysql tabel pegawai2
$sql = "INSERT INTO countries VALUES (, '".$name."', '".$code."')";

$result = mysqli_query($connect, $sql);
}

echo "Import data berhasil !!";
?>
