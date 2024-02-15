<?php
$productos = array (
    array("heladera", 2500000,18),
    array("Microonda", 2500000,9),
    array("Cocina", 2500000,21),
    array("Licuadora", 2500000,15),
    array("Mixer", 2500000,5),
    array("Ventilador", 2500000,15),
);

for($x=0; $x <count($productos); $x++){
    print ("<br>".$productos[$x][0].", precio: ".$productos[$x][1]);
}

echo "<hr>";
for($x=0; $x <count($productos); $x++){
    print("<br>Producto: $x");
    for($y=0; $y < 3 ; $y++){
        print($productos[$x][$y]." - ");
    }
}

echo "<hr>";

foreach($productos as $p){
    foreach($p as $item){
        print($item. "|");
    }
}




//imprimir todos los valores


//imprimir solos los productos con (PRECIO <= 100000)


