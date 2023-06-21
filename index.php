<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="shortcut icon" href="#">
    <title>Random password</title>

    <!-- database -->
    <?php

    $lenghtPsw = (int)$_GET["numberCharacters"];

    echo var_dump($lenghtPsw);

    function RandomPassword($arg1) {

        $symbols = '!@#$%&';
    
        $randomNumber = "";

        $randomUpperCase = "";

        $randomLowerCase = "";
    
        for ($i = 0; $i < $arg1; $i++) {

            $randomNumber .= rand(0, 9);

            $randomUpperCase .= chr(rand(65,90));

            $randomLowerCase .= chr(rand(97,122));
        }
        
        $containerAllChar = $symbols . $randomNumber . $randomUpperCase . $randomLowerCase;
        
        $shufleContainer = str_shuffle($containerAllChar);

        $result = substr($shufleContainer, 0, $arg1);
    
        return $result;
    }

    $password = RandomPassword($lenghtPsw);

    echo var_dump($password);

    ?>

</head>
<body>

    <main>
        <form method="get">
            <label for="numberCharacters">lenght of password: </label>
            <input type="number" name="numberCharacters" id="numberCharacters" size="5" min="1" max="50" value="1"> <!-- il value per forzare un valore iniziale -->
            <button type="submit">GENERATE</button>
        </form>

        <section>
            <div>
                <span>
                    <?php
                        echo $password
                    ?>
                </span>
            </div>
        </section>
    </main>

</body>
</html>