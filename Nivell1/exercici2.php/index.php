<?php
require_once __DIR__ . "/Rectangle.php";
require_once __DIR__ . "/Triangle.php";
require_once __DIR__ ."/circleNivell2.php";

$triangle = new Triangle(5, 8);
$rectangle = new Rectangle(8, 23);
$circle = new Circle(8);

echo "rectangle area: " . $rectangle->calculateArea();
echo PHP_EOL;
echo "triangle area: " . $triangle->calculateArea();
echo PHP_EOL;
echo "circle area: " . $circle->calculateArea();
