<?php

echo '$numの値を入力してください: ';
$num = trim(fgets(STDIN));

// ここに処理を記述

if($num % 2 == 0 xor $num % $num == 0) {
    echo '素数です';  
}else {
    echo '素数ではありません';
}

