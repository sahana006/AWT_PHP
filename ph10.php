<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Functions</title>
</head>
<?php
if (isset($_POST['submit'])) {
    $str = $_POST['str'];
    $result;
    switch ($_POST['function']) {
        case "rev":
            $result = strrev($str);
            break;
        case "len":
            $result = strlen($str);
            break;
        case "upp":
            $result = strtoupper($str);
            break;
        case "low":
            $result = strtolower($str);
        case "words":
            $result = str_word_count($str);
            break;
    }
}

?>

<body>
    <form action="" method="post">
        <label for="">Enter your String</label>
        <input type="text" name="str" value="<?php if (isset($_POST['submit'])) echo $_POST['str'];  ?>">
        <br><br>
        <label>Select Function</label>
        <select name="function">
            <option value="rev">Reverse string</option>
            <option value="len">Find Length</option>
            <option value="upp">To Upper</option>
            <option value="low">To lower</option>
            <option value="words">Count no. of Words</option>
            </option>
        </select>
        <br><br>
        <label for="">Result</label>
        <input type="text" name="result" value="<?php if (isset($_POST['submit'])) echo $result;  ?>" disabled>
        <br><br>
        <input type="submit" name="submit">
        <input type="reset" value="reset">
    </form>





</body>

</html>