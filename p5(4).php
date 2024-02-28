<!DOCTYPE html>
<html>
<head>
    <title>Morse Code Encoder</title>
</head>
<body>
    <h1>Morse Code Encoder</h1>
    <form method="post">
        <label for="message">Enter your message:</label>
        <input type="text" name="message" id="message" required>
        <input type="submit" value="Encode">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Define the Morse code mapping
        $morseMap = array(
            'a' => '.-', 'b' => '-...', 'c' => '-.-.', 'd' => '-..', 'e' => '.',
            'f' => '..-.', 'g' => '--.', 'h' => '....', 'i' => '..', 'j' => '.---',
            'k' => '-.-', 'l' => '.-..', 'm' => '--', 'n' => '-.', 'o' => '---',
            'p' => '.--.', 'q' => '--.-', 'r' => '.-.', 's' => '...', 't' => '-',
            'u' => '..-', 'v' => '...-', 'w' => '.--', 'x' => '-..-', 'y' => '-.--',
            'z' => '--..', ' ' => ' '
        );
        
        // Get the user input
        $userInput = strtolower($_POST["message"]);

        // Encode the message
        $encodedMessage = '';
        for ($i = 0; $i < strlen($userInput); $i++) {
            $char = $userInput[$i];
            if (isset($morseMap[$char])) {
                $encodedMessage .= $morseMap[$char] . ' ';
            }
        }

        // Display the encoded message
        echo "<h2>Encoded Morse Code:</h2>";
        echo "<pre>$encodedMessage</pre>";
    }
    ?>
</body>
</html>
