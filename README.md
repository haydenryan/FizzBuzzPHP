## FizzBuzzPHP
##### Simple solutions to the FizzBuzz problem in PHP with **no** "if" repetition.

The variables used in these scripts will remain consistent:
| Variable       | Name |  Description            |
|:-------------:|:-----:|:-----------------------|
|      $n       | Number | Holds the current number|
|      $s       |  Solution | 0 if no FizzBuzz found, otherwise >0|
|      $r       | Result | String to be returned

##### FizzBuzz.php
The original
```php
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
```