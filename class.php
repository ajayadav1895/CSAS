<?php
  
     class student
      {
          //variable declaration
          public $name;
          public $rank;
          public $rollno;
          
          //insert data into variable
          public function putdata($sname,$rank,$rollno)
          {
              $this->name=$sname;
              $this->rank=$rank;
              $this->rollno=$rollno;
          }
          public function getdetails()
          {
              echo "Name : ".$this->name."<br/>Roll No : ".$this->rollno."<br/>Rank : ".$this->rank;
          }
      }

     $firststu = new student();
     // give data to student 
     $firststu->putdata("ajay",1,"m150059ca");
    // show student details 
     $firststu->getdetails();
?>