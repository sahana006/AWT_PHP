<?php
if (isset($_POST['submit'])) {
    $present = $_POST['present'];
    $previous = $_POST['previous'];
    $unit = $present - $previous;
    $bill = 0;
    if ($unit < 100) {
        $bill = $unit * 3;
    } elseif ($unit < 200) {
        $bill += 100 * 3;
        $bill += ($unit - 100) * 4;
    } elseif ($unit < 300) {
        $bill += 100 * 3;
        $bill += 100 * 4;
        $bill += ($unit - 200) * 5;
    } else {
        $bill += 100 * 3;
        $bill += 100 * 4;
        $bill += 100 * 5;
        $bill += ($unit - 300) * 6;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Bill</title>
</head>

<body>
    <form action="" method="post">
        <label for="prev">Previous Reading</label>
        <input type="number" name="previous" id="prev">
        <br>
        <br>
        <label for="prev">Present Reading</label>
        <input type="number" name="present" id="prev">
        <br>
        <br>
        <label for="prev">Bill Amount</label>
        <input type="number" disabled value="<?php echo"$bill"; ?>">
        <br>
        <br>
        <input type="submit" value="Generate Bill" name="submit">
    </form>
</body>

</html>