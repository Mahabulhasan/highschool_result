<?php
require 'database.php';


?>
<html>
<body>
	<main>
       <h3>Cheack marks upload complete or not </h3> 
	
  
 <table  style="border:1px solid #acacac">
    <thead>
           <tr style="background: whitesmoke;">
                  
                  
			       <th width ="15%">Roll</th>
			       <th width ="15%"> Name of Student </th>
				   <th width="15%"><span class="dotvalue"></span>bangla 1st</th>
				   <th width="15%"><span class="dotvalue"></span>bangla 2nd</th> 
				   <th width="15%"><span class="dotvalue"></span>english 1st</th>
				   <th width="15%"><span class="dotvalue"></span>english 2nd</th> 
				   <th width="15%"><span class="dotvalue"></span>math</th>
				   <th width="15%"><span class="dotvalue"></span>ICT</th> 
				   <th width="15%"><span class="dotvalue"></span>dharma</th>
				   <th width="15%"><span class="dotvalue"></span>phy</th> 
				    <th width="15%"><span class="dotvalue"></span>che</th>
				    <th width="15%"><span class="dotvalue"></span>bio</th> 
				    <th width="15%"><span class="dotvalue"></span>forth</th>  
                   				   
        
         </tr>
  </thead>
    <tbody>
	
<?php 




$table =$_POST['class_name'];
$all='all';
$table2=substr($_POST['class_name'],0,10).$all;
if(strpos($_POST['class_name'], 'cl_10') !== false){
	$table2=substr($_POST['class_name'],0,11).$all;

}

echo "$table2";


$to_with_out_forth;

