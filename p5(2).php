<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sort Array</title>
</head>
<body>
    <h1>Sort Array</h1>
    <form action="" method="post">
        <label for="array">Array:</label>
        <input type="text" id="array" name="array" required><br>
        <button type="submit" name="calculate">Calculate</button>
    </form>
    <?php
    if (isset($_POST['calculate'])) {
        $array = $_POST['array'];
        $array = explode(',', $array);
        sort($array);
        echo "<p>Sorted array:</p>";
        echo "<ul>";
        foreach ($array as $value) {
            echo "<li>{$value}</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>