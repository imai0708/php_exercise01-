<?php

echo '$numの値を入力してください';
$num = trim(fgets(STDIN));

// ここに処理を記述

//$judge = True;


if($num % 2 == 0 xor $num % $num == 0) {
    echo '素数です';  
}else {
    echo '素数ではありません';
}

/*
if ($num == 1) {
    $judge = False;
}

for ($i = 2; $i < $num; $i++) {
    if ($num % $i == 0) {
        $judge = False;
        // 素数と判定されたら処理を抜ける
        break;
    }
}

if ($judge) {
    echo $num . 'は素数です。';
} else {
    echo $num . 'は素数ではありません。';
}
*/
