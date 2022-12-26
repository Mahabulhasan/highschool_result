

<html>
<body>

<form action="search.php" method="post">

  <fieldset>
    <legend>Result Search For Junior Section</legend>
     Student id:<input type="number" name="id"><br><br>
 
  <select name="class">
    <option disabled selected>Class</option>
    <option value="cl_6_">Class 6</option>
    <option value="cl_7_">Class 7</option>
    <option value="cl_8_">Class 8</option>
  </select>

  <SELECT name="year">
                     <option disabled selected>year</option>
                     <option value="2020">2020</option>
                     <option value="2021">2021</option>
                     <option value="2022">2022</option>
                     
              </SELECT><br><br>

              <input type="submit" name="submit" value="Search">
    

  </fieldset>
 


</form>

<form action="selectsciartresult.php" method="post">

  <fieldset>
    <legend>Result Search For Senior Section</legend>
     Student id:<input type="number" name="id"><br><br>
 
  <select name="class">
    <option disabled selected>Class</option>
    <option value="cl_9_">Class 9</option>
    <option value="cl_10_">Class 10</option>
    
  </select>

  <SELECT name="year">
                     <option disabled selected>year</option>
                     <option value="2020">2020</option>
                     <option value="2021">2021</option>
                     <option value="2022">2022</option>
                     
              </SELECT>
  <SELECT name="dep">
                     <option disabled selected>department</option>
                     <option value="_sci">Science</option>
                     <option value="_art">Arts</option>
                     
                     
              </SELECT><br><br>

              <input type="submit" name="submit" value="Search">
    

  </fieldset>
 


</form>



  
 
</body>
</html>

      