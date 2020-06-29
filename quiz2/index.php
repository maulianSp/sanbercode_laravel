<?php
/*
$arr = [75,80,60];
$arr[] = 100;

echo "<pre>";
print_r($arr);
echo "</pre>";
*/
/*
$challenges = ["dom","php","oop","SQL"];
$grade = [90,85,95,65,70];
$namaSiswa = "abduh";

if(strlen($namaSiswa) <= 5 && $namaSiswa[strlen($namaSiswa)-1] == "h"){
    echo "benar";
}else{
    echo "salah";
}
*/
/*
$murid = ["nama" => "Adrian", "alamat" => "Bandung", "gender" => "Laki-laki"];
echo "<pre>";
print_r($murid);
echo "</pre>";
*/
/*
function hitung($string_data){
    //ambil value dari $string_data
    $angka = $string_data;

    //ubah simbol pembagian dari : menjadi /
    $angka = str_replace(":","/",$angka);

    // mencari hasil kalkulasi menggunakan function eval()
    $hasil = eval('return '.$angka.';');
    
    //menampilkan hasil kalkulasi
    return $hasil."<br>";
}
echo hitung("102*2"); //204
echo hitung("2+3"); //5
echo hitung("100:25"); //4
echo hitung("10%2"); //0
echo hitung("99-2"); //97
*/

//////////////////////////////////////////////////////
/*
function hitung($string_data){
    //mengambil parameter function
    $angka = $string_data;
    //mencari operator aritmatika menggunakan RegExp
    if(preg_match('/(\d+)(?:\s*)([\+\-\*\:\%])(?:\s*)(\d+)/', $angka, $matches) !== FALSE){
        $operator = $matches[2];

        //mencari kondisi dari operator untuk dikalkulasi
        switch($operator){
            case '+':
                $hasil = $matches[1] + $matches[3];
                break;
            case '-':
                $hasil = $matches[1] - $matches[3];
                break;
            case '*':
                $hasil = $matches[1] * $matches[3];
                break;
            case ':':
                $hasil = $matches[1] / $matches[3];
                break;
            case '%':
                $hasil = $matches[1] % $matches[3];
                break;
        }
    }
    //me-return variabel $hasil
    return $hasil."<br>";
}
echo hitung("102*2"); //204
echo hitung("2+3"); //5
echo hitung("100:25"); //4
echo hitung("10%2"); //0
echo hitung("99-2"); //97
*/

////////////////////

/**
 * CONTOH:
 * perolehan_medali(
 *  array(
 *    array('Indonesia', 'emas'),
 *    array('India', 'perak'),
 *    array('Korea Selatan', 'emas' ),
 *    array('India', 'perak'),
 *    array('India', 'emas'),
 *    array('Indonesia', 'perak'),
 *    array('Indonesia', 'emas'),
 *  )
 * );
 *
 * output:
 * Array(
 *    Array (
 *      [negara] => 'Indonesia'
 *      [emas] => 2
 *      [perak] => 1
 *      [perunggu] => 0
 *    ),
 *    Array (
 *      [negara] => 'India'
 *      [emas] => 1
 *      [perak] => 2
 *      [perunggu] => 0
 *    ),
 *    Array (
 *      [negara] => 'Korea Selatan'
 *      [emas] => 1
 *      [perak] => 0
 *      [perunggu] => 0
 *    )
 * )
 *
 *
 */
function perolehan_medali($arr){
    // Kode kamu di sini
    $hasil = [];
    foreach($arr as $key=>$value){
        $hasil[] = array_count_values($value);
    }
     
     return $hasil;
}
   // TEST CASES
    echo "<pre>";
    print_r (perolehan_medali(
        array(
        array('Indonesia', 'emas'),
        array('India', 'perak'),
        array('Korea Selatan', 'emas' ),
        array('India', 'perak'),
        array('India', 'emas'),
        array('Indonesia', 'perak'),
        array('Indonesia', 'emas')
        )
    ));
    echo "</pre>";
/**
   * output:
   * Array(
   *    Array (
   *      [negara] => 'Indonesia'
   *      [emas] => 2
   *      [perak] => 1
   *      [perunggu] => 0
   *    ),
   *    Array (
   *      [negara] => 'India'
   *      [emas] => 1
   *      [perak] => 2
   *      [perunggu] => 0
   *    ),
   *    Array (
   *      [negara] => 'Korea Selatan'
   *      [emas] => 1
   *      [perak] => 0
   *      [perunggu] => 0
   *    )
   * )
   */
    echo "<pre>";
    print_r(perolehan_medali([])); // no data
    echo "</pre>";