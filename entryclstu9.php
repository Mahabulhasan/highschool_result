<html>
<body>
       <main>
       
              
        </form>
        <form action="class_name_test9.php" method="post">
              
   <select name="class1">
    <option disabled selected>-- Select Class --</option>
    <?php
         $art='art';

        include "database.php";  // Using database connection file here
         $records = mysqli_query($conn, "SELECT class_n From result_stt_sci WHERE publish=0");  // Use select query here 


        while($data = mysqli_fetch_array($records))
        {
          $vall=substr($data['class_n'],0,10).$art;

          if(strpos($data['class_n'], 'cl_10') !== false){
            $vall=substr($data['class_n'],0,11).$art;}
          
            echo "<option value='". $data['class_n'] ."'>" .$data['class_n'] ."</option>";  // displaying data in option menu
            echo "<option value='". $vall ."'>" .$vall ."</option>";
        }     
    ?>  
  </select>
   <input type="number" name="totalEntry" placeholder="total student" value="">
    <input type="submit" name="submit">
</form>




       
  
 
</body>
</html>
