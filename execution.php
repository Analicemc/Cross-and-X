<?php
require ('drawing.php');
$cross = new drawing;
$cross->lines = [0 => '...*...',
1 => '.*****.'];
$cross->linesPosition = [0 => 0,
1 => 1,
2 => 0,
3 => 0,
4 => 0];

$x = new drawing;
$x->lines = [ 0 => '*...*',
 1 => '.*.*.', 
 2 => '..*..'];
$x->linesPosition = [0 => 0,
 1 => 1,
 2 => 2,
 3 => 1,
 4 => 0];

 $square = new drawing;
 $square->lines = [ 0 => "*******",
 1 => "*.....*"];
 $square->linesPosition = [0 => 0,
 1 => 1,
 2 => 1,
 3 => 1,
 4 => 0];

 $cross->draw();
 echo "\n| | | | | | | | | | | | | | | | | | | | | | | | | | | \n\n";
$x->draw();
echo "\n| | | | | | | | | | | | | | | | | | | | | | | | | | | \n\n";
$square->draw();