<?php

$side1=14.8;
$side2=20.3;
$side3=25.3;
    
$angle1=36;
$angle2=53;
$angle3=91;

echo "Perimeter = ". perimeter($side1,$side2,$side3).'<br/>';
echo "Area = ". area($side1,$side2,$side3).'<br/>';
echo "Sine = ". sine($angle1).'<br/>';
echo "Cosine = ". cosine($angle1).'<br/>';
echo "Tangent = ". tangent($angle1);

function perimeter($side1,$side2,$side3) {
    return ($side1+$side2+$side3);
        
}

function area($side1,$side2,$side3) {
    $x = ($side1+$side2+$side3)/2;
    
    $answer = sqrt($x * (($x - $side1)*($x - $side2)*($x - $side3)));
        return ($answer);
}
        
function sine($angle1) {
    $sine = sin(deg2rad($angle1));
        return $sine;  
}

function cosine($angle1)
{
        $cosine = cos(deg2rad($angle1));
        return $cosine;  
}

function tangent($angle1)
{
        $tangent = tan(deg2rad($angle1));
        return $tangent;  
}
     
?>