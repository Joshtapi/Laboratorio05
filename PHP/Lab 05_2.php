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

    echo "𝙽𝚞𝚎𝚟𝚘 𝚙𝚛𝚎𝚌𝚒𝚘: ".$nuevo_precio."<br>";
    echo "𝙸𝚖𝚙𝚘𝚛𝚝𝚎 𝚙𝚘𝚛 𝚌𝚘𝚖𝚙𝚛𝚊: ".$importe_compra."<br>";
    echo "𝙳𝚎𝚜𝚌𝚞𝚎𝚗𝚝𝚘: ".$importe_descuento."<br>";
    echo "𝙿𝚊𝚐𝚊𝚛: ".$importe_pagar."<br>";
    echo "𝙾𝚋𝚜𝚎𝚚𝚞𝚒𝚘: ".$obsequio." caramelos<br>";
?>