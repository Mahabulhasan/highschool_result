


<?php 
require 'database.php';
$tablename=$_POST['class'];
echo $tablename;


   if(isset($_POST['submit'])){
 for($i=0; $i<$_POST['numbers']; $i++)
 {
   $sql="INSERT INTO $tablename (id, roll) VALUES ('".$_POST['id'][$i]."','".$_POST['roll'][$i]."')";
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

