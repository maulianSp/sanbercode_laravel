<?php
function palindrome_angka($angka) {
    for($i=$angka;$i<=($i + 1);$i++){
        $a = $i;   
        $b = strrev($a);
        if ($a == $b){   
            echo "$a <br>"; 
            break;  
        }
    }
}


// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>