<?php
class drawing{
    public $lines;
    public $linesPosition;

    public function draw(){
        for($i = 0; $i < 5; $i++){
            echo $this->lines[$this->linesPosition[$i]] . "\n";
        }
    }
}

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


 $cross->draw();
 echo "\n| | | | | | | | | | | | | | | | | | | | | | | | | | | \n\n";
$x->draw();
