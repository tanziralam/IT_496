<?php
//require 'exam1.php';
//$result = $database ->query("SELECT * FROM Generated");






$file = explode("\n",file_get_contents('characters.txt'));
echo implode("\n<br />",$file);





  //  $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
//    $result = '';
  //  for ($i = 0; $i < 5; $i++)
    //    $result .= $characters[mt_rand(0, 61)];




function randomcharacter($file) {
     $letters = 'characters.txt';
   return substr(str_shuffle($letters), 0, $chars);
    echo $letters;
}









?>

