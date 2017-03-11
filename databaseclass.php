<?php
include ('.\institute.php');

 class database
 {
     public $insert;
     public function __construct($servername,$username,$password,$dbname)
     {
        /* if($this->connect($servername,$username,$password,$dbname))
         {
             echo "cennection successful ";
         }
         else
         {
             echo "sorry unable to connect ";
         } */
         $this->connect = mysqli_connect($servername,$username,$password,$dbname);
         
         if($this->connect)
             {
             echo "cennection successful ";
             }
          else
              {
                 echo "sorry unable to connect ";
             }
             
     }
     
     public function select ()
     {
         $query = "select * from student ";
         $result = mysqli_query($this->connect , $query);
         while($row = mysqli_fetch_assoc($result))
         {
             echo $row['name']."  ".$row['rollno']."  ".$row['rank']."<br/>";
         }
     }
   /*  public function connect($servername,$username,$password,$dbname)
            {
             
             if($connect = mysqli_connect($servername,$username,$password,$dbname))
             {
                 return true;
             }
                else
                    return false;
         } */
     
     public function insertdata($name,$rollno,$rank)
     {
         $query = "INSERT INTO student (name,rollno,rank) VALUES ('".$name."','".$rollno."','".$rank."')";
         if(mysqli_query($this->connect,$query))
             echo "successfully inserted";
         else
             echo "not inserted ";
         //echo "data inserted";
     }
 }

$conn = new database('localhost','root','','phpoops') ;
$ins = new institute ('localhost','root','','phpoops');
$ins->showinstitute();
$conn->insertdata('ajay yadav','m150061ca',3);
$conn->select();
?>