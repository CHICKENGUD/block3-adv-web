<?php

    Class Animal{
        public function roar(){
            echo "R O A R";
        }
    }


    Class Cat extends Animal{
        public function meow(){
            echo "M E O W";
        }
    }

    $testcat = new Cat(); //MAKING MY CAT
    $testcat->meow(); // MAKE CAT GO M E O W

    Class Vehicle{
        public function drive(){
            echo "vroom vroom";
        }
    }

    Class Car extends Vehicle{
        public function repair(){
            echo "car stinky, repairing.";
        }
    }

    $testcar = new Car();
    $testcar->repair();



    // Write a php class called Shape with a method called getArea(). Create a subclass called Rectangle that overrides the getArea() method to calculate the area of a rectangle.

    Class Shape{
        public function getArea(){
            return 0.0;
        }
    }

    Class Rectangle extends Shape{
        private $width;
        private $height;
        
        public function __construct($width, $height){
            $this->width = $width;
            $this->height = $height;
        }

        public function getArea(){
            return $this->width * $this->height;
        }
    }

    $testrectangle = new Rectangle(69, 420);
?>