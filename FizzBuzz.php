<?php
for ($n=1; $n<=100; $n++){
	$r='';
	if ($n % 3 == 0){
		$r='Fizz';
	} 
	if ($n % 5 == 0){
		$r.='Buzz';
	} 
	if (!$r){
		$r=$n;
	}
	echo $r.'<br>';
}
?>