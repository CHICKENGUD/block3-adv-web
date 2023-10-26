<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$firstName = "Peter";
echo "first name is:". $firstName;
//another way to concatenate
//echo "first name is: $firstName";
$x = 5;
$y = 10;
echo $x % $y; //MODULUS %, used to find the remainder of a division, check even or odd. we'll come back to it. Apparently useful in css

if ($x % $y){
   echo "$x is odd";
} else {
   echo "$x is even";
}

 //should I put $ instead of % will give fatal error, page isn't working.

// try, catch, finally


$sampleArray =array(1,2,3); //or... $sampleArray = [1,2,3];
echo $sampleArray[0]; //echo is always expecting a string (output), print_r makes the array humanly readable ie it'll show the index of the array


//for loops
// consistent way to loop through an array $i = 0; $i < 10; $i++ do it this way.
for($i = 0; $i < 10; $i++){
    $addOne = $i + 1;
    echo "index $i contains: $addOne";
}

$j = 0;
while($j < 10){
    $addOne = $j++; //++j is a pre increment, j is now 1, then 2, then 3, then 4, then 5, then 6, then 7, then 8, then 9, then 10 instead of 0,1,2,3,4,5,6,7,8,9,10
    echo "index $j contains: $addOne"; 
}

//++i; //

for($i = 0; $i < count($sampleArray); $i++) //count instead of length, max elements in an array, so now it's 3 because our $sampleArray has 3 elements, so $i is index 1,2,3. line 26
{
    echo $sampleArray[$i];    
}

$balance = 10;

function deposit($balance, $amount){
    return $balance += $amount;
}

deposit($balance, 10);
echo $balance;

function fname($param1, $param2){
    return $param1 + $param2;
}

$ftest = fname(1,2);
echo $ftest;

for($i = 0; $i < count($sampleArray); $i++){
    $class = ($i+1) % 2 ?"odd":"even";// ternary expression "? symbol" valueIfTrue : valueIfFalse;
    echo "<p> index $i contains: $simpleArray [$i] </p>";
}





?>


<p>variables ($peterWantsCamelCase), data types, functions, arrays, loops, conditions (if, else), outputting data(displaying)</p>

<?php
function isPalindrome($word) { //function to check if a word is a palindrome
    $length = strlen($word); //length of the word
    
    for ($i = 0; $i < $length / 2; $i++) { //length of the word divided by 2
        if ($word[$i] !== $word[$length - $i - 1]) { //if the letters don't match
            return false; //do this lol.
        }
    }
    return true;// if all letters match, return true
}

$wordToCheck = "poop"; //Change this word to check if palindrome

if (isPalindrome($wordToCheck)) {
    echo "$wordToCheck is a palindrome.";
} else {
    echo "$wordToCheck is not a palindrome.";
}
?>
