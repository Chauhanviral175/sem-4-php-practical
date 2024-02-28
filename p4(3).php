<!DOCTYPE html>
<html>
<body>

<h2>Fibonacci Series Up to a Given Term</h2>

<form action="" method="post">
    Enter the term: <input type="number" name="n" />
    <input type="submit" value="Generate Series" />
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = htmlspecialchars($_POST["n"]);

    $first_num = 0;
    $second_num = 1;

    echo "Fibonacci Series: $first_num, $second_num";

    for ($i = 2; $i < $n; $i++) {
        $next_num = $first_num + $second_num;
        echo ", $next_num";

        $first_num = $second_num;
        $second_num = $next_num;
    }
}
?>

</body>
</html>