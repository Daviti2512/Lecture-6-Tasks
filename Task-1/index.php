<?php
function Task1() {
    echo "<table border='1' cellpadding='5'>"; // ცხრილის დასაწყისი

    for ($i = 0; $i < 10; $i++) {
        echo "<tr>"; // თითოეული ახალი რიგის დასაწყისი

        for ($j = 0; $j < 10; $j++) {
            $randomNumber = rand(10, 99);
            echo "<td>$randomNumber</td>"; // უჯრაში რიცხვის დამატება
        }

        echo "</tr>"; // რიგის დასრულება
    }

    echo "</table>"; // ცხრილის დასრულება
}

Task1();
?>
