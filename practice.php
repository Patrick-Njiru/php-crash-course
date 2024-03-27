<?php
// How to print data
// echo 'Hello World!';
// Comment
/* 
    Multi-line 
    comment 
  */
$a = 20;
$b = 45;
$c = 'hello world!';
// Variables
// var_dump(100); //integer
// var_dump('hello'); // string
// var_dump(2.45); // float - floating point numbers
// var_dump(true); // boolean
// var_dump(true); // boolean
// var_dump([1, 2, 4, 5]); // array
// var_dump(null);
// object

// var_dump() function returns the data type and the value -plus length for strings, arrays)


// echo $a;
// You can add HTML syntax within the string
// echo '<br/>';
// echo '<hr/>';
// echo '<h1>heading 1</h1>';
// echo $b;

// Operations
// echo $a + $b . '<br/>';
// echo $a - $b . '<br/>';
// echo $a / $b . '<br/>';
// echo $a * $b . '<br/>';
// echo $a % $b . '<br/>'; // modulo

// echo $a . $b; // concatenate. You cannot use the + sign like in JS to combine different data types.

// Conditional Statements
// if ($a > $b) echo 'a is greater than c';
// else if ($a < $b) echo 'a is smaller than c';
// else echo 'a is equal to c';

// Arrays
// indexed arrays. indexed from 0
$index_array = ['a', 'b', 'c', 'd'];
// var_dump($index_array);
// echo ($index_array[3]); // a

// Associative arrays
$associative_array = ['pencils' => 4, 'pens' => 23, 'total' => 27];

// echo $associative_array['pens'];

// Types of Loops

// For loop
// for ($i = 0; $i < 10; $i++) {
//   echo $i . '<br>';
// }

// While loop
// while ($a < $b) {
//   $a += 5;
//   echo $a . '<br>';
// }

// ForEach loop
// for looping through arrays
// foreach ($associative_array as $key => $value) {
//   echo $key . ' - ' . $value . '<br>';
// }
// foreach ($index_array as $key => $value) {
//   echo $key . ' - ' . $value . '<br>';
// }
// foreach ($index_array as $val) {
//   echo $val; // returns the values minus the keys
// }

// Form Handling
// must have the action attribute in form directing you to this file. - action='practice.php'
// if (isset($_GET['username'])) {
//   echo 'Welcome ' . $_GET['username'] . '!';
// }
// if (isset($_POST['alias'])) {
//   echo 'You also go by the name ' . $_POST['alias'] . '?';
// }

// Use $_REQUEST when you don't know what kind of method is beingused on the form
// if(isset($_REQUEST['username'])){
//   echo $_REQUEST['username'];
// }

// Function
function hello() {
  echo 'Hello World!';
}

// hello();