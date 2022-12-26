<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/design.css">
</head>



<?php
require 'database.php';
$all='all';
$table2;

if(isset($_POST['submit'])){

    $table=$_POST['class'].$_POST['year'].$_POST['dep'];
   // echo "$table";
    $id=$_POST['id'];

    $table2=substr($table,0,10).$all;

          if(strpos($table, 'cl_10') !== false){
            $table2=substr($table,0,11).$all;}
   

    if ($_POST['class']=='cl_9_') {
        $class='9';
        
    }
    else if ($_POST['class']=='cl_10_') {
        $class='10';
        
    }
    
    $publishstt=0;
    //echo "$table";

    $s="SELECT publish FROM result_stt_all WHERE class_n='$table'";
    //echo "$s";
    
    $query_run=mysqli_query($conn,$s);
    while ($row=mysqli_fetch_assoc($query_run)) {
        $publishstt=$row['publish'];
    }

    if($publishstt == 0){
         echo "Result not publish";
            exit();

    }



   
    $query=" SELECT student_id,class.roll,student_name,Father_name,Mother_name,date_of_birth,ban1t,ban2t,ban12g,ban12gp,eng1w,eng2w,eng12g,eng12gp,matt,matg,matgp,ist,isg,isgp,ictt,ictg,ictgp,scit,scig,scigp,pout,poug,pougp,vgolt,vgolg,vgolgp,itit,itig,itigp,fortht,forthg,forthgp,totalg,To_gp_with,Totalgp  FROM student_info as info,".$table." as class,".$table2." as some  WHERE info.student_id=$id AND some.id=$id AND class.id=$id ORDER BY class.roll";

                 // echo "$query";
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

                        $ist=$row['ist'];
                        $isg=$row['isg'];
                        $isgp=$row['isgp'];

                        $ictt=$row['ictt'];
                        $ictg=$row['ictg'];
                        $ictgp=$row['ictgp'];

                        $scit=$row['scit'];
                        $scig=$row['scig'];
                        $scigp=$row['scigp'];

                        $pout=$row['pout'];
                        $poug=$row['poug'];
                        $pougp=$row['pougp'];

                        $vgolt=$row['vgolt'];
                        $vgolg=$row['vgolg'];
                        $vgolgp=$row['vgolgp'];

                        $itit=$row['itit'];
                        $itig=$row['itig'];
                        $itigp=$row['itigp'];

                        $fortht=$row['fortht'];
                        $forthg=$row['forthg'];
                        $forthgp=$row['forthgp'];

                        

                        $totalg=$row['totalg'];
                        $totalgp_with_out_forth=$row['Totalgp'];
                        $Totalgp=$row['To_gp_with'];



                        
                    }
                    if(mysqli_num_rows($query_run)==0){
            echo "Result not found student id and class not match";
            exit();
        }

                


        }
                  

}


?>
















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
    <th>Grade Point with out Forth (GPA)</th>
  </tr>

  <tr>
    <td>1</td>
    <td>Bangla 1st</td>
    <td><?php echo $ban1t; ?></td>
    <td rowspan="2"><?php echo $ban12g; ?></td>
    <td rowspan="2"><?php echo $ban12gp; ?></td>
    <td rowspan="11" style="text-align: center;"><?php echo $totalg; ?></td>
    <td rowspan="11" style="text-align: center;"><?php echo $Totalgp; ?></td>
    <td rowspan="11" style="text-align: center;"><?php echo $totalgp_with_out_forth; ?></td>

    
  </tr>



<!--<td>    </td>
                        <td rowspan="2">    </td>
                        <td rowspan="2">    </td>
                        <td rowspan="9"><?php echo $totalg; ?>  </td>
                        <td rowspan="9"><?php echo $Totalgp; ?> </td>-->




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
    <td>Science</td>
    <td><?php echo $scit; ?></td>
    <td><?php echo $scig; ?></td>
    <td><?php echo $scigp; ?></td>
    
  </tr> <tr>
    <td>5</td>
    <td>Geography </td>
    <td><?php echo $vgolt; ?></td>
    <td><?php echo $vgolg; ?></td>
    <td><?php echo $vgolgp; ?></td>
   
  </tr> <tr>
    <td>6</td>
    <td>History</td>
    <td><?php echo $itit; ?></td>
    <td><?php echo $itig; ?></td>
    <td><?php echo $itigp; ?></td>

    </tr> <tr>
    <td>7</td>
    <td>Civics</td>
    <td><?php echo $pout; ?></td>
    <td><?php echo $poug; ?></td>
    <td><?php echo $pougp; ?></td>
   
  </tr> <tr>
    <td>7</td>
    <td>Regious</td>
    <td><?php echo $ist; ?></td>
    <td><?php echo $isg; ?></td>
    <td><?php echo $isgp; ?></td>
   
  </tr> <tr>
    <td>8</td>
    <td>ICT</td>
    <td><?php echo $ictt; ?></td>
    <td><?php echo $ictg; ?></td>
    <td><?php echo $ictgp; ?></td>
   
  </tr> <tr>

    <td>7</td>
    <td>Forth subject</td>
   <td><?php echo $fortht; ?></td>
    <td><?php echo $forthg; ?></td>
    <td><?php echo $forthgp; ?></td>
   
  </tr> 
</table>
<br>
<br>

 <button onclick="window.print()">Print Result</button>
<h3>Powered by STS school</h3>


</div>

</body>
</html>
    