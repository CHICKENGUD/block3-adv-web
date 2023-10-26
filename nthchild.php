<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        p:nth-child(odd){
            background-color: rgba(222, 222, 222, 0.5);
        }
        
    </style>


</head>
<body>
    
</body>
</html>

<?php

$sampleArray = array(1, 2, 3, "red", "blue", "green");

for ($i = 0; $i < count($sampleArray); $i++) {
    $class = ($i+1) % 2 ? 'even' : 'odd';
    echo "<p class='$class'>index $i contains: $sampleArray[$i]</p>";
}



?>

<?php
    $name = "Peter";
    echo $name[2]
?>;

<?php //exercise, create a function that checks if a word is a palindrome, using only basics.

 //part 2, if you have a phrase where you have a space, and anywhere inside the phrase, you can tell me if there's a pallindrome.
 

 //RULES
 
 //NO USING STRING FUNCTIONS
 //CAN USE: ARRAYS, FOR IF ELSE, CONTINUE, AND BREAK.

 //THEORY


?>

<!-- ada
adam if this is madam, then it'd be a reflection from the back. 
Forwards to the back, backwards to the front.
a function to shove letters into, and conditionals.
ana
anna -->

<?php
    $expr = "dec";
    switch($expr) {
        case "jan":
            echo "january";
            break;
        case "dec":
            echo "december";
            break;
        default:
            echo "enjoy!";
            break;
    }
?>