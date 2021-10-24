<?php
$file1 = fopen('test1.txt', "r");
while (!feof($file1)) {
   $members1[] = fgets($file1);
}
fclose($file1);

//print_r($members1);
//echo count($members1);
foreach($members1 as $ro2){
	echo '880'.$ro2.'<br>';
}
?>