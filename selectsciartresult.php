  <?php 
  require 'database.php';
$chk = "sci";
$chk1 = "art";
$id=$_POST['id'];
$class=$_POST['class'];
$year=$_POST['year'];
$dep=$_POST['dep'];


echo "Class extension \n"."$class\n"."$year\n"."$dep\n"."$id\n";
    if($dep == '_sci'){
      
        $action = "search9.php"; 
       }

        
      

      else {
       $action ="search9art.php";
      }
    

    

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?php echo $action?>" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>" />
		<input type="hidden" name="class" value="<?php echo $class; ?>" />
    <input type="hidden" name="year" value="<?php echo $year; ?>" />
    <input type="hidden" name="dep" value="<?php echo $dep; ?>" />
		<input type="submit" name="submit" value="ok">
		
	</form>

</body>
</html>