## FizzBuzzPHP
##### Simple solutions to the FizzBuzz problem in PHP with **no** "if" repetition.

The variables used in these scripts will remain consistent:

| Variable      | Name      |  Description                         |
|:-------------:|:---------:|:-------------------------------------|
|      $n       | Number    | Holds the current number             |
|      $r       | Result    | String to be returned                |

##### FizzBuzz.php
The original
```php
<?php
for ($n=1; $n<=100; $n++){
	$r='';				// reset $r, otherwise we could end up appending to the previous result
	if ($n % 3 == 0){   // test if $n divisible by 3, if so initialise $r with 'Fizz'
		$r='Fizz';
	} 
	if ($n % 5 == 0){   // test if $n is divisible by 5, if so add 'Buzz' to $r
		$r.='Buzz';
	} 
	if (!$r){           // if $r is still empty, it must not be divisible by either - return the number
		$r=$n;
	}
	echo $r.'<br>';
}
?>
```