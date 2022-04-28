<?php


    echo '<link href="../CSS/Lab 05.css" type="text/css" rel="stylesheet">';
    echo '<title>Resultado de empresa con bonificacion</title>';

    $comis=$_POST['importe_total'];
    $comision=$comis*0.075;
    $bonif=$_POST['cantidad_hijos'];
    $bonificacion=$bonif*50;
    $sueldo_bruto=$comision+600+$bonificacion;

    $descuento=$sueldo_bruto*0.11;
    $sueldo_neto=$sueldo_bruto-$descuento;
    echo "𝙲𝚘𝚖𝚒𝚜𝚒𝚘𝚗 𝚙𝚘𝚛 𝚒𝚖𝚙𝚘𝚛𝚝𝚎 𝚝𝚘𝚝𝚊𝚕: ".$comision."<br>";
    echo "𝙱𝚘𝚗𝚒𝚏𝚒𝚌𝚊𝚌𝚒ó𝚗 𝚙𝚘𝚛 𝚑𝚒𝚓𝚘𝚜: ".$bonificacion."<br>";
    echo "𝚂𝚞𝚎𝚕𝚍𝚘 𝚋𝚛𝚞𝚝𝚘: ".$sueldo_bruto."<br>";
    echo "𝙳𝚎𝚜𝚌𝚞𝚎𝚗𝚝𝚘: ".$descuento."<br>";
    echo "𝚂𝚞𝚎𝚕𝚍𝚘 𝚗𝚎𝚝𝚘: ".$sueldo_neto."<br>";
?> 