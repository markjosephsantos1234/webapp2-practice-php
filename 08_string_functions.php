<?php
/* ---------- String Functions -------- */

/*
  Functions to work with strings
  https://www.php.net/manual/en/ref.strings.php
*/

$string = 'Hello World';

// Get the length of a string
echo strlen($string);

echo '<br>';
echo '<br>';

// Find the position of the first occurrence of a substring in a string
echo strpos($string, 'o');

echo '<br>';
echo '<br>';

// Find the position of the last occurrence of a substring in a string
echo strrpos($string, 'o');

echo '<br>';
echo '<br>';

// Reverse a string
echo strrev($string);

echo '<br>';
echo '<br>';

// Convert all characters to lowercase
echo strtolower($string);

echo '<br>';
echo '<br>';

// Convert all characters to uppercase
echo strtoupper($string);

echo '<br>';
echo '<br>';

// Uppercase the first character of each word
echo ucwords($string);

echo '<br>';
echo '<br>';

// String replace
echo str_replace('World', 'Everyone', $string);

echo '<br>';
echo '<br>';

// Return portion of a string specified by the offset and length
echo substr($string, 0, 5);

echo '<br>';
echo '<br>';

echo substr($string, 5);

echo '<br>';
echo '<br>';

// Starts with
if (str_starts_with($string, 'Hello')) {
    echo 'YES';
}

echo '<br>';
echo '<br>';

// Ends with
if (str_ends_with($string, 'ld')) {
    echo 'YES';
}

echo '<br>';
echo '<br>';

// HTML Entities
$string2 = '<h1>Hello World</h1>';
echo htmlentities($string2);

echo '<br>';
echo '<br>';

// Formatted Strings - useful when you have outside data
// Different specifiers for different data types
// %% - Returns a percent sign
// %b - Binary number
// %c - The character according to the ASCII value
// %d - Signed decimal number (negative, zero or positive)
// %e - Scientific notation using a lowercase (e.g. 1.2e+2)
// %E - Scientific notation using a uppercase (e.g. 1.2E+2)
// %u - Unsigned decimal number (equal to or greater than zero)
// %f - Floating-point number (local settings aware)
// %F - Floating-point number (not local settings aware)
// %g - shorter of %e and %f
// %G - shorter of %E and %f
// %o - Octal number
// %s - String
// %x - Hexadecimal number (lowercase letters)
// %X - Hexadecimal number (uppercase letters)
printf('%s is a %s', 'Elmer', 'LVCC part-time instructor');

echo '<br>';
echo '<br>';

printf('1 + 1 = %f', 1 + 1);