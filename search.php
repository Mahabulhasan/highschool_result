<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/design.css">
</head>



<?php
require 'database.php';

if(isset($_POST['submit'])){

	$table=$_POST['class'].$_POST['year'];
	$id=$_POST['id'];

	if ($_POST['class']=='cl_6_') {
		$class='6';
		
	}
	else if ($_POST['class']=='cl_7_') {
		$class='7';
		
	}
	else if ($_POST['class']=='cl_8_') {
		$class='8';
		
	}
	$publishstt=0;
	//echo "$table";

	$s="SELECT publish FROM result_stt WHERE class_n='$table'";
	//echo "$s";
	
	$query_run=mysqli_query($conn,$s);
	while ($row=mysqli_fetch_assoc($query_run)) {
		$publishstt=$row['publish'];
	}

	if($publishstt == 0){
		 echo "Result not publish";
            exit();

	}



	$query=" SELECT student_id,roll,student_name,Father_name,Mother_name,date_of_birth,ban1t,ban2t,ban12g,ban12gp,eng1w,eng2w,eng12g,eng12gp,matt,matg,matgp,bist,bisg,bisgp,bigt,bigg,biggp,dhart,dharg,dhargp,krit,krig,krigp,totalg,Totalgp  FROM student_info as info,".$table." as class WHERE info.student_id=$id AND class.id=$id  ";

				//  echo "$query";
				  if(!mysqli_query($conn ,$query))
		 			echo mysql_error("Error");

		 		else{
		 			$query_run=mysqli_query($conn,$query);




				  while($row = mysqli_fetch_assoc($query_run))
        			{
        				$id=$row['student_id'];
        				$name = $row['student_name'];
        				$roll=$row['roll'];
        				$father=$row['Father_name'];
        				$mother=$row['Mother_name'];
        				$dof=$row['date_of_birth'];

        				$ban1t=$row['ban1t'];
        				$ban2t=$row['ban2t'];
        				$ban12g=$row['ban12g'];
        				$ban12gp=$row['ban12gp'];

        				$eng1w=$row['eng1w'];
        				$eng2w=$row['eng2w'];
        				$eng12g=$row['eng12g'];
        				$eng12gp=$row['eng12gp'];

        				$matt=$row['matt'];
        				$matg=$row['matg'];
        				$matgp=$row['matgp'];

        				$bist=$row['bist'];
        				$bisg=$row['bisg'];
        				$bisgp=$row['bisgp'];

        				$bigt=$row['bigt'];
        				$bigg=$row['bigg'];
        				$biggp=$row['biggp'];

        				$dhart=$row['dhart'];
        				$dharg=$row['dharg'];
        				$dhargp=$row['dhargp'];

        				$krit=$row['krit'];
        				$krig=$row['krig'];
        				$krigp=$row['krigp'];

        				$totalg=$row['totalg'];
        				$Totalgp=$row['Totalgp'];



        				
        			}
        			if(mysqli_num_rows($query_run)==0){
            echo "Result not found student id and class not match";
            exit();
        }

		 		


		}
				  

}


?>

<!--
<br><br>

<h1>Abc high school</h1>
<h5>Examination year <?php echo $_POST['year'];?></h5>

<div class="info">
	<div class="box1">
		<span>id:</span> <?php echo $id ?> <br>
            <span>name:</span> <?php echo $name; ?> <br>
            <span>Class:</span><?php echo $class;?><br>
            <span>Roll No:</span> <?php echo $roll; ?> <br>

	</div>

	<div class="box2">
		<span>father name:</span> <?php echo $father; ?> <br>
            <span>mother name:</span> <?php echo $mother; ?> <br>
            <span>date of birth:</span> <?php echo $dof; ?> <br>
		
	</div>
	
            

</div>


