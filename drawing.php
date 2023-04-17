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


