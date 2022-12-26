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

   if(isset($_POST['submit'])){
 for($i=0; $i<$_POST['numbers']; $i++)
 {
   $s="UPDATE seven_math SET   matw='".$_POST['banw'][$i]."',matn='".$_POST['banm'][$i]."',matt=matw+matn,
   							matgp=(CASE WHEN matt>=80 AND matt<=100 THEN 5
                               WHEN matt>=70 AND  matt<=79 THEN 4
                               WHEN matt>=60 AND  matt<=69 THEN 3.5
                               WHEN matt>=50 AND  matt<=59 THEN 3
                               WHEN matt>=40 AND  matt<=49 THEN 2
                               WHEN matt>=33 AND matt<=39 THEN 1
                               ELSE 0 END) ,
                           
                           matg=(CASE WHEN matt>=80 AND matt<=100 THEN 'A+'
                              WHEN matt>=70 AND  matt<=79 THEN 'A'
                              WHEN matt>=60 AND  matt<=69 THEN 'A-'
                              WHEN matt>=50 AND  matt<=59 THEN 'B'
                              WHEN matt>=40 AND  matt<=49 THEN 'C'
                              WHEN matt>=33 AND matt<=39 THEN 'D'
                              ELSE 'F' END) 
	
                   WHERE id='".$_POST['id'][$i]."'	";
	 
	 if(!mysqli_query($conn ,$s))
		 echo mysql_error();
	  else
		   echo '<script> swal("Marks  Input Update Successful", "!", "success"); </script>';
	  
 }
   }

?>  
			 

			 
			<form method="post" action="">	 
		 
		 <?php
				 $sql="SELECT COUNT(id) AS sum FROM `seven_math`  ";
				  $sql_result=mysqli_query($conn,$sql);
				  while($row=mysqli_fetch_assoc($sql_result)){
					  $output=$row['sum']; 
				  }	
	
				  $query=" SELECT * FROM `seven_math`  order by roll  ";
				  $query_run=mysqli_query($conn,$query);
				  foreach($query_run as $row)
				  {
			?>	
			
		    <input type="hidden" name="id[]" value="<?php echo $row['id'];?>" /> 
			<input type="hidden" name="numbers" value="<?php echo $output ; ?>" />
		 
		 <tr > 
			 <td><?php echo $row['roll'];?> </td>
		     <td><?php echo $row['name'];?> </td>
			
			<td><input type="number"   class="form-control" autocomplete="off" name="banw[]" value="<?php 
			   if($row['matw']==0){
				   echo "";
			   }else{
				   echo $row['matw'] ;
			   }

			  ?>" /> </td>
			
			 <td><input type="number" class="form-control" autocomplete="off"  name="banm[]" value="<?php  
			 
			 if($row['matn']==0){
				   echo "";
			   }else{
				   echo $row['matn'] ;
			   }?>" /> </td>
			 
			 
		  <td> <?php echo $row['matt']; ?> </td>
		  <td> <?php echo $row['matgp']; ?> </td>
		  <td> <?php echo $row['matg']; ?> </td>
		 
		  </tr>
			  <?php }  ?>
			
	   </tbody> 
	   </table>
	  
	    
	      <input type ="submit" value="Submit"  class="btn btn-info" name ="submit"/>
       </form>
	   
     </main>
</body>
</html>