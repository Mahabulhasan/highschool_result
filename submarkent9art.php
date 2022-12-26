

<html>
<body>
       <main>
       



<form action="select.php" method="post">
              
   <select name="classss">
    <option disabled selected>-- Select Class --</option>
    <?php
        include "database.php";  // Using database connection file here
        $records = mysqli_query($conn, "SELECT class_n From result_stt_art WHERE publish=0");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['class_n'] ."'>" .$data['class_n'] ."</option>";  // displaying data in option menu
        }     
    ?>  
  </select>

  <select name="sub" id="sub">
        <option disabled selected>Select Subject</option>
        <option value="sci">SCIENCE</option>
         <option value="vgol">GEOGRAPHY AND ENVIRONMENT</option>
         <option value="iti">HISTORY OF BANGLADESH AND WORLD CIVILIZATION</option>
         <option value="pou">CIVICS AND CITIZENSHIP</option>
         <option value="agg"> AGRICULTURE STUDIES</option>
         <option value="gar"> HOME SCIENCE</option>
         
         
         
         


         
  </select>
   
    <input type="submit" name="submit">
</form>




       
  
 
</body>
</html>


      