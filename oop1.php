<?php

   class car{
    public $color;
    
    public function setColor($cname){
        return 'Car color : '.$this->color=$cname;
        
    }
   }
    $newcar=new car;
    echo $newcar->setColor('blue');
    echo '<hr>';
    echo $newcar->setColor('green');
        
           
    
