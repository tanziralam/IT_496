<?php


//array
$testArray = array(1,2,3);
$stringArray = array("one","two","three");


//echo $testArray[0];
//echo "<br/>"
//echo $stringArray[2];


//do while

$x = 1;
do {
  //what are you actually doing  
    //echo "This is the value: " . $x; . "<br/>"
    $x++;
    //x++ is $x = $x + 1
}
while ($x <= 9);

    //while this condition is true
    

for ($i = 0;$i<=1;$i++)
{
    //echo "This is the value: " .$stringArray[$i] . "<br/>";
}


//for each
$colorArray = array("red","blue","yellow","green");
foreach($colorArray as $y)
{
    //echo "This is the value: " .$y ."<br/>";
}
                    
                    
$var = "dog";
                    
switch ($var) {
    case "cat";
    echo "this is a cat";
    break;//if it is not a car goes to horse
    
    case "horse";
    echo "this is a horse";
    break;
    
    case "dog";
    echo "this is a dog";
    break; //it exit outs
}
?>