//echo "$table";

   if(isset($_POST['submit1'])){

   		 $col1=$_POST['col1'];
		 $col2=$_POST['col2'];
		 $col3=$_POST['col3'];
		 $col4=$_POST['col4'];
		 $col5=$_POST['col5'];
		 $col6=$_POST['col6'];
		 $col7=$_POST['col7'];
		 $col8=$_POST['col8'];
		 $col9=$_POST['col9'];
		 $col10=$_POST['col10'];
		 $col11=$_POST['col11'];
		 $result="Totalgp";





		 
		 


 for($i=0; $i<$_POST['numbers']; $i++)
 {
 	$ban=$_POST[$col1][$i]+$_POST[$col2][$i];
 	$ban=$ban/2;
 	$eng=$_POST[$col3][$i]+$_POST[$col4][$i];

 	$eng=$eng/2;


 	if($ban>=80 && $ban<=100)
 		$bangp=5;
 	else if($ban>=70 && $ban<=79)
 		$bangp=4;
 	else if($ban>=60 && $ban<=69)
 		$bangp=3.5;
 	else if($ban>=50 && $ban<=59)
 		$bangp=3;
 	else if($ban>=40 && $ban<=49)
 		$bangp=2;
 	else if($ban>=33 && $ban<=39)
 		$bangp=1;
 	else $bangp=0;


 	if($eng>=80 && $eng<=100)
 		$enggp=5;
 	else if($eng>=70 && $eng<=79)
 		$enggp=4;
 	else if($eng>=60 && $eng<=69)
 		$enggp=3.5;
 	else if($eng>=50 && $eng<=59)
 		$enggp=3;
 	else if($eng>=40 && $eng<=49)
 		$enggp=2;
 	else if($eng>=33 && $eng<=39)
 		$enggp=1;
 	else $enggp=0;

 	//echo "$ban";



 	
 	
	
 	
 	
 	if ($bangp==0||
 		$enggp==0||
 		$_POST[$col5][$i]==0||
 		$_POST[$col6][$i]==0||
 		$_POST[$col7][$i]==0||
 		$_POST[$col8][$i]==0||
 		$_POST[$col9][$i]==0||
 		$_POST[$col10][$i]==0) {
 		$s="UPDATE $table SET totalg='F' ,To_gp_with=0,Totalgp=0

 		 WHERE id='".$_POST['id'][$i]."'";


 		 echo "$s";
 		 if(!mysqli_query($conn ,$s))
		 echo mysql_error();
	  else
		   echo '<script> swal("Marks  Input Update Successful", "!", "success"); </script>';

  		$s="UPDATE $table2 SET ban12gp=(CASE WHEN $ban>=80 AND $ban<=100 THEN 5
                               WHEN $ban>=70 AND  $ban<=79 THEN 4
                               WHEN $ban>=60 AND  $ban<=69 THEN 3.5
                               WHEN $ban>=50 AND  $ban<=59 THEN 3
                               WHEN $ban>=40 AND  $ban<=49 THEN 2
                               WHEN $ban>=33 AND $ban<=39 THEN 1
                               ELSE 0 END),

                   ban12g=(CASE WHEN $ban>=80 AND $ban<=100 THEN 'A+'
                              WHEN $ban>=70 AND  $ban<=79 THEN 'A'
                              WHEN $ban>=60 AND  $ban<=69 THEN 'A-'
                              WHEN $ban>=50 AND  $ban<=59 THEN 'B'
                              WHEN $ban>=40 AND  $ban<=49 THEN 'C'
                              WHEN $ban>=33 AND $ban<=39 THEN 'D'
                              ELSE 'F' END) ,
                     eng12gp=(CASE WHEN $eng>=80 AND $eng<=100 THEN 5
                               WHEN $eng>=70 AND  $eng<=79 THEN 4
                               WHEN $eng>=60 AND  $eng<=69 THEN 3.5
                               WHEN $eng>=50 AND  $eng<=59 THEN 3
                               WHEN $eng>=40 AND  $eng<=49 THEN 2
                               WHEN $eng>=33 AND $eng<=39 THEN 1
                               ELSE 0 END),

                   eng12g=(CASE WHEN $eng>=80 AND $eng<=100 THEN 'A+'
                              WHEN $eng>=70 AND  $eng<=79 THEN 'A'
                              WHEN $eng>=60 AND  $eng<=69 THEN 'A-'
                              WHEN $eng>=50 AND  $eng<=59 THEN 'B'
                              WHEN $eng>=40 AND  $eng<=49 THEN 'C'
                              WHEN $eng>=33 AND $eng<=39 THEN 'D'
                              ELSE 'F' END)

 		 WHERE id='".$_POST['id'][$i]."'";

 		// echo "$s";
 		 if(!mysqli_query($conn ,$s))
		 echo mysql_error();
	  else
		   echo '<script> swal("Marks  Input Update Successful", "!", "success"); </script>';


		$s="UPDATE result_stt_sci set result_stt_sci=1 WHERE class_n='$table'";
		echo "$s";
if(!mysqli_query($conn ,$s))
		 echo mysql_error();
	  else
		   echo '<script> swal("Marks  Input Update Successful", "!", "success"); </script>';
		
		


 		
 	}
 	


 	else
 	{  
 		if($_POST[$col11][$i]<=2){
 		$total=$bangp+$enggp+
 		$_POST[$col5][$i]+
 		$_POST[$col6][$i]+
 		$_POST[$col7][$i]+
 		$_POST[$col8][$i]+
 		$_POST[$col9][$i]+
 		$_POST[$col10][$i]
 		;

 		

 		$total=$total/8;
 		$to_with_out_forth=$total;


 			}
 			else{
 				$total=$bangp+$enggp+
 			$_POST[$col5][$i]+
 			$_POST[$col6][$i]+
 			$_POST[$col7][$i]+
 			$_POST[$col8][$i]+
 			$_POST[$col9][$i]+
 			$_POST[$col10][$i]+
 			$_POST[$col11][$i]-2
 			;

 		

 		$total=$total/8;
 		$to_with_out_forth=(($total*8+2)-$_POST[$col11][$i])/8;


 			}
 		
 		//$total=round_to_2dp($total);
 		$total=number_format($total,2);
 		$to_with_out_forth=number_format($to_with_out_forth,2);
 		//echo "$total";

 		if($total==5){
 			$totalg='A+';
 			
 		}
 		else if($total>=4 && $total<5){
 			$totalg='A';
 			
 		}
 		else if($total>=3.5 && $total<4){
 			$totalg='A-';
 			
 		}
 		else if($total>=3 && $total<3.5){
 			$totalg='B';
 			
 		}
 		else if($total>=2 && $total<3){
 			$totalg='C';
 			
 		}
 		else if($total>=1 && $total<2){
 			$totalg='D';
 			
 		}

 		//echo "$totalg";


 		
 		$s="UPDATE $table SET totalg='$totalg',To_gp_with=$total,Totalgp=$to_with_out_forth

 		 WHERE id='".$_POST['id'][$i]."'";

 		// echo "$s";
 		 if(!mysqli_query($conn ,$s))
		 echo mysql_error();
	  else
		   echo '<script> swal("Marks  Input Update Successful", "!", "success"); </script>';

  		$s="UPDATE $table2 SET ban12gp=(CASE WHEN $ban>=80 AND $ban<=100 THEN 5
                               WHEN $ban>=70 AND  $ban<=79 THEN 4
                               WHEN $ban>=60 AND  $ban<=69 THEN 3.5
                               WHEN $ban>=50 AND  $ban<=59 THEN 3
                               WHEN $ban>=40 AND  $ban<=49 THEN 2
                               WHEN $ban>=33 AND $ban<=39 THEN 1
                               ELSE 0 END),

                   ban12g=(CASE WHEN $ban>=80 AND $ban<=100 THEN 'A+'
                              WHEN $ban>=70 AND  $ban<=79 THEN 'A'
                              WHEN $ban>=60 AND  $ban<=69 THEN 'A-'
                              WHEN $ban>=50 AND  $ban<=59 THEN 'B'
                              WHEN $ban>=40 AND  $ban<=49 THEN 'C'
                              WHEN $ban>=33 AND $ban<=39 THEN 'D'
                              ELSE 'F' END) ,
                     eng12gp=(CASE WHEN $eng>=80 AND $eng<=100 THEN 5
                               WHEN $eng>=70 AND  $eng<=79 THEN 4
                               WHEN $eng>=60 AND  $eng<=69 THEN 3.5
                               WHEN $eng>=50 AND  $eng<=59 THEN 3
                               WHEN $eng>=40 AND  $eng<=49 THEN 2
                               WHEN $eng>=33 AND $eng<=39 THEN 1
                               ELSE 0 END),

                   eng12g=(CASE WHEN $eng>=80 AND $eng<=100 THEN 'A+'
                              WHEN $eng>=70 AND  $eng<=79 THEN 'A'
                              WHEN $eng>=60 AND  $eng<=69 THEN 'A-'
                              WHEN $eng>=50 AND  $eng<=59 THEN 'B'
                              WHEN $eng>=40 AND  $eng<=49 THEN 'C'
                              WHEN $eng>=33 AND $eng<=39 THEN 'D'
                              ELSE 'F' END)

 		 WHERE id='".$_POST['id'][$i]."'";

 		// echo "$s";
 		 if(!mysqli_query($conn ,$s))
		 echo mysql_error();
	  else
		   echo '<script> swal("Marks  Input Update Successful", "!", "success"); </script>';


		$s="UPDATE result_stt_sci set result_stt=1 WHERE class_n='$table'";
if(!mysqli_query($conn ,$s))
		 echo mysql_error();
	  else
		   echo '<script> swal("Marks  Input Update Successful", "!", "success"); </script>';
		$s="UPDATE result_stt_all set result_stt=1 WHERE class_n='$table'";
if(!mysqli_query($conn ,$s))
		 echo mysql_error();
	  else
		   echo '<script> swal("Marks  Input Update Successful", "!", "success"); </script>';




}
 	
 	
 	
 	

 /* $s="UPDATE $table SET   $col1='".$_POST['banw'][$i]."',$col2='".$_POST['banm'][$i]."',$col3= $col1+$col2,
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
	  */
 }
   }

