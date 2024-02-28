<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information Form</title>
    <style>
        html {
            font-size: 16px;
            height: auto;
            background:whight;
        }
        h2 {
            text-align: center;
        }
        .form {
            margin: auto;
            width: 40%;
            border: 3px solid green;
            padding: 10px;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.300);
            box-shadow: inset;
            background-color: rgba(255, 255, 255, 0.600);
            border-radius: 15px;
        }
        input,textarea {
            margin-top: 20px;
        }
        .php {
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>User Information Form</h2>
    <form class="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Name:- </label>
        <input type="text" id="name" name="name" placeholder="Entre Your Name"><br>

        <label for="email">Email:- </label>
        <input type="email" id="email" name="email" placeholder="Enter Your Email Address"><br>

        <label for="age">Age:- </label>
        <input type="number" id="age" name="age" placeholder="Enter Your Age"><br>

        <label for="birthdate">Birthdate:- </label>
        <input type="date" id="birthdate" name="birthdate"><br><br>

        <label for="gender">Gender:- </label>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br><br>

        <label for="comment">Comment:- </label><br>
        <textarea id="comment" name="comment" rows="4" cols="50">Enter your Remarks...</textarea><br><br>

        <input type="submit" value="Submit">
    </form>

    <hr>

    <div class="php">
        <?php
        // Check if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve form data
            $name = htmlspecialchars($_POST["name"]);
            $email = htmlspecialchars($_POST["email"]);
            $age = htmlspecialchars($_POST["age"]);
            $birthdate = htmlspecialchars($_POST["birthdate"]);
            $gender = htmlspecialchars($_POST["gender"]);
            $comment = htmlspecialchars($_POST["comment"]);

            // Display submitted information
            echo "<h3>Submitted Information:</h3>";
            echo "Name: $name <br>";
            echo "Email: $email <br>";
            echo "Age: $age <br>";
            echo "Birth Date: $birthdate <br>";
            echo "Gender: $gender <br>";
            echo "Comment: $comment <br>";
        }
        ?>
    </div>

</body>

</html>