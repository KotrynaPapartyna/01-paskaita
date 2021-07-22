<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01-paskaita PHP</title>

    
    
</head>
<body>

    <div class="=<?php echo 'containeris'?>">
        <p>PHP klase</p>
    </div>

    <?php

        $kazkoksTekstas = "kazkoks tekstas";
        echo "<div class='container'>"; 
        echo $kazkoksTekstas; 
        echo "<div>"; 
    
    ?>

    <?php

        echo "labas vakaras";
        // kintamojo issivesti pradzioje neleidzia, nes bus kaip nedeklaruotas       

    ?>


    <!--PHP kodas-->
    <!--teksto atvaizdavimas kabutese, su echo ir "" arba '', pabaiga- tik su ;-->


    

    <!--dokumentas veiks, jeigu bus pavadintas index.html-->
    <!--jeigu pakeiciamas pavadinimas- rodoma klaida, dok rodomas pirmas (zemiau)-->
    <!--pakeitimas is html i php- itakos neturi(atsidaro, nesusigadina-->
    <!--pakeitimas is html i php- nebera consoles-->
    <!-- atvaizdavimas- priklauso nuo kodo vieto- pagal eiliskuma-->

    <p>Labas, sis dokumentas yra lokaliame serveryje</p>
    
    <?php

        // kintamieji- nebereikia nurodyti- var kintamasis, tik pati kintamaji 
        
        $tekstas= "PHP"; 
        $sk= 5.5; 
        $tiesa= true;
        $melas= false;
        $skaicius= 4; 
        
        
        // kintamuju isvedimas
        echo $skaicius, $tekstas, $sk; // galima rasyti ir per kableli visus kintamuosius

        echo "<br>";

        // tarpas tarp kintamuju  
        echo $skaicius." , " .$tekstas. " , " .$sk; // . kaip JS +

        // teksto kelimas i kita eilute <br> kaip ir html

        echo "<br>";

        // arba 
        echo $skaicius, "," , $tekstas, "," , $sk;
        
        echo $tiesa; // kintamasis true neatvaizduojamas
        echo $melas; // kintamasis false neatvaizduojamas

        echo "<br>";

        echo "Tekstas parasytas PHP pagalba"; 

        echo "<br>";


        echo "Kitas tekstas parasytas PHP pagalba";

    ?>


<script>

    "use strict";
    console.log("labas"); 

</script>

</body>
</html>