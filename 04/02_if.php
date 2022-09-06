<?php

echo '$pointの値を入力してください: ';
$point = trim(fgets(STDIN));

// ここに処理を記述


if ($point % 2 == 0 ) {
    echo 'xは偶数です';
}else {
    echo 'xは奇数です';
}

