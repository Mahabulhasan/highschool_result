<?php
require 'database.php';
?>
<html>
<body>
	<main>
       <h3>Entry student of class</h3>

        
      

       

	
  
 <table  style="border:1px solid #acacac">
    <thead>
           <tr style="background: whitesmoke;">
           			<th>student_id</th>
    			   <th> Roll </th>
			       
			</tr>
  </thead>
    <tbody>
    	<?php





    	?>
	
 
			 

			 
			<form method="post" action="insertstu.php">	 
		 
		 <?php
		 
		 for ($i=0; $i <$_POST["totalEntry"] ; $i++) { 
		 	
		 
		
			?>
			<input type="hidden" name="numbers" value="<?php echo $_POST["totalEntry"] ; ?>" />	
			<input type="hidden" name="stutt" value="0" />
			<input type="hidden" name="class" value="<?php echo $_POST["class1"] ; ?>" />	

			<!--<input type="hidden" name="select" value="<?php echo $_POST["select"] ; ?>" />	-->
			
		    
		 
		 <tr >
		 <td><input type="number" class="form-control" autocomplete="off"  name="id[]" value=" " /> </td> 
		 	<td><input type="number" class="form-control" autocomplete="off"  name="roll[]" value=" " /> </td>

			   
			 
			
		<!--	<td><input type="number"   class="form-control" autocomplete="off" name="roll[]" value=" " /> </td> -->
			
			 
			 
			 </tr>
			  <?php  } ?>
			
	   </tbody> 
	   </table>
	  
	    
	      <input type ="submit" value="Submit"  class="btn btn-info" name ="submit"/>
       </form>
	   
     </main>
</body>
</html>