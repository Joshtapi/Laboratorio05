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
    echo "๐ฒ๐๐๐๐๐๐๐ ๐๐๐ ๐๐๐๐๐๐๐ ๐๐๐๐๐: ".$comision."<br>";
    echo "๐ฑ๐๐๐๐๐๐๐๐๐รณ๐ ๐๐๐ ๐๐๐๐๐: ".$bonificacion."<br>";
    echo "๐๐๐๐๐๐ ๐๐๐๐๐: ".$sueldo_bruto."<br>";
    echo "๐ณ๐๐๐๐๐๐๐๐: ".$descuento."<br>";
    echo "๐๐๐๐๐๐ ๐๐๐๐: ".$sueldo_neto."<br>";
?> 