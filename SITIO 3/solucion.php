<?php
$num1 = $_POST['v1'];
$num11 = $_POST['ve1'];
$num12 = $_POST['vr1'];
$operacion1 = $num1 + $num11 +$num12;
$resultado1 = $operacion1 / 3;

$num2 = $_POST['v2'];
$num21 = $_POST['ve2'];
$num22 = $_POST['vr2'];
$operacion2 = $num2 + $num21 +$num22;
$resultado2 = $operacion2 / 3;

$num3 = $_POST['v3'];
$num31 = $_POST['ve3'];
$num32 = $_POST['vr3'];
$operacion3 = $num3 + $num31 +$num32;
$resultado3 = $operacion3 / 3;

$num4 = $_POST['v4'];
$num41 = $_POST['ve4'];
$num42 = $_POST['vr4'];
$operacion4 = $num4 + $num41 +$num42;
$resultado4 = $operacion4 / 3;

$num5 = $_POST['v5'];
$num51 = $_POST['ve5'];
$num52 = $_POST['vr5'];
$operacion5 = $num5 + $num51 +$num52;
$resultado5 = $operacion2 / 3;

$num6 = $_POST['v6'];
$num61 = $_POST['ve6'];
$num62 = $_POST['vr6'];
$operacion6 = $num6 + $num61 +$num62;
$resultado6 = $operacion6 / 3;

$num7 = $_POST['v7'];
$num71 = $_POST['ve7'];
$num72 = $_POST['vr7'];
$operacion7 = $num7 + $num71 +$num72;
$resultado7 = $operacion7 / 3;

$num8 = $_POST['v8'];
$num81 = $_POST['ve8'];
$num82 = $_POST['vr8'];
$operacion8 = $num8 + $num81 +$num82;
$resultado8 = $operacion8 / 3;

$num9 = $_POST['v9'];
$num91 = $_POST['ve9'];
$num92 = $_POST['vr9'];
$operacion9 = $num9 + $num91 +$num92;
$resultado9 = $operacion9 / 3;

$num1000 = $_POST['v10'];
$num10100 = $_POST['ve10'];
$num10200 = $_POST['vr10'];
$operacion10 = $num1000 + $num10100 +$num10200;
$resultado10 = $operacion10 / 3;

$num1010 = $_POST['v11'];
$num1011 = $_POST['ve11'];
$num1012 = $_POST['vr11'];
$operacion11 = $num1010 + $num1011 +$num1012;
$resultado11 = $operacion11 / 3;

$num1020 = $_POST['v12'];
$num1021 = $_POST['ve12'];
$num1022 = $_POST['vr12'];
$operacion12 = $num1020 + $num1021 +$num1022;
$resultado12 = $operacion12 / 3;

$num1030 = $_POST['v13'];
$num1031 = $_POST['ve13'];
$num1032 = $_POST['vr13'];
$operacion13 = $num1030 + $num1031 +$num1032;
$resultado13 = $operacion13 / 3;

$num1040 = $_POST['v14'];
$num1041 = $_POST['ve14'];
$num1042 = $_POST['vr14'];
$operacion14 = $num1040 + $num1041 +$num1042;
$resultado14 = $operacion14 / 3;

$num1050 = $_POST['v15'];
$num1051 = $_POST['ve15'];
$num1052 = $_POST['vr15'];
$operacion15 = $num1050 + $num1051 +$num1052;
$resultado15 = $operacion15 / 3;

$num1060 = $_POST['v16'];
$num1061 = $_POST['ve16'];
$num1062 = $_POST['vr16'];
$operacion16 = $num1060 + $num1061 +$num1062;
$resultado16 = $operacion16 / 3;

$num1070 = $_POST['v17'];
$num1071 = $_POST['ve17'];
$num1072 = $_POST['vr17'];
$operacion17 = $num1070 + $num1071 +$num1072;
$resultado17 = $operacion17 / 3;

$num1080 = $_POST['v18'];
$num1081 = $_POST['ve18'];
$num1082 = $_POST['vr18'];
$operacion18 = $num1080 + $num1081 +$num1082;
$resultado18 = $operacion18 / 3;

$num1090 = $_POST['v19'];
$num1091 = $_POST['ve19'];
$num1092 = $_POST['vr19'];
$operacion19 = $num1090 + $num1091 +$num1092;
$resultado19 = $operacion19 / 3;

$num1100 = $_POST['v20'];
$num1110 = $_POST['ve20'];
$num1120 = $_POST['vr20'];
$operacion20 = $num1100 + $num1110 +$num1120;
$resultado20 = $operacion20 / 3;

$num1111 = $_POST['v21'];
$num1121 = $_POST['ve21'];
$num1131 = $_POST['vr21'];
$operacion21 = $num1111 + $num1121 +$num1131;
$resultado21 = $operacion21 / 3;

$competencia = 0;

$mat1 = $resultado1 + $resultado2 + $resultado3;
$mat2 = $resultado4 + $resultado5 + $resultado6;
$mat3 = $resultado7 + $resultado8 + $resultado9;
$mat4 = $resultado10 + $resultado11 + $resultado12;
$mat5 = $resultado13 + $resultado14 + $resultado15;
$mat6 = $resultado16 + $resultado17 + $resultado18;
$mat7 = $resultado19 + $resultado20 + $resultado21;

$promfin1 = $mat1 / 3;
$promfin2 = $mat2 / 3;
$promfin3 = $mat3 / 3;
$promfin4 = $mat4 / 3;
$promfin5 = $mat5 / 3;
$promfin6 = $mat6 / 3;
$promfin7 = $mat7 / 3;

$promfin = ($promfin1 + $promfin2 + $promfin3 + $promfin4 + $promfin5 + $promfin6 + $promfin7)/7;

$prom = array($resultado1, $resultado2, $resultado3, $resultado4, $resultado5, $resultado6, $resultado7, $resultado8, $resultado9, $resultado10, $resultado11, $resultado12, $resultado13, $resultado14, $resultado15, $resultado16, $resultado17, $resultado18, $resultado19, $resultado20, $resultado21);

$longitud = count($prom);

echo "<table>";
echo "<tr>";
echo "<td><b>Matematicas para Ingenieria I</b></td>";
echo "</tr>";
echo "<tr>";
echo "<td>Parcial 1</td> <td>Parcial 2</td> <td>Parcial 3</td> <td>Promedio Final</td>";
echo "</tr>";
echo "<tr>";
echo "<td>$resultado1</td> <td>$resultado2</td> <td>$resultado3</td> <td>$promfin1</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Ingles IV</b></td>";
echo "</tr>";
echo "<tr>";
echo "<td>Parcial 1</td> <td>Parcial 2</td> <td>Parcial 3</td> <td>Promedio Final</td> ";
echo "</tr>";
echo "<tr>";
echo "<td>$resultado4</td> <td>$resultado5</td> <td>$resultado6</td> <td>$promfin2</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Programacion Web</b></td>";
echo "</tr>";
echo "<tr>";
echo "<td>Parcial 1</td> <td>Parcial 2</td> <td>Parcial 3</td> <td>Promedio Final</td>";
echo "</tr>";
echo "<tr>";
echo "<td>$resultado7</td> <td>$resultado8</td> <td>$resultado9</td> <td>$promfin3</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Base de Datos</b></td>";
echo "</tr>";
echo "<tr>";
echo "<td>Parcial 1</td> <td>Parcial 2</td> <td>Parcial 3</td> <td>Promedio Final</td>";
echo "</tr>";
echo "<tr>";
echo "<td>$resultado10</td> <td>$resultado11</td> <td>$resultado12</td> <td>$promfin4</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Diseño de Interfaces<b></td>";
echo "</tr>";
echo "<tr>";
echo "<td>Parcial 1</td> <td>Parcial 2</td> <td>Parcial 3</td> <td>Promedio Final</td>";
echo "</tr>";
echo "<tr>";
echo "<td>$resultado13</td> <td>$resultado14</td> <td>$resultado15</td> <td>$promfin5</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Electricidad y Magnetismo</b></td>";
echo "</tr>";
echo "<tr>";
echo "<td>Parcial 1</td> <td>Parcial 2</td> <td>Parcial 3</td> <td>Promedio Final</td>";
echo "</tr>";
echo "<tr>";
echo "<td>$resultado16</td> <td>$resultado17</td> <td>$resultado18</td> <td>$promfin6</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Habilidades Cognitivas y Creatividad</b<</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Parcial 1</td> <td>Parcial 2</td> <td>Parcial 3</td> <td>Promedio Final</td>";
echo "</tr>";
echo "<tr>";
echo "<td>$resultado19</td> <td>$resultado20</td> <td>$resultado21</td> <td>$promfin7</td>";
echo "</tr>";
echo "</table>";

echo "Tu promedio general del";
echo "<br>";
echo "cuatrimestre es de $promfin";
echo "<br>";

for($i = 0; $i < $longitud; $i++){
    if ($prom[$i] <7){
        $competencia++;
    }else{
        $competencia == 0;
    }
}


if ($competencia >= 4){
    echo "No puedes inscribirte, tienes $competencia competencias";
}

echo "<br>";

if($promfin >=9 && $competencia == 0){
    echo "Tienes Beca, felicidades";
}
if($promfin <= 7){
    echo "No tienes beca";
}

?>
