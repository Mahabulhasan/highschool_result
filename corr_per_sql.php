<?php
require 'database.php';

$table =$_POST['class_name'];

$s="UPDATE result_stt SET publish='0',result_stt='0' WHERE class_n='$table'";
echo "Result Published sucessfully";
mysqli_query($conn ,$s);
$s="UPDATE result_stt_sci SET publish='0',result_stt='0' WHERE class_n='$table'";
mysqli_query($conn ,$s);
echo "Result Published sucessfully";
$s="UPDATE result_stt_art SET publish='0',result_stt='0' WHERE class_n='$table'";
mysqli_query($conn ,$s);
echo "Result Published sucessfully";
$s="UPDATE result_stt_all SET publish='0',result_stt='0' WHERE class_n='$table'";
echo "Result Published sucessfully";

mysqli_query($conn ,$s);

?>