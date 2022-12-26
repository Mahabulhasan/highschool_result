

<html>
<body>
       <main>
       
              
        </form>
        <form action="class_name_test.php" method="post">
              
   <select name="class1">
    <option disabled selected>-- Select Class --</option>
    <?php
        include "database.php";  // Using database connection file here
        $records = mysqli_query($conn, "SELECT class_n From result_stt WHERE publish=0");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['class_n'] ."'>" .$data['class_n'] ."</option>";  // displaying data in option menu
        }     
    ?>  
  </select>
   <input type="number" name="totalEntry" placeholder="total student" value="">
    <input type="submit" name="submit">
</form>




       
  
 
</body>
</html>


      