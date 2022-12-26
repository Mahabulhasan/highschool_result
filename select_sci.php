  <?php 
  require 'database.php';
$chk = "sci";
$chk1 = "art";
$chk2="ict";
  $class=$_POST['classss'];
$sub11=$_POST['sub'];
echo "Subject name \n"."$sub11";
    if($sub11 == 'hmatm' || $sub11 == 'agg'){
      $action ="forth.php";
        
      }
      else
      {
        $action ="ban9.php";

      }

      

    

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?php echo $action?>" method="post">
		<input type="hidden" name="classss" value="<?php echo $class; ?>" />
		<input type="hidden" name="sub" value="<?php echo $sub11; ?>" />
		<input type="submit" name="submit" value="ok">
		
	</form>

</body>
</html>