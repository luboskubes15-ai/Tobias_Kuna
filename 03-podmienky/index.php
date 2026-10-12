<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Podmienky
    /*
    Podmienka je programovacia paradigma, pomocou ktorej
    sa rozhoduje, ktorý kód sa vykoná
    Podmienka obsahuje logický výraz napr. j < 5.

    Ak podmienka je splnená,
    tak sa vykoná kód uvedený pod touto podmienkou
    AK podmienka nien je splnená,
    tak sa vpreskočí alebo sa vykoná kód v čawsti else.

    Pri porovnávaní viacerých výrazov, používame príkaz else if.

    Špeciálnou podmienkou v modernom programovani je: switch
    */

    if(1 < 5){
        echo "1 je menej ako 5";
    }

    $cislo1 = 10;
    $cislo2 = 50;


    //Operátor
    /*
    == : rovná sa
    != : nerovná sa
    <= : menej alebo rovné
    >= : viac alebo rovné
    ! : negácia
    === : porovnáva hodnotu aj dátový typ
    ( 2 === 2) : pravda (2 !== "2"): nepravda
    */
    
    if($cislo1 != $cislo2){
        echo "Toto sa vykoná";
    }

    echo "/br";

    if($cislo1 == $cislo2){
        echo "Tento kód sa nevykoná";
    }else{
        echo "Vykoná sa tento kód";
    }


    /*
    Vytvorte podmienku, ktorá bude na základe počtu bodov,
    vypisovať vaše hodnotenie.

    100-90: 1
    89-80: 2
    ...

    BONUS: počet bodov bud edefinovaný náhodne 
    pomocou funkcie random_int(min, max).
    */
    
    $znamka = random_int(0, 100);
    if($znamka >= 90){
        echo "1";
    }elseif($znamka <= 89 && $znamka >= 80){
        echo "2";
    }elseif($znamka <= 79 && $znamka >= 70){
        echo "3";
    }elseif($znamka <= 69 && $znamka >= 60){
        echo "4";
    }else{
        echo "5";
    }

    //Úloha ne precvičenie si podmienok časť druhá.
    /*
    Vstup na párty
    Vstup na párty je podmienený niekoľkými podmienkami

    1. podmienka: Vstup na párty j eod 18 rokov
    2. podmienka: Pokiaľ je párty v SNV, tak od 15 rokov
    3. podmienka: Ak nemáte slušné oblečenie, tak smola
    4. podmienka: Ak si bol v base, tak máš zakaz vstupu
    5. podmienka: Ak máte súhlas zákonného zástupcu, môžete vstúpiť na párty od 10r.
    */

    $mojeVek = 31;
    $miestoParty = "Poprad"
    $slusneOblecenie = true;
    $SuhlasZakZastupcu = false;
    $somBBase = false;

    if($slusneOblecenie == true && $somBBase == false){
        if($mojeVek >= 18){
            echo "Go party!";
        }elseif($miestoParty == "SNV" && $mojeVek >= 15){
            echo "Go party!";
        }elseif($SuhlasZakZastupcu == true && $mojeVek >= 10){
            echo "Go party!";
        }



    ?>
</body>
</html>