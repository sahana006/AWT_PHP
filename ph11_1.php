<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        if (isset($_POST['submit'])) {
            $items = $_POST['items'];
            $prices = $_POST['prices'];

            $item_array = explode(",", $items);
            $price_array = explode(",", $prices);
        }
        ?>
        <table border>
            <th>Item</th>
            <th>Cost</th>
            <?php
            for ($i = 0; $i < count($item_array); $i++) {
                echo "<tr>";
                echo "<td>" . $item_array[$i] . "</td>";
                echo "<td>" . $price_array[$i] . "</td>";
                echo "</tr>";
            }
            echo "</table><br>";
            $maxIndex = array_search(max($price_array), $price_array);
            $minIndex = array_search(min($price_array), $price_array);

            echo "<br>Most Expensive Item is " . $item_array[$maxIndex] . " which costs Rs. " . $price_array[$maxIndex];
            echo "<br>Cheapest Item is " . $item_array[$minIndex] . " which costs Rs. " . $price_array[$minIndex];
            ?>
            <br>
            <a href="./ph11.php">Go back</a>
</body>
</html>