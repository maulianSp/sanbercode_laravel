<?php
function ubah_huruf($string){
//kode di sini
$split = str_split($string);
$hitung = count($split);
$hasil = "";
for($i=0;$i<$hitung;$i++){
    $sp = $split[$i];
    $sp++;
    $hasil .= $sp;
}
return $hasil."<br>";
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>