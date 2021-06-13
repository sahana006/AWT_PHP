<?php
$num = $_POST['numb'];
$total = 0;
$x = $num;
while ($x != 0) {
    $rem = $x % 10;
    $total = $total + $rem * $rem * $rem;
    $x = $x / 10;
}
if ($num == $total) {
    echo "<h1>Yes it is an Armstrong number</h1>";
} else {
    echo "<h1>No it is not an armstrong number</h1>";
}