<div class="con">

	<table border="1" cellspacing="0" style="margin-left: auto;margin-right: auto;">
            	<caption>mark distributhin</caption>
            	<tr>
            		<th>subject</th>
            		<th>mark:</th>
            		<th>subject great point:</th>
            		<th>sub gpa:</th>
            		<th>total point</th>
            		<th>total gpa</th>

            	</tr>
            	<tr>
            			<td>bangla</td>
            			<td><?php echo $ban1t; ?>	</td>
            			<td rowspan="2"><?php echo $ban12g; ?>	</td>
            			<td rowspan="2"><?php echo $ban12gp; ?>	</td>
            			<td rowspan="9"><?php echo $totalg; ?>	</td>
            			<td rowspan="9"><?php echo $Totalgp; ?>	</td>
            	</tr>
            	<tr>
            			<td>bangla 2nd</td>
            			<td><?php echo $ban2t; ?>	</td>
            	</tr>

            	<tr>
            		    <td>english 1st</td>
            			<td><?php echo $eng1w; ?>	</td>
            			<td rowspan="2"><?php echo $eng12g; ?>	</td>
            			<td rowspan="2"><?php echo $eng12gp; ?>	</td>
            	</tr>
            	<tr>
            		    <td>english 2nd</td>
            			<td><?php echo $eng2w; ?>	</td>
            	</tr>

            	<tr>
            		    <td>Math</td>
            			<td><?php echo $matt; ?>	</td>
            			<td><?php echo $matg; ?>	</td>
            			<td><?php echo $matgp; ?>	</td>
            	</tr>

            	<tr>
            		    <td>Bangladesh o bisso</td>
            			<td><?php echo $bist; ?>	</td>
            			<td><?php echo $bisg; ?>	</td>
            			<td><?php echo $bisgp; ?>	</td>
            	</tr>

            	<tr>
            		    <td>Since</td>
            			<td><?php echo $bigt; ?>	</td>
            			<td><?php echo $bigg; ?>	</td>
            			<td><?php echo $biggp; ?>	</td>
            	</tr>

            	<tr>
            		    <td>Islam</td>
            			<td><?php echo $dhart; ?>	</td>
            			<td><?php echo $dharg; ?>	</td>
            			<td><?php echo $dhargp; ?>	</td>
            	</tr>

            	<tr>
            		    <td>Agriculture</td>
            			<td><?php echo $krit; ?>	</td>
            			<td><?php echo $krig; ?>	</td>
            			<td><?php echo $krigp; ?>	</td>
            	</tr>


            </table>
	
</div>


            

            <button onclick="window.print()">Print Result</button>

  


	
</body>
</html>-->















<body>
<div>
  <h1>STS high school</h1>
  <h3>Baliyadangi,Thakurgao</h3>
  <h2>ACADEMIC TRANSCRIPT</h2><br><br>
  Name of Students:<?php echo $name; ?><br>
  Father`s Nane:<?php echo $father; ?><br>
  Mother`s Name:<?php echo $mother; ?><br>
  Class:<?php echo $class; ?><br>
  

  
  
  Roll No:<?php echo $roll; ?><br>
  Student Id:<?php echo $id; ?><br>
  
  Date of Birth:<?php echo$dof;?>
<table border="6" style="width:100%">
  <tr>
    <th>SI No</th>
    <th>Name of Subjects</th>
    <th>Marks</th>
    <th>Letter Grade</th>
    <th>Point(GP)</th>
    <th >GPA</th>
    <th>Grade Point Avarage(GPA)</th>
  </tr>

  <tr>
    <td>1</td>
    <td>Bangla 1st</td>
    <td><?php echo $ban1t; ?></td>
    <td rowspan="2"><?php echo $ban12g; ?></td>
    <td rowspan="2"><?php echo $ban12gp; ?></td>
    <td rowspan="9"><?php echo $totalg; ?></td>
    <td rowspan="9"><?php echo $Totalgp; ?></td>

  </tr>



<!--<td>	</td>
            			<td rowspan="2">	</td>
            			<td rowspan="2">	</td>
            			<td rowspan="9"><?php echo $totalg; ?>	</td>
            			<td rowspan="9"><?php echo $Totalgp; ?>	</td>-->




   <tr>
    <td>2</td>
    <td>Bangla 2st</td>
    <td><?php echo $ban2t; ?></td>
    
   

  </tr>

  <tr>
    <td>1</td>
    <td>English 1st</td>
    <td><?php echo $eng1w; ?></td>
    <td rowspan="2"><?php echo $eng12g; ?></td>
    <td rowspan="2"><?php echo $eng12gp; ?></td>
    

  </tr>


   <tr>
    <td>2</td>
    <td>English 2st</td>
    <td><?php echo $eng2w; ?></td>
   </tr>
  
   <tr>
    <td>3</td>
    <td>Mathematics</td>
    <td><?php echo $matt; ?></td>
    <td><?php echo $matg; ?></td>
    <td><?php echo $matgp; ?></td>
    

  </tr>




   <tr>
    <td>4</td>
    <td>Bangladesh and global studies</td>
    <td><?php echo $bist; ?></td>
    <td><?php echo $bisg; ?></td>
    <td><?php echo $bisgp; ?></td>
    
  </tr> <tr>
    <td>5</td>
    <td>Islam and moral education </td>
    <td><?php echo $dhart; ?></td>
    <td><?php echo $dharg; ?></td>
    <td><?php echo $dhargp; ?></td>
   
  </tr> <tr>
    <td>6</td>
    <td>Science</td>
    <td><?php echo $bigt; ?></td>
    <td><?php echo $bigg; ?></td>
    <td><?php echo $biggp; ?></td>
   
  </tr> <tr>
    <td>7</td>
    <td>Agriculture Studies</td>
   <td><?php echo $krit; ?></td>
    <td><?php echo $krig; ?></td>
    <td><?php echo $krigp; ?></td>
   
  </tr> 
</table>
<br>
<br>

 <button onclick="window.print()">Print Result</button>
<h3>Powered by STS school</h3>


</div>

</body>
</html>
	