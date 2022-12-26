

<html>
<body>
       <main>
       
<h1>Check markes upload</h1>

<form action="calculate_9_sci.php" method="post">

  <select name="class_name">
    <option disabled selected>-- Select Class --</option>
    <?php
        include "database.php";  // Using database connection file here
        $records = mysqli_query($conn, "SELECT class_n From result_stt_sci WHERE publish=0");  // Use select query here 

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


      