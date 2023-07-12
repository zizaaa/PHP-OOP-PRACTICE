<?php
    abstract class Shape {
        protected $name;
        abstract public function description();
    }

    interface IShape {
        public function getArea($length, $width = null, $radius = null);
        public function getPerimeter($length, $width = null, $radius = null);
    }

    //Square
        class Square extends Shape implements IShape {
            public function description() {
                return "Square has four equal sides.";
            }

            public function getArea($length, $width = null, $radius = null) {
                if ($length === $width) {
                    return $length * $length;
                } else {
                    return "Invalid: Length and width must be equal for a square.";
                }
            }

            public function getPerimeter($length, $width = null, $radius = null) {
                if ($length === $width) {
                    return 4 * $length;
                } else {
                    return "Invalid: Length and width must be equal for a square.";
                }
            }
        }

        $shape1 = new Square();
        echo $shape1->description() . "<br>"; // output "Square have four equal sides."
        echo $shape1->getArea(4, 4) . "<br>"; // output 16
        echo $shape1->getArea(4, 3) . "<br>"; // output "invalid" as length and width needs to be equal
        echo $shape1->getPerimeter(4, 4) . "<br>"; // output 16
        echo $shape1->getPerimeter(4, 3) . "<br>"; // output "invalid" as length and width needs to be equal

    //Rectangle
        class Rectangle extends Shape implements IShape {
            public function description() {
                return "Rectangle has two equal sides.";
            }

            public function getArea($length, $width = null, $radius = null) {
                return $length * $width;
            }

            public function getPerimeter($length, $width = null, $radius = null) {
                return 2 * ($length + $width);
            }
        }

        $shape2 = new Rectangle();
        echo $shape2->description() . "<br>"; // output "Rectangle have two equal sides."
        echo $shape2->getArea(4, 6) . "<br>"; // output 24
        echo $shape2->getPerimeter(4, 6) . "<br>"; // output 20

        class Triangle extends Shape implements IShape {
            public function description() {
                return "Triangle has three sides.";
            }

            public function getArea($length, $width = null, $radius = null) {
                return 0.5 * $length * $width;
            }

            public function getPerimeter($length, $width = null, $radius = null) {
                return $length + $width + $radius;
            }
        }

        $shape3 = new Triangle();
        echo $shape3->description() . "<br>"; // output "Triangle have three sides."
        echo $shape3->getArea(4, 6) . "<br>"; // output 12
        echo $shape3->getPerimeter(4, 6, 7) . "<br>"; // output 17

    //Circle
        class Circle extends Shape implements IShape {
            public function description() {
                return "Circle has no sides, only a curve.";
            }

            public function getArea($length, $width = null, $radius = null) {
                return pi() * $length * $length;
            }

            public function getPerimeter($length, $width = null, $radius = null) {
                return 2 * pi() * $length;
            }
        }

        $shape4 = new Circle();
        echo $shape4->description() . "<br>"; // output "Circle have no sides only curve."
        echo $shape4->getArea(5) . "<br>"; // output 78.54, consider the first parameter as the radius value
        echo $shape4->getPerimeter(5) . "<br>"; // output 31.416, consider the first parameter as the radius value
?>
