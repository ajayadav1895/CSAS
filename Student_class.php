<?php

class student
 {
   public $name;
   public $rollno;
   public $rank;
   public $address;
   public $choicestatus;
   public $admissionstatus;
   public $allotmentStatus;



   public function getStudentDetails()
       {
         $sql = "select * from student";
         $result = mysqli_query($this->connect,$sql);
         while($row = mysqli_fetch_assoc($result))
            {
                    echo " Student Name  :  ".$row['name']." Roll No  :  ".$row['rollno']." Rank  :  ".$row['rank']." Address  :  ".$row['address']." Choice Status  :  ".$row['choicestatus']." Admission Status  :  ".$row['admissionstatus']." Allotment Status  :  ".$row['allotmentStatus']."<br/>";
             
           }
  }

}

