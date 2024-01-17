<?php 

echo "====Program Angkot Sederhana=== <br> <br>";
 function cek($noAngkt) {
    if ($noAngkt == 1 || $noAngkt == 3 || $noAngkt == 10 || $noAngkt == 11){
        echo "Angkot no - $noAngkt tersedia <br>";
    }elseif ($noAngkt == 2 || $noAngkt == 9 || $noAngkt == 12 || $noAngkt == 17){
        echo "Angkot no - $noAngkt Sedang diperbaiki <br>";
    }else{
        echo "Angkot no - $noAngkt tidak tersedia <br>";
    }
 }
  for ($i = 1; $i <= 20; $i++){
    echo cek($i);
  }

?>