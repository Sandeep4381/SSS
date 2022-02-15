<?php
$str="king sky";
echo $str;
$lenn= strlen($str);
echo "<br>the lenght of string is ".$lenn. "thank you<br>";
echo "<br>the  number of word in this string is  ".str_word_count($str). "thank you<br>";
echo "the reverse string is ".strrev($str)."<br>thank you<br>";

echo "the serch for is in this  string is ".strpos($str,"sky")."<br>thank you<br>";

echo "the replace for is in this  string is ".str_replace("sky","tinkal",$str)."<br>thank you<br>";



//echo $lenn;
?>