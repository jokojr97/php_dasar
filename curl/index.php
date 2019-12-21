<?php

function bacaHTML($url){

    // inisialisasi CURL

    $data = curl_init();

    // setting CURL

    curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);

    curl_setopt($data, CURLOPT_URL, $url);

    // menjalankan CURL untuk membaca isi file

    $hasil = curl_exec($data);

    curl_close($data);

    return $hasil;

}

echo bacaHTML('http://bos.bojonegorokab.go.id/');

//mengambil data dari kompas

$bacaHTML = bacaHTML("http://bos.bojonegorokab.go.id/");


//membuat dom dokumen

$dom = new DomDocument();


//mengambil html dari kompas untuk di parse


@$dom->loadHTML($bacaHTML);


?>

