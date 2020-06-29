<?php

function papan_catur($angka) {
// tulis kode di sini
    for($row=1;$row<=$angka;$row++){
        $a = 1;
        if($row%2==0){
            $a = $a - 1;
        }
        for($col=1;$col<=(($angka * 2) - 1);$col++){
            $total=$row+$col;
            if($total%2==0){
                echo "#";
            }else{
                echo "&nbsp;&nbsp;";
            }
        }
        echo "<br>";
    }
    echo "<hr>";
}

// TEST CASES
echo papan_catur(4);
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/
echo papan_catur(5) ;
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/