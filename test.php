<?php
$file1 = fopen('cgwcidcard.txt', "r");
while (!feof($file1)) {
   $members1[] = fgets($file1);
}
fclose($file1);

$file2 = fopen('cgwcidcard_roll.txt', "r");
while (!feof($file2)) {
   $members2[] = fgets($file2);
}
fclose($file2);


//$finalarray = array_merge( $members1, $members2);
//print_r($finalarray);
//echo count($members1);
$i=0;
foreach($members1 as $ro2){
	$cardid = $ro2.'<br>';
	$roll = $members2[$i].'<br>';
	
	$i++;
}
?>