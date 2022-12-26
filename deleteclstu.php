<?php

require 'database.php';

if(isset($_POST['submit'])){
	$class=$_POST['class'];
	$id=$_POST['stu_id'];
	
	$s="DELETE FROM $class WHERE id=$id";
	if(!mysqli_query($conn,$s))
		echo "Data not found";
	else{
		echo "Delete successfully";
	}



}

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="post">
		<select name="class">
		<option disabled selected>--Select Class--</option>
		<?php
        $s="SELECT cl_name From class_name";
        $data=mysqli_query($conn,"SELECT class_n From result_stt WHERE publish=0" );
    	 while($raw = mysqli_fetch_array($data)){
           	echo "<option value='".$raw['class_n']."'>".$raw['class_n']."</option>";
           	


           }
    ?>  

    <input type="number" name="stu_id" placeholder="student id">
    <input type="submit" name="submit" value="submit">

	</select>
		


	</form>

	

</body>
</html>