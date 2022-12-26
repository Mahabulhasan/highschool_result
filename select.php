  <?php 
  require 'database.php';
$chk = "sci";
$chk1 = "art";
$chk2="ict";
$class=$_POST['classss'];
$sub11=$_POST['sub'];


echo "Subject name \n"."$sub11";
    if($sub11 == 'eng1' || $sub11 == 'eng2'){
      
        $action = "eng1.php"; 
       }

        
      

      elseif ($sub11 == 'ict') {
       $action ="ban9.php";
      }
      elseif ($sub11 == 'agg') {
       $action ="forth.php";
      }
     elseif ($sub11 == 'gar') {
       $action ="forth.php";
      }
      
    else{
    
         $action ="ban1.php";
       
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