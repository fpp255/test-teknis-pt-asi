<?php
function factorialDiv($n) {
    if ($n < 0) {
        throw new InvalidArgumentException("n harus bilangan bulat >= 0");
    }

    // Hitung faktorial
    $fact = 1;
    for ($i = 2; $i <= $n; $i++) {
        $fact *= $i;
    }

    // Hitung hasil bagi faktorial / 2^n
    $result = $fact / pow(2, $n);

    // Bulatkan ke atas
    return (int) ceil($result);
}

// Contoh penggunaan
for ($i = 0; $i <= 10; $i++) {
    echo "f($i) = " . factorialDiv($i) . PHP_EOL;
}
