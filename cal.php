

<html>
<body>
       <main>
       
<h1>Check markes upload</h1>

<form action="calculate.php" method="post">

  <select name="class_name">
    <option disabled selected>-- Select Class --</option>
    <?php
        include "database.php";  // Using database connection file here
        $records = mysqli_query($conn, "SELECT class_n FROM `result_stt` WHERE result_stt=0");  // Use select query here 

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


      