<?php
$file1 = fopen('emailadd.txt', "r");
while (!feof($file1)) {
   $members1[] = fgets($file1);
}
fclose($file1);

//print_r($members1);
//echo count($members1);
foreach($members1 as $email){
	//echo '880'.$ro2.'<br>';
	$words = preg_replace(array('/[0-9]+/','/\s*,\s*/'), '.', $email);
	$str = str_replace("..", ",", $words);
	echo str_replace(".@", "@", $str);
}
?>