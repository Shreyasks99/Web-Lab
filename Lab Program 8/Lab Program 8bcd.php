<?php
function display($x){
    foreach($x as $y){
        foreach($y as $z){
            echo $z."  ";
        }
        echo "<br>";
    }
    echo "<br>";
}
$mat1 = [[1,2,3],[4,5,6],[7,8,9]];
$mat2 = [[1,2,3],[4,5,6],[7,8,9]];
echo "<b>First Matrix is :</b><br>";
display($mat1);
echo "<b>Second Matrix is :</b><br>";
display($mat2);
for($i=0;$i<3;$i++)
    for($j=0;$j<3;$j++)
        $mat3[$i][$j] = $mat1[$j][$i];
echo "<b>Transpose of First matrix is:</b><br>";
display($mat3);
for($i=0;$i<3;$i++)
    for($j=0;$j<3;$j++)
        $mat3[$i][$j] = $mat1[$i][$j] + $mat2[$i][$j];
echo "<b>Addition of two matrix is:</b><br>";
display($mat3);
for($i=0;$i<3;$i++)
    for($j=0;$j<3;$j++){
        $mat3[$i][$j] = 0;
        for($k=0;$k<3;$k++){
            $mat3[$i][$j] += $mat1[$i][$j] * $mat2[$i][$j];

        }
    }
echo "<b>Multiplication of two matrix is:</b><br>";
display($mat3);