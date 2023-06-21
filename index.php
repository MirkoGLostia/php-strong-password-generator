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

    // echo var_dump($lenghtPsw);

    include 'functions/functions.php';

    $password = RandomPassword($lenghtPsw);

    // echo var_dump($password);

    ?>

    <style>
        header {
            width : 100%;
            text-align : center;
        }

        h1 {
            color : rgb(121, 139, 153);
        }

        h3 {
            color : white;
        }

        body {
            background-color : rgb(0, 22, 50);
        }
        
        .form-banner {
            background-color : rgb(207, 244, 252);
            color : rgb(76, 137, 147);
            width : 60%;
            margin : 0 auto;
            padding : 20px;
            border-radius : 10px;
        }

        #form-container {
            background-color : white;
            width : 60%;
            margin : 0 auto;
            border-radius : 10px;
            text-align : center;
        }

        form > div {
            margin : 10px;
            padding : 30px;
        }
        
        .form-flex {
            display : flex;
            flex-wrap: wrap;
        }

        div > .left-side, .right-side {
            width : 50%;
        }

        #password-container {
            width : 40%;
            margin : 0 auto;
            padding : 15px;
            border-radius : 10px;
            background-color : white;
            text-align : center;
            font-size : 20px;
        }
    </style>

</head>
<body>

    <header>
        <h1>
            Strong Password Generator
        </h1>

        <h3>
            Genera una password sicura
        </h3>
    </header>

    <main>
        <?php
            echo '<div class="form-banner">
            <span> Nessun parametro valido inserito </span>
            </div>'
        ?>
        <section id="form-container"> 
            <form method="get">
                <div class="form-flex">
                    <div class="left-side">
                        <label for="numberCharacters">lenght of password: </label>
                    </div>
        
                    <div class="right-side">
                        <input type="number" name="numberCharacters" id="numberCharacters" size="5" min="1" max="50"> <!-- il value per forzare un valore iniziale -->
                    </div>
                </div>
                <div>
                    <button type="submit">GENERATE</button>
                </div>
            </form>
        </section>

        <section>
            <div id="password-container">
                <span>
                    Your password is: <?php echo $password ?>
                </span>
            </div>
        </section>
    </main>

</body>
</html>