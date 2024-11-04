<?php
function count($number) {
    // ამოწმებს, რომ რიცხვი არის მთელი და აბსოლუტურ მნიშვნელობას იყენებს
    $number = abs((int)$number);
    
    // ითვლის რიცხვის სიმბოლოების რაოდენობას
    $digitCount = strlen((string)$number);
    
    return $digitCount;
}

// ფუნქციის ტესტირება
$inputNumber = -1234567;
echo "რიცხვი {$inputNumber} არის " . count($inputNumber) . " ნიშნა.";
?>
