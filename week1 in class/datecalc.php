<?php

date_default_timezone_set('UTC');


$todaysDate = strtotime(date("2015-03-26"));
$finalDate = strtotime(date("2015-05-08"));

function DaysLeft($todaysDate,$finalDate)
{
    return $date = $finalDate - $todaysDate;    
}

echo "days left: " . idate('z', DaysLeft($todaysDate,$finalDate));  
?>
