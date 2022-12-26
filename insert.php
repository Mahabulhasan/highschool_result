


<?php 
require 'database.php';


   if(isset($_POST['submit'])){
 for($i=0; $i<$_POST['numbers']; $i++)
 {
   $sql="INSERT INTO student_info (student_id, student_name,Father_name,Mother_name,date_of_birth) VALUES ('".$_POST['id'][$i]."','".$_POST['name'][$i]."','".$_POST['f_name'][$i]."','".$_POST['m_name'][$i]."','".$_POST['dof'][$i]."')";
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

