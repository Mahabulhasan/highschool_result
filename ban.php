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
   $s="UPDATE seven SET   banw='".$_POST['banw'][$i]."', banm='".$_POST['banm'][$i]."' ,
	                       bant=banw+banm ,
						    
						 	bangp=(CASE WHEN bant>=80 AND bant<=100 THEN 5
                               WHEN bant>=70 AND  bant<=79 THEN 4
                               WHEN bant>=60 AND  bant<=69 THEN 3.5
                               WHEN bant>=50 AND  bant<=59 THEN 3
                               WHEN bant>=40 AND  bant<=49 THEN 2
                               WHEN bant>=33 AND bant<=39 THEN 1
                               ELSE 0 END) ,
                           
                           bang=(CASE WHEN bant>=80 AND bant<=100 THEN 'A+'
                              WHEN bant>=70 AND  bant<=79 THEN 'A'
                              WHEN bant>=60 AND  bant<=69 THEN 'A-'
                              WHEN bant>=50 AND  bant<=59 THEN 'B'
                              WHEN bant>=40 AND  bant<=49 THEN 'C'
                              WHEN bant>=33 AND bant<=39 THEN 'D'
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
				 $sql="SELECT COUNT(id) AS sum FROM `eight`  ";
				  $sql_result=mysqli_query($conn,$sql);
				  while($row=mysqli_fetch_assoc($sql_result)){
					  $output=$row['sum']; 
				  }	
	
				  $query=" SELECT*  FROM seven as ban , seven_math as mat   WHERE ban.roll=mat.roll ";
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
			   if($row['banw']==0){
				   echo "";
			   }else{
				   echo $row['banw'] ;
			   }

			  ?>" /> </td>
			
			 <td><input type="number" class="form-control" autocomplete="off"  name="banm[]" value="<?php  
			 
			 if($row['banm']==0){
				   echo "";
			   }else{
				   echo $row['banm'] ;
			   }?>" /> </td>
			 
			 
		  <td> <?php echo $row['bant']; ?> </td>
		  <td> <?php echo $row['bangp']; ?> </td>
		  <td> <?php echo $row['bang']; ?> </td>
		  <td> <?php echo $row['matt']; ?> </td>
		  <td> <?php echo $row['matg']; ?> </td>
		  <td> <?php echo $row['matgp']; ?> </td>
		 
		  </tr>
			  <?php }  ?>
			
	   </tbody> 
	   </table>
	  
	    
	      <input type ="submit" value="Submit"  class="btn btn-info" name ="submit"/>
       </form>
	   
     </main>

</body>
</html>