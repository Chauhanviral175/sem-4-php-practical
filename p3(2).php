<!DOCTYPE html>
<html>
<head>
    <title>Employee Salary Calculator</title>
</head>
<body>
    <h1>Employee Salary Calculator</h1>
    <form method="post">
        <label for="basicSalary">Basic Salary:</label>
        <input type="number" id="basicSalary" name="basicSalary" required>
        <br>
        <input type="submit" value="Calculate Net Salary">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve the basic salary from the form
        $basicSalary = $_POST["basicSalary"];

        // Calculate other components
        $da = 0.5 * $basicSalary;
        $hra = 0.1 * $basicSalary;
        $medical = 0.04 * $basicSalary;
        $grossSalary = $basicSalary + $da + $hra + $medical;

        $insurance = 0.07 * $grossSalary;
        $pf = 0.05 * $grossSalary;
        $deduction = $insurance + $pf;

        // Calculate net salary
        $netSalary = $grossSalary - $deduction;

        // Display the results
        echo "<h2>Salary Details:</h2>";
        echo "<p>Basic Salary: $basicSalary</p>";
        echo "<p>Dearness Allowance (DA): $da</p>";
        echo "<p>House Rent Allowance (HRA): $hra</p>";
        echo "<p>Medical Allowance: $medical</p>";
        echo "<p>Gross Salary: $grossSalary</p>";
        echo "<p>Insurance Deduction: $insurance</p>";
        echo "<p>Provident Fund (PF) Deduction: $pf</p>";
        echo "<h3>Net Salary: $netSalary</h3>";
    }
    ?>
</body>
</html>
