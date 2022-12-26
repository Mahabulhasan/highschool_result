<?php
require 'database.php';


?>
<html>
<body>
	<main>
       <h3>Marks Input </h3> 
	
  
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

   if(isset($_POST['submit1'])){
   		 $col1=$_POST['col1'];
		 $col2=$_POST['col2'];
		 $col3=$_POST['col3'];
		 $col4=$_POST['col4'];
		 $col5=$_POST['col5'];

		// echo "$col1";


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


		$s="UPDATE result_stt set result_stt='0',publish=0 WHERE class_n='$table'";
if(!mysqli_query($conn ,$s))
		 echo mysql_error();
	  else
		   echo '<script> swal("Marks  Input Update Successful", "!", "success"); </script>';
	  
 }
   }

?>  
			 
	
			 
		<form method="post" >	 
		 
		 <?php
		 $col1=$_POST['sub']."w";
		 $col2=$_POST['sub']."m";
		 $col3=$_POST['sub']."t";
		 $col4=$_POST['sub']."g";
		 $col5=$_POST['sub']."gp";

		

				 $sql="SELECT COUNT(id) AS sum FROM ".$_POST['classss']."  ";
				  $sql_result=mysqli_query($conn,$sql);
				  while($row=mysqli_fetch_assoc($sql_result)){
					  $output=$row['sum']; 
				  }	
	
				  $query=" SELECT student_id,roll,student_name,$col1,$col2,$col3,$col4,$col5  FROM student_info as info,".$table." as class WHERE info.student_id=class.id ORDER BY roll  ";

				 // echo "$query";


				  $query_run=mysqli_query($conn,$query);
				  foreach($query_run as $row)
				  {
			?>	
			
		    <input type="hidden" name="id[]" value="<?php echo $row['student_id'];?>" /> 
			<input type="hidden" name="numbers" value="<?php echo $output ; ?>" />
			<input type="hidden" name="classss" value="<?php echo $table ; ?>" />
			<input type="hidden" name="col1" value="<?php echo $col1 ; ?>" />
			<input type="hidden" name="col2" value="<?php echo $col2 ; ?>" />
			<input type="hidden" name="col3" value="<?php echo $col3 ; ?>" />
			<input type="hidden" name="col4" value="<?php echo $col4 ; ?>" />
			<input type="hidden" name="col5" value="<?php echo $col5 ; ?>" />
			<input type="hidden" name="sub" value="<?php echo $_POST['sub'] ; ?>" />
		 
		 <tr > 
			 <td><?php echo $row['roll'];?> </td>
		     <td><?php echo $row['student_name'];?> </td>
			
			<td><input type="number"   class="form-control" autocomplete="off" name="banw[]" value="<?php 
			   if($row[$col1]==0){
				   echo "";
			   }else{
				   echo $row[$col1] ;
			   }

			  ?>" /> </td>
			
			 <td><input type="number" class="form-control" autocomplete="off"  name="banm[]" value="<?php  
			 
			 if($row[$col2]==0){
				   echo "";
			   }else{
				   echo $row[$col2] ;
			   }?>" /> </td>
			 
			 
		  <td> <?php echo $row[$col3]; ?> </td>
		  <td> <?php echo $row[$col4]; ?> </td>
		  <td> <?php echo $row[$col5]; ?> </td>
		 
		  </tr>
			  <?php }  ?>
			
	   </tbody> 
	   </table>
	  
	    
	      <input type ="submit" value="Submit1"  class="btn btn-info" name ="submit1"/>
       </form>
	   
     </main>
</body>
</html>