


<?php 
require 'database.php';
$tablename=$_POST['class'];
echo $tablename;


   if(isset($_POST['submit'])){
 for($i=0; $i<$_POST['numbers']; $i++)
 {
   $sql="INSERT INTO $tablename (id, roll,foth) VALUES ('".$_POST['id'][$i]."','".$_POST['roll'][$i]."','".$_POST['forth'][$i]."')";
 // INSERT INTO `student_info`(`student_id`, `student_name`) VALUES ('1720122','satu');
 //  echo $s;
 	//$sql = "INSERT INTO `student_info`(`student_id`, `student_name`) VALUES ('1720123','satu')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$all='all';
$table2=substr($tablename,0,10).$all;

if(strpos($tablename, 'cl_10') !== false){
  $table2=substr($tablename,0,11).$all;
}


$sql="INSERT INTO $table2 (id, roll) VALUES ('".$_POST['id'][$i]."','".$_POST['roll'][$i]."')";
 // INSERT INTO `student_info`(`student_id`, `student_name`) VALUES ('1720122','satu');
 //  echo $s;
 	//$sql = "INSERT INTO `student_info`(`student_id`, `student_name`) VALUES ('1720123','satu')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


   
	 
	 
	  
 }
   }

  

?> 