?>  
			 
	
			 
		<form method="post" >	 
		 
		 <?php
		 $col1="ban1t";
		 $col2="ban2t";
		 $col3="eng1w";
		 $col4="eng2w";
		 $col5="matgp";
		 $col6="isgp";
		 $col7="ictgp";
		 $col8="phygp";
		 $col9="chegp";
		 $col10="biogp";
		 $col11="forthgp";
		/* $col3=$_POST['sub']."t";
		 $col4=$_POST['sub']."g";
		 $col5=$_POST['sub']."gp";*/

		

				 $sql="SELECT COUNT(id) AS sum FROM ".$_POST['class_name']."  ";
				  $sql_result=mysqli_query($conn,$sql);
				  while($row=mysqli_fetch_assoc($sql_result)){
					  $output=$row['sum']; 
					  
				  }	
				  
	
				  $query=" SELECT student_id,class.roll,student_name,$col1,$col2,$col3,$col4,$col5,$col6,$col7,$col8,$col9,$col10,$col11  FROM student_info as info,".$table." as class,".$table2." as some  WHERE info.student_id=class.id AND some.id=class.id ORDER BY class.roll";

				 //echo "$query";


				  $query_run=mysqli_query($conn,$query);
				  foreach($query_run as $row)
				  {
			?>	
			
		    <input type="hidden" name="id[]" value="<?php echo $row['student_id'];?>" />
			<input type="hidden" name="ban1t[]" value="<?php echo $row[$col1] ;?>" />
		    <input type="hidden" name="ban2t[]" value="<?php echo $row[$col2];?>" />
		    <input type="hidden" name="eng1w[]" value="<?php echo $row[$col3];?>" />
		    <input type="hidden" name="eng2w[]" value="<?php echo $row[$col4];?>" />
		    <input type="hidden" name="matgp[]" value="<?php echo $row[$col5];?>" />
		    <input type="hidden" name="isgp[]" value="<?php echo $row[$col6];?>" />
		    <input type="hidden" name="ictgp[]" value="<?php echo $row[$col7];?>" />
		    <input type="hidden" name="phygp[]" value="<?php echo $row[$col8];?>" />
		    <input type="hidden" name="chegp[]" value="<?php echo $row[$col9];?>" />
		    <input type="hidden" name="biogp[]" value="<?php echo $row[$col10];?>" />
		    <input type="hidden" name="forthgp[]" value="<?php echo $row[$col11];?>" />


			<input type="hidden" name="numbers" value="<?php echo $output ; ?>" />
			<input type="hidden" name="class_name" value="<?php echo $table ; ?>" />
		    <input type="hidden" name="col1" value="<?php echo $col1 ; ?>" />
			<input type="hidden" name="col2" value="<?php echo $col2 ; ?>" />
			<input type="hidden" name="col3" value="<?php echo $col3 ; ?>" />
			<input type="hidden" name="col4" value="<?php echo $col4 ; ?>" />
			<input type="hidden" name="col5" value="<?php echo $col5 ; ?>" />
			<input type="hidden" name="col6" value="<?php echo $col6 ; ?>" />
			<input type="hidden" name="col7" value="<?php echo $col7 ; ?>" />
			<input type="hidden" name="col8" value="<?php echo $col8 ; ?>" />
			<input type="hidden" name="col9" value="<?php echo $col9 ; ?>" />
			<input type="hidden" name="col10" value="<?php echo $col10 ; ?>" />
			<input type="hidden" name="col11" value="<?php echo $col11 ; ?>" />
			<input type="hidden" name="sub" value="<?php echo $_POST['sub'] ; ?>" />
		 
		 <tr > 
			<td><?php echo $row['roll'];?> </td>
		    <td><?php echo $row['student_name'];?> </td>
			
			<td><?php echo $row[$col1] ;?> </td>
			<td><?php echo $row[$col2] ;?></td>
			<td><?php echo $row[$col3] ;?> </td>
			<td><?php echo $row[$col4] ;?></td>
			<td><?php echo $row[$col5] ;?> </td>
			<td><?php echo $row[$col6] ;?></td>
			<td><?php echo $row[$col7] ;?> </td>
			<td><?php echo $row[$col8] ;?></td>
			<td><?php echo $row[$col9] ;?> </td>
			<td><?php echo $row[$col10] ;?> </td>
			<td><?php echo $row[$col11] ;?> </td>
			
			
			 
			 
		  <!--<td> <?php echo $row[$col3]; ?> </td>
		  <td> <?php echo $row[$col4]; ?> </td>
		  <td> <?php echo $row[$col5]; ?> </td>-->
		 
		  </tr>
			  <?php }  ?>
			
	   </tbody> 
	   </table>
	  
	    
	      <input type ="submit" value="ok"  class="btn btn-info" name ="submit1"/>
       </form>
	   
     </main>
</body>
</html>