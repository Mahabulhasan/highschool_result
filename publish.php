<?php
require 'database.php';

$table =$_POST['class_name'];

$s="UPDATE result_stt SET publish=1 WHERE class_n='$table'";
echo "Result Published sucessfully";
mysqli_query($conn ,$s);
$s="UPDATE result_stt_sci SET publish=1 WHERE class_n='$table'";
echo "Result Published sucessfully";
mysqli_query($conn ,$s);
$s="UPDATE result_stt_art SET publish=1 WHERE class_n='$table'";
echo "Result Published sucessfully";
mysqli_query($conn ,$s);
$s="UPDATE result_stt_all SET publish=1 WHERE class_n='$table'";
echo "Result Published sucessfully";

mysqli_query($conn ,$s);

?>