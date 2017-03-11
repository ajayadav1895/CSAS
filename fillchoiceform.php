<html>
<head>
<title>choice filling form </title>
</head>
<body>
<?php

include('.\databaseclass.php');

$database = new database();

$sql = "select * from institute ";
$result = mysqli_query($sql);
?>
<select name="clgname">
<option>

<?php 
while($row = mysqli_fetch_assoc($result))
   {
          echo $row['name'];
   }
?>

</option>
</select>

</body>
</html>
