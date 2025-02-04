# PHP Silent Array Key Access Failure

This repository demonstrates a common, yet often overlooked, error in PHP: the silent failure when accessing a non-existent array key.  PHP does not throw an error when attempting to access a key that doesn't exist; instead, it returns NULL.  This can lead to subtle bugs that are difficult to track down.

The `bug.php` file shows the problematic code, while `bugSolution.php` presents a corrected version that safely handles non-existent keys.

## How to Reproduce

1. Clone this repository.
2. Run `bug.php` using a PHP interpreter.
3. Observe the output and note the lack of errors despite accessing a non-existent key.
4. Run `bugSolution.php` to see the improved error handling.

## Solution

The solution involves explicitly checking for the existence of a key using `array_key_exists()` before attempting to access it. This prevents unexpected NULL values from propagating through your code.