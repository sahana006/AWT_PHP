<?php
if (isset($_POST['submit'])) {
    $num = rand(1, 100);
    $sq = $num * $num;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Square of a Random Number</title>
</head>

<body>
    <div>
        <form action="" method="post">
            <label for="number">Random Number</label>
            <input type="number" disabled value="<?php if (isset($num)) echo "$num"; ?>">
            <br>
            <label for="number">Square</label>
            <input type="square" disabled value="<?php if (isset($num)) echo "$sq"; ?>">
            <input type="submit" name="submit">
        </form>
    </div>
</body>

</html>