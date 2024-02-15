
<?php
$dia[0]="Lunes";
$dia[1]="Martes";
$dia[2]="Miercoles";
$dia[3]="Jueves";
$dia[4]="Viernes";
$dia[5]="Sabado";
$dia[6]="Domingo";


$hoy = date("N")-1;
print ("el valor de hoy:".$hoy);
print("<br>Hoy es: ".$dia[$hoy]);

print("<h4>Los Dias Son</h4>");

for($x=0; $x < count($dia); $x++){
if($x==$hoy){
    print("<button>".$dia[$x]."</button><br>");
}else{
    print($dia[$x]."<br>");
}
}

/*
$mes = array("enero","febrero","marzo");
//mostrar el viernes
echo "Dia: ";
//imprimir febrero
echo "Mes: ";

?>

<?php
$autos = array("Volvo", "BMW", "Toyota");
$arraylongitud = count($autos);
for($x=0; $x < $arraylongitud; $x++ ){
    echo $autos[$x];
    echo "<br>";
}
?>
*/