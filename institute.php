<?php


	public $servername='localhost';	
	public $username='root';
	public $password='';
	public $db='phpoops';


	public $name;
	public $totalseat;
	public $vacantseat;

class institute
{
    
    public function __construct ($servername,$username,$password,$db)
    {
        $this->connect = mysqli_connect($servername,$username,$password,$db);
        if($this->connect)
            echo "connection successfull";
        else
            echo "not connected";
    }
    
    public function getInstituteDetail($institutename)
    {
        $sql = "select * from institute where name = ".$institutename;
        $result = mysqli_query($this->connect,$sql);
            
            while($row = mysqli_fetch_assoc($result) )
            {
                echo "Institute name : ".$row['name']."  total seats : ".$row['totalseat']."<br/>";
            }
    }

}

?>
