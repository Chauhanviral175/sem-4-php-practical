<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <h1>Simple Calculator</h1>
    <form action="" method="post">
        <label for="num1">Number 1:</label>
        <input type="number" id="num1" name="num1" required><br>
        <label for="operator">Operator:</label>
        <select id="operator" name="operator" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select><br>
        <label for="num2">Number 2:</label>
        <input type="number" id="num2" name="num2" required><br>
        <button type="submit" name="calculate">Calculate</button>
    </form>
    <?php
    if (isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $operator = $_POST['operator'];
        $num2 = $_POST['num2'];

        switch ($operator) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                if ($num2 == 0) {
                    echo "Error: Division by zero is not allowed.";
                    return;
                }
                $result = $num1 / $num2;
                break;
            default:
                echo "Error: Invalid operator.";
                return;
        }

        echo "<p>Result: $num1 $operator $num2 = $result</p>";
    }
    ?>
</body>
</html>