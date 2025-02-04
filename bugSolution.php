The solution involves using `array_key_exists()` to check if a key exists before accessing it.  This prevents the silent return of NULL, making your code more robust.

```php
<?php
$myArray = ['a' => 1, 'b' => 2];

if (array_key_exists('c', $myArray)) {
    echo $myArray['c']; //This will not be executed
} else {
    echo 'Key c does not exist';
}

//Alternatively, use the null coalescing operator (PHP 7.0+)
echo $myArray['c'] ?? 'Key c does not exist';

//Another approach is to use isset() which checks if a variable is set and is not NULL.
$value = isset($myArray['c']) ? $myArray['c'] : 'Key c does not exist';
echo $value;
?>
```
This improved code provides explicit handling for non-existent keys, improving the reliability and maintainability of your application.