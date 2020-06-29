<?php
function pasangan_terbesar($angka){
// kode di sini
    $panjang = strlen($angka);
    $data = [];
    for($i=0;$i<=$panjang;$i++){
        $data[$i] = substr($angka,$i,2);
        $nilai[$i] = $data[$i];
    }
    $hasil = max($nilai)."<br>";
    return $hasil;
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>