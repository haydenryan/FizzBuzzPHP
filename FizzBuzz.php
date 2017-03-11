<?php
for ($n=1; $n<=100; $n++){
	$r='';
	$s=0;
	if ($n % 3 == 0){
		$r='Fizz';
		$s++;
	} 
	if ($n % 5 == 0){
		$r.='Buzz';
		$s++;
	} 
	if (!$r){
		$r=$n;
	}
	echo $r.'<br>';
}
?>