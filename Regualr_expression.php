<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regular Expressions</title>
</head>
<body>

    <?php

        // Using preg_match()

        $str = "Welcome to Php world!";
        $pattern = "/PHP/i";
        echo preg_match($pattern, $str); // Outputs 1

        // Using preg_match_all()

        $str = "The rain in SPAIN falls mainly on the plains.";
        $pattern = "/ain/i";
        echo preg_match_all($pattern, $str); // Outputs 4

        // Using preg_replace()

        $str = "Visit Microsoft!";
        $pattern = "/microsoft/i";
        echo preg_replace($pattern, "Lab", $str); // Outputs "Visit Lab!"

    ?>
    
</body>
</html>