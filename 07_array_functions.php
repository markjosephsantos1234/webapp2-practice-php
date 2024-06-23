<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/

$fruits = ['apple', 'banana', 'orange'];

echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Get array length
echo count($fruits);

echo '<br>';
echo '<br>';

// Search array
echo in_array('banana', $fruits);
echo '<br>';
echo '<br>';

var_dump(in_array('banana', $fruits));

echo '<br>';
echo '<br>';

// Add to an array
$fruits[] = 'grape';
array_push($fruits, 'mango', 'raspberry');

echo '<pre>';
var_dump($fruits);
echo '</pre>';

array_unshift($fruits, 'kiwi'); // Adds to the beginning

echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Remove from array
array_pop($fruits); // Removes last

echo '<pre>';
var_dump($fruits);
echo '</pre>';

array_shift($fruits); // Removes first

echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Remove specific element
unset($fruits[2]);

echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Split into chunks of 2
$chunkedArray = array_chunk($fruits, 2);

echo '<pre>';
var_dump($chunkedArray);
echo '</pre>';

// Concatenate arrays
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$arr3 = array_merge($arr1, $arr2);

echo '<pre>';
var_dump($arr3);
echo '</pre>';

$arr4 = [...$arr1, ...$arr2]; // Use Spread

echo '<pre>';
var_dump($arr4);
echo '</pre>';



// Combine arrays (Keys & values)
$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];
$c = array_combine($a, $b);

echo '<pre>';
var_dump($c);
echo '</pre>';

// Array of keys
$keys = array_keys($c);

echo '<pre>';
var_dump($keys);
echo '</pre>';

// Flip keys with values
$flipped = array_flip($c);

echo '<pre>';
var_dump($flipped);
echo '</pre>';

// Create array of numbers with range()
$numbers = range(1, 20);

echo '<pre>';
var_dump($numbers);
echo '</pre>';

// Map through array and create a new one
$newNumbers = array_map(function ($number) {
    return "Number {$number}";
}, $numbers);

echo '<pre>';
var_dump($newNumbers);
echo '</pre>';

// Filter array
$lessThan10 = array_filter($numbers, fn($number) => $number < 10);

echo '<pre>';
var_dump($lessThan10);
echo '</pre>';

// Array Reduce
// "carry" holds the return value of the previous iteration
$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
var_dump($sum);