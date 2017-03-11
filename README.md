## FizzBuzzPHP
##### Simple solutions to the FizzBuzz problem in PHP with **no** "if" repetition.

The variables used in these scripts will remain consistent:

| Variable      | Name      |  Description                         |
|:-------------:|:---------:|:-------------------------------------|
|      $n       | Number    | Holds the current number             |
|      $r       | Result    | String to be returned                |
|      $m3      | Mod 3     | If divisible by 3, returns null      |
|      $m5      | Mod 5     | If divisible by 5, returns null      |

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

#### FizzBuzzSmaller.php
A variation of the original FizzBuzz PHP, made smaller by:
- Declaring the Modulus values up front
- Replacing "if" with ternary operators
- Removing some whitespace
- Changing the test from <=100 to <101 (saves 1 character!)

```php
<?php
for ($n=1; $n<101; $n++){
	$m3=$n%3;             // store the tests to determine modulus of 3 and 5
	$m5=$n%5;
	$r=!$m3?'Fizz':'';    // replace if clause with ternary operators
	$r.=!$m5?'Buzz':'';
	$r.=!$r?$n:'';        // if $r is empty, not divisible by either - return number instead
	echo $r.'<br>';
	$r='';                // clear $r
}
?>
```
