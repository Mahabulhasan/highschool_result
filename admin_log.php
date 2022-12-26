
<?php
require 'database.php';
 if(isset($_POST['Login'])){
    $user=$_POST['userid'];
    $pass=$_POST['password'];
  //  echo "$user";
    //echo "$pass";
    $count=0;

    $s="SELECT userid,stt FROM admin_login WHERE userid='$user' AND password = '$pass'";
//echo "$s";
   $result=mysqli_query($conn,$s);


   

   while ($raw=mysqli_fetch_array($result)) {
    $stt=$raw['stt'];
  //  echo "$stt";
       $count++;
    } 
  

    
    if ($count==1 && $stt=='head_master') {
         header("Location: head.php");
       
    }
    else if($count==1){
        header("Location: dashb.php");

    }

    else {
            echo '<script language="javascript">';
            echo 'alert("Invalid Username or Password")';
            echo '</script>';
        }


 }

?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn Page</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="./font-awesome-4.7.0/css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>

        <h4>Administrasion login</h4>


 
            <form action="" method="post" name="login">
                <fieldset>
                    <legend class="heading">Admin Login</legend>
                    <input type="text" name="userid" placeholder="user id" autocomplete="off"><br><br>
                    <input type="password" name="password" placeholder="Password" autocomplete="off"><br>

                    <input type="submit" name="Login" value="Login">
                </fieldset>
            </form>    
      
        
       
</body>
</html>

