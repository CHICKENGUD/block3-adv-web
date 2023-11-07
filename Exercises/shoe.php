<?php

ini_set('display_errors', 1);

class Shoe
{
    public $shoeSize;
    public $footSize = 8;
}

$brianShoe = new Shoe();
echo $brianShoe->footSize; //yea this works lol.

// class Shoe {
//     private $brand;
//     private $size;
//     private $color;
//     private $isWorn = false;

//     public function __construct($brand, $size, $color) {
//         $this->brand = $brand;
//         $this->size = $size;
//         $this->color = $color;
//     }

//     public function wear() {
//         if (!$this->isWorn) {
//             $this->isWorn = true;
//             echo "You put on the {$this->color} {$this->brand} shoe in size {$this->size}.\n";
//         } else {
//             echo "You're already wearing the {$this->color} {$this->brand} shoe.\n";
//         }
//     }

//     public function takeOff() {
//         if ($this->isWorn) {
//             $this->isWorn = false;
//             echo "You took off the {$this->color} {$this->brand} shoe.\n";
//         } else {
//             echo "You're not wearing the {$this->color} {$this->brand} shoe.\n";
//         }
//     }
// }

// // Example usage
// $myShoe = new Shoe("Nike", 9, "blue");
// $myShoe->wear();  // Output: "You put on the blue Nike shoe in size 9."
// $myShoe->wear();  // Output: "You're already wearing the blue Nike shoe."
// $myShoe->takeOff();  // Output: "You took off the blue Nike shoe."
// $myShoe->takeOff();  // Output: "You're not wearing the blue Nike shoe."

?>