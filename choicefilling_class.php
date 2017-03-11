<?php

 class choice
   {
      public $servername='localhost';
      public $username='root';
      public $password='';
      public $db='phpoops';
      public $startDate;
      public $endDate;

    public function __construct ($servername,$username,$password,$db)
    {
        $this->connect = mysqli_connect($servername,$username,$password,$db);
        if($this->connect)
            echo "connection successfull";
        else
            echo "not connected";
    }

    public function printChoiceFilling($rollno)
       {
          echo " Your filled choices are ";

         $sql = "select * from choicefilling where rollno = ".$rollno;
         $result = mysqli_query($this->connect,$sql);
         
         while($row = mysqli_fetch_assoc($result))
          {
             echo "Firstchoice : ".$row['firstchoice']."<br/>"."Secondchoice : ".$row['secondchoice']."<br/>"."Thirdchoice : ".$row['thirdchoice']."<br/>"."Fourthchoice : ".$row['fourthchoice']."<br/>"."Fifthchoice : ".$row['fifthchoice']."<br/>".
          }
       }

    public function fillchoice($rollno)
           {
              $sql = "INSERT INTO choicefilling (rollno,firstchoice,secondchoice,thirdchoice,fourthchoice,fifthchoice) VALUES (".$rollno.","."'".$_POST['firstchoice']."'".","."'".$_POST['secondchoice']."'".","."'".$_POST['thirdchoice']."'".","."'".$_POST['fourthchoice']."'".","."'".$_POST['fifthchoice']."'".")"." ";
              if($this->connect,$sql)
	           echo "inserted"
              else
                   echo "not inserted";
           }

 public function editchoice($rollno)
          {
              $sql = "UPDATE choicefilling SET firstchoice " . "=" .$_POST['firstchoice'].","."seconchoice = ".$_POST['secondchoice'].","."thirdchoice = ".$_POST['thirdchoice'].","."fourthchoice = ".$_POST['fourthchoice'].","."fifthchoice = ".$_POST['fifthchoice']."where rollno = ".$rollno"";
              if($this->connect,$sql)
	           echo "updated"
              else
                   echo "not updated";
         } 

    }

?>
