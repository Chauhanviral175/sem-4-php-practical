<!DOCTYPE html>
<html>
<head>
    <title>Car Company Lookup</title>
</head>
<body>
    <h1>Car Company Lookup</h1>
    <form method="POST">
        Enter the name of the car: <input type="text" name="carName">
        <input type="submit" value="Find Company">
    </form>

    <?php
    if ($_POST) {
        $carName = strtolower($_POST['carName']); // Convert input to lowercase for case-insensitivity

        // Define the car-company mapping
        $carCompanies = [
            'safari' => 'Tata',
            'nexon' => 'Tata',
            'tigor' => 'Tata',
            'tiago' => 'Tata',
            'xuv700' => 'Mahindra',
            'xuv300' => 'Mahindra',
            'bolero' => 'Mahindra',
            'i20' => 'Hyundai',
            'verna' => 'Hyundai',
            'venue' => 'Hyundai',
            'creta' => 'Hyundai',
            'swift' => 'Suzuki',
            'alto' => 'Suzuki',
            'baleno' => 'Suzuki',
            'brezza' => 'Suzuki',
        ];

        if (array_key_exists($carName, $carCompanies)) {
            $company = $carCompanies[$carName];
            echo "<p>The car '$carName' belongs to $company.</p>";
        } else {
            echo "<p>Car not found in the database.</p>";
        }
    }
    ?>
</body>
</html>
