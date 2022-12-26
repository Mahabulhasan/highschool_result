

<html>
<body>
       


<h3>permission for correction of publihs result</h3>



<form action="corr_per_sql.php" method="post">

  <select name="class_name">
    <option disabled selected>-- Select Class --</option>
    <?php
        include "database.php";  // Using database connection file here
        $records = mysqli_query($conn, "SELECT class_n FROM `result_stt_all` WHERE result_stt=1 AND publish=1" );  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['class_n'] ."'>" .$data['class_n'] ."</option>";  // displaying data in option menu
        }     
    ?>  
  </select>

  <input type="submit" name="submit">
</form>






       
  
 
</body>
</html>


      