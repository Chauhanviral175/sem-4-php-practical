<!DOCTYPE html>
<html>
<head>
    <title>GTU Grading System</title>
</head>
<body>
    <h1>GTU Grading System</h1>
    <form method="POST">
        <p>Enter marks for Subject 1: <input type="number" name="sub1" min="0" max="100"></p>
        <p>Enter marks for Subject 2: <input type="number" name="sub2" min="0" max="100"></p>
        <p>Enter marks for Subject 3: <input type="number" name="sub3" min="0" max="100"></p>
        <p>Enter marks for Subject 4: <input type="number" name="sub4" min="0" max="100"></p>
        <input type="submit" value="Calculate Grades">
    </form>

    <?php
    if ($_POST) {
        $sub1 = $_POST['sub1'];
        $sub2 = $_POST['sub2'];
        $sub3 = $_POST['sub3'];
        $sub4 = $_POST['sub4'];

        $totalMarks = $sub1 + $sub2 + $sub3 + $sub4;
        $percentage = ($totalMarks / 400) * 100;

        echo "<h2>Result:</h2>";
        echo "<table border='1'>";
        echo "<tr><th>Subject</th><th>Marks</th><th>Grade</th></tr>";

        $subjects = [$sub1, $sub2, $sub3, $sub4];
        $grades = ['AA', 'AB', 'BB', 'BC', 'CC', 'CD', 'DD', 'FF'];

        foreach ($subjects as $index => $marks) {
            $grade = '';
            if ($marks >= 85) {
                $grade = 'AA';
            } elseif ($marks >= 75) {
                $grade = 'AB';
            } elseif ($marks >= 65) {
                $grade = 'BB';
            } elseif ($marks >= 55) {
                $grade = 'BC';
            } elseif ($marks >= 45) {
                $grade = 'CC';
            } elseif ($marks >= 40) {
                $grade = 'CD';
            } elseif ($marks >= 35) {
                $grade = 'DD';
            } else {
                $grade = 'FF (FAIL)';
            }

            echo "<tr><td>Subject " . ($index + 1) . "</td><td>$marks</td><td>$grade</td></tr>";
        }

        echo "</table>";
        echo "<p>Total Marks: $totalMarks</p>";
        echo "<p>Percentage: $percentage%</p>";
    }
    ?>
</body>
</html>
