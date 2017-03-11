<?php
  
   class calmarks
   {
       public $total;
       
       public function show(array $data)
       {
           foreach($data as $stu)
           {
               echo "Name :   ".$stu[0]."   Marks : ";
               $total = $stu[1] + $stu[2];
               echo $total."<br/>";
           }
       }
       
   }

$stu1 = new calmarks();
$details = array (
array('ajay',13,15),
array('sunny',14,15)
);
   $stu1->show($details);

?>