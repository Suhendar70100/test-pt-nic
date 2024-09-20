<?php

function countNumber() {
    $count = 0;
    $numbersNine = [];
    for ($i = 1; $i <= 100; $i++) {
        if (strpos((string)$i, '9') !== false) {
            $numbersNine[] = $i; 
            $count += substr_count((string)$i, '9');
        }
    }
    
    echo "Angka yang mengandung angka 9: " . implode(", ", $numbersNine) . "\n";
    
    return $count;
}

echo "Jumlah angka 9 yang muncul dari 1 hingga 100 adalah: " . countNumber();
?>
