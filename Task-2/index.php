<?php
function Task2($M, $N, $a, $b) {
    // ჩემს მიერ შეყვანილი მონაცემების გადამოწმება
    if (!is_numeric($M) || !is_numeric($N) || !is_numeric($a) || !is_numeric($b)) {
        echo "გთხოვთ, შეიყვანოთ მხოლოდ რიცხვები.";
        return;
    }

    $M = (int)$M;
    $N = (int)$N;
    $a = (int)$a;
    $b = (int)$b;

    if ($M <= 0 || $N <= 0) {
        echo "M და N უნდა იყოს დადებითი რიცხვები.";
        return;
    }

    if ($a > $b) {
        echo "მინიმალური მნიშვნელობა 'a' უნდა იყოს ნაკლები ან ტოლი მაქსიმალური მნიშვნელობისა 'b'.";
        return;
    }

    echo "<table border='1' cellpadding='5'>"; // ცხრილის დასაწყისი

    for ($i = 0; $i < $M; $i++) {
        echo "<tr>"; // თითოეული ახალი რიგის დასაწყისი

        for ($j = 0; $j < $N; $j++) {
            $randomNumber = rand($a, $b); // a-დან b-მდე შუალედში
            echo "<td>$randomNumber</td>"; // უჯრაში რიცხვის დამატება
        }

        echo "</tr>"; // რიგის დასრულება
    }

    echo "</table>"; // ცხრილის დასრულება
}

// ფორმის მონაცემების მიღება და ფუნქციის გამოძახება
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $M = $_POST['M'] ?? 0;
    $N = $_POST['N'] ?? 0;
    $a = $_POST['a'] ?? 0;
    $b = $_POST['b'] ?? 0;

    Task2($M, $N, $a, $b);
}
?>

<form method="post">
    <label>M (რიგების რაოდენობა): <input type="number" name="M" required></label><br>
    <label>N (სვეტების რაოდენობა): <input type="number" name="N" required></label><br>
    <label>a (მინიმალური მნიშვნელობა): <input type="number" name="a" required></label><br>
    <label>b (მაქსიმალური მნიშვნელობა): <input type="number" name="b" required></label><br>
    <input type="submit" value="Generate Table">
</form>
