<?php

    echo '<link href="../CSS/Lab 05.css" type="text/css" rel="stylesheet">';
    echo '<title>Resultado de empresa con bonificacion</title>';

    $nuevo=$_POST['precio_actual'];
    $nuevo_precio=$nuevo-($nuevo*0.05);

    $importe=$_POST['cantidad_gaseosas'];
    $importe_compra=$importe*$nuevo_precio;

    $importe_descuento=$importe_compra*0.07;

    $importe_pagar=$importe_compra-$importe_descuento;

    $obsequio=$importe*2;

    echo "π½ππππ ππππππ: ".$nuevo_precio."<br>";
    echo "πΈππππππ πππ ππππππ: ".$importe_compra."<br>";
    echo "π³ππππππππ: ".$importe_descuento."<br>";
    echo "πΏππππ: ".$importe_pagar."<br>";
    echo "πΎπππππππ: ".$obsequio." caramelos<br>";
?>