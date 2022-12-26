

<html>
<body>
       <main>
       



<form action="select.php" method="post">
              
   <select name="classss">
    <option disabled selected>-- Select Class --</option>
    <?php
    $all='all';
        include "database.php";  // Using database connection file here
        $records = mysqli_query($conn, "SELECT class_n From result_stt_sci WHERE publish=0");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
          $vall=substr($data['class_n'],0,10).$all;

          if(strpos($data['class_n'], 'cl_10') !== false){
            $vall=substr($data['class_n'],0,11).$all;
}
            echo "<option value='".$vall."'>" .$vall ."</option>";  // displaying data in option menu

        }     
    ?>  
  </select>

  <select name="sub" id="sub">
        <option disabled selected>Select Subject</option>
        <option value="ban1">Bangla</option>
         <option value="ban2">Bangla 2nd</option>
         <option value="eng1">English</option>
         <option value="eng2">English 2nd</option>
         <option value="mat">Math</option>
         
         
         <option value="is">islam</option>
         <option value="ict">ICT</option>
         
         


         
  </select>
   
    <input type="submit" name="submit">
</form>




       
  
 
</body>
</html>


      