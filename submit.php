<?php
require 'database.php';



?>
<html>
<body>
	<main>
       <h3>Bangla / Seven / / Marks Input </h3> 
	
  
 <table  style="border:1px solid #acacac">
    <thead>
           <tr style="background: whitesmoke;">
                  
                  
			       <th width ="5%">Roll</th>
			       <th width ="27%"> Name of Student </th>
				   <th width="15%"><span class="dotvalue"> ...</span>Written</th>
				   <th width="15%"><span class="dotvalue"> ........</span>Mcq</th> 
                   <th width="7%"> Total  </th> 
				   <th width="5%">Gpa </th> 
				   <th width="7%">Grade  </th> 				   
        
         </tr>
  </thead>
    <tbody>
	
<?php 
$table =$_POST['classss'];

   if(isset($_POST['submit'])){
    
   	 $col1=$_POST['col1'];
		 $col2=$_POST['col2'];
		 $col3=$_POST['col3'];
		 $col4=$_POST['col4'];
		 $col5=$_POST['col5'];

		 echo "$col1";


 for($i=0; $i<$_POST['numbers']; $i++)
 {
   $s="UPDATE $table SET   $col1='".$_POST['banw'][$i]."',$col2='".$_POST['banm'][$i]."',$col3= $col1+$col2,
   							$col5=(CASE WHEN $col3>=80 AND $col3<=100 THEN 5
                               WHEN $col3>=70 AND  $col3<=79 THEN 4
                               WHEN $col3>=60 AND  $col3<=69 THEN 3.5
                               WHEN $col3>=50 AND  $col3<=59 THEN 3
                               WHEN $col3>=40 AND  $col3<=49 THEN 2
                               WHEN $col3>=33 AND $col3<=39 THEN 1
                               ELSE 0 END) ,
                           
                           $col4=(CASE WHEN $col3>=80 AND $col3<=100 THEN 'A+'
                              WHEN $col3>=70 AND  $col3<=79 THEN 'A'
                              WHEN $col3>=60 AND  $col3<=69 THEN 'A-'
                              WHEN $col3>=50 AND  $col3<=59 THEN 'B'
                              WHEN $col3>=40 AND  $col3<=49 THEN 'C'
                              WHEN $col3>=33 AND $col3<=39 THEN 'D'
                              ELSE 'F' END) 
	
                  
	
                   WHERE id='".$_POST['id'][$i]."'	";
	 
	 if(!mysqli_query($conn ,$s))
		 echo mysql_error();
	  else
		   echo '<script> swal("Marks  Input Update Successful", "!", "success"); </script>';
	  
 }
   }

?>  
			 