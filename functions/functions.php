
<?php

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
?>