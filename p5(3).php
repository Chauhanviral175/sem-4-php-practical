<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrix Multiplication</title>
</head>
<body>
    <h1>Matrix Multiplication</h1>
    <form action="" method="post">
        <label for="matrix1">Matrix 1:</label>
        <textarea id="matrix1" name="matrix1" required></textarea><br>
        <label for="matrix2">Matrix 2:</label>
        <textarea id="matrix2" name="matrix2" required></textarea><br>
        <button type="submit" name="calculate">Calculate</button>
    </form>
    <?php
    if (isset($_POST['calculate'])) {
        $matrix1 = $_POST['matrix1'];
        $matrix2 = $_POST['matrix2'];

        $matrix1_rows = 3;
        $matrix1_cols = 3;
        $matrix2_cols = 3;

        $matrix1_elements = explode("\n", $matrix1);
        $matrix2_elements = explode("\n", $matrix2);

        $matrix1_array = [];
        $matrix2_array = [];

        for ($i = 0; $i < $matrix1_rows; $i++) {
            $row = explode(" ", trim($matrix1_elements[$i]));
            if (count($row) != $matrix1_cols) {
                echo "<p>Invalid matrix 1 format.</p>";
                return;
            }
            $matrix1_array[$i] = $row;
        }

        for ($i = 0; $i < $matrix2_cols; $i++) { // Changed $matrix2_rows to $matrix2_cols
            $row = explode(" ", trim($matrix2_elements[$i]));
            if (count($row) != $matrix2_cols) {
                echo "<p>Invalid matrix 2 format.</p>";
                return;
            }
            $matrix2_array[$i] = $row;
        }

        $result_array = [];

        for ($i = 0; $i < $matrix1_rows; $i++) {
            $row = [];
            for ($j = 0; $j < $matrix2_cols; $j++) {
                $sum = 0;
                for ($k = 0; $k < $matrix1_cols; $k++) {
                    $sum += $matrix1_array[$i][$k] * $matrix2_array[$k][$j];
                }
                $row[] = $sum;
            }
            $result_array[] = $row;
        }

        echo "<p>Result:</p>";
        echo "<table border='1'>";
        for ($i = 0; $i < $matrix1_rows; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $matrix2_cols; $j++) {
                echo "<td>{$result_array[$i][$j]}</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>