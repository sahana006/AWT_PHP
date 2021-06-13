<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse a number</title>
</head>

<body>
    <form action="" method="post">
        <label for="numb">Enter Number </label>
        <input type="number" name="numb" id="numb">
        <input type="submit" name="submit">
    </form>
</body>

</html>
<?php

if (isset($_POST['numb'])) {
    $num = $_POST['numb'];
    $revnum = 0;
    while ($num > 1) {
        $rem = $num % 10;
        $revnum = ($revnum * 10) + $rem;
        $num = ($num / 10);
    }
    echo "<h1>Reverse number is: $revnum"."</h1>";
}
?>