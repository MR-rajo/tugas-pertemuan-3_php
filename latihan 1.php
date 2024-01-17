<?php 

$namaLengkap = "Dimas Putra Agustav";
$umur = 16;
$kelas = "X RPL 2";
$ttl = "Jakarta, 17 Agustus 2007";
$no = "0819 3567 9330";
$almt = "Jl. Mangga Besar XII, Jakarta Pusat";

function myBiodata(){
    global $namaLengkap, $umur, $kelas, $ttl, $no, $almt;
    echo "=== Program Biodata Sederhana Function === <br/> <br/>";
    echo "Nama Lengkap : $namaLengkap <br/>";
    echo "Umur : $umur <br/>";
    echo "Kelas : $kelas <br/>";
    echo "Tempat/Tanggal Lahir : $ttl <br/>";
    echo "No whatsApp : $no <br/>";
    echo "Alamat : $almt <br/>";
}

echo myBiodata();

?>