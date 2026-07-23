<?php
require_once __DIR__ . "/Rectangle.php";
require_once __DIR__ . "/Triangle.php";

$triangle = new Triangle(5, 8);
$rectangle = new Rectangle(8, 23);

echo "rectangle area: " . $rectangle->calculateArea();
echo PHP_EOL;
echo "triangle area: " . $triangle->calculateArea();
