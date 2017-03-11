<?php
   
   abstract class parentcar
   {
     abstract  public function fill($oil);
   }

     class car extends parentcar
     {
        public $tank = 10;
        
         public function fill($oil)
         {
             return $this->tank = $this->tank + $oil ;
         }
         
         public function ride ($distance)
         {
             $mile = $distance;
             $fule =  $mile / 50 ;
             return $this->tank = $this->tank - $fule ;
         }
         
     }

$bmw = new car();
echo $bmw->fill(100);
echo "<br/>";
echo $bmw->ride(20);

?>