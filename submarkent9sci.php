

<html>
<body>
       <main>
       



<form action="select_sci.php" method="post">
              
   <select name="classss">
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

  <select name="sub" id="sub">
        <option disabled selected>Select Subject</option>
        <option value="phy">Physics</option>
         <option value="che">Chemistry</option>
         <option value="bio">Biology</option>
         <option value="hmatm">Higher Math</option>
         <option value="agg">Agriculture</option>
         
         
         
         


         
  </select>
   
    <input type="submit" name="submit">
</form>




       
  
 
</body>
</html>


      