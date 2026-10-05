<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tento web je zamerany na premenne
    </h1>
    <?php
    echo "<h1> tento web je zamerany na premenne </h1>";
    ?>
    <?php

    echo"<p>" . 2 + 4 . "</p>";
    //priradenie hodnoty do premennej
    $cislo = 5;
    //vypisanie hodnoty premennej
    echo $cislo;

    echo "<br>";
    $desCislo = 4.2;
    echo $desCislo;

    $cislo1 = 4.3;
    $cislo2 = 2.7;
    //Pretypovanie čísel z premennej
    $vysledok = (int)$cislo1 + (int)$cislo2;
    echo $vysledok;

    $textCislo = "toto je moj text" . $cislo1;
    echo $textCislo;

    $pravdivosť = true;
    echo $pravdivosť;
    ?>
</body>
</html>