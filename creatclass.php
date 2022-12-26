


<?php 
require 'database.php';


   if(isset($_POST['submit'])){

    $table=$_POST['class'].$_POST['year'];
    echo "$table Create Sucessful";
 $sql="CREATE TABLE $table (
    id INT NOT NULL ,
    roll INT,
    ban1w int(35) NOT NULL DEFAULT '0',
    ban1m int(50) NOT NULL DEFAULT '0',
    ban1t int(35) NOT NULL DEFAULT '0',
    ban1g varchar(35) NOT NULL DEFAULT '0',
    ban1gp float NOT NULL DEFAULT '0',

    ban2w int(35) NOT NULL DEFAULT '0',
    ban2m int(50) NOT NULL DEFAULT '0',
    ban2t int(35) NOT NULL DEFAULT '0',
    ban2g varchar(35) NOT NULL DEFAULT '0',
    ban2gp float NOT NULL DEFAULT '0',
    ban12g varchar(35) NOT NULL DEFAULT '0',
    ban12gp float NOT NULL DEFAULT '0',

    eng1w int(35) NOT NULL DEFAULT '0',
    eng1g varchar(35) NOT NULL DEFAULT '0',
    eng1gp float NOT NULL DEFAULT '0',

    eng2w int(35) NOT NULL DEFAULT '0',
    eng2g varchar(35) NOT NULL DEFAULT '0',
    eng2gp float NOT NULL DEFAULT '0',
    eng12g varchar(35) NOT NULL DEFAULT '0',
    eng12gp float NOT NULL DEFAULT '0',

    matw int(35) NOT NULL DEFAULT '0' ,
    matm int(50) NOT NULL DEFAULT '0',
    matt int(35) NOT NULL DEFAULT '0',
    matg varchar(35) NOT NULL DEFAULT '0',
    matgp float NOT NULL DEFAULT '0',

    bisw int(35) NOT NULL DEFAULT '0',
    bism int(50) NOT NULL DEFAULT '0',
    bist int(35) NOT NULL DEFAULT '0',
    bisg varchar(35) NOT NULL DEFAULT '0',
    bisgp float NOT NULL DEFAULT '0',

    bigw int(35) NOT NULL DEFAULT '0',
    bigm int(50) NOT NULL DEFAULT '0',
    bigt int(35) NOT NULL DEFAULT '0',
    bigg varchar(35) NOT NULL DEFAULT '0',
    biggp float NOT NULL DEFAULT '0',

    dharw int(35) NOT NULL DEFAULT '0',
    dharm int(50) NOT NULL DEFAULT '0',
    dhart int(35) NOT NULL DEFAULT '0',
    dharg varchar(35) NOT NULL DEFAULT '0',
    dhargp float NOT NULL DEFAULT '0',

    kriw int(35) NOT NULL DEFAULT '0',
    krim int(50) NOT NULL DEFAULT '0',
    krit int(35) NOT NULL DEFAULT '0',
    krig varchar(35) NOT NULL DEFAULT '0',
    krigp float NOT NULL DEFAULT '0',

    totalg varchar(35) NOT NULL DEFAULT '0',
    Totalgp float NOT NULL DEFAULT '0'
    
    )";
        if ($conn->query($sql) === TRUE) {
 //$sql="INSERT INTO class_name(cl_name) VALUES ('$table')";
 //$conn->query($sql);
 $sql="INSERT INTO result_stt(class_n,result_stt) VALUES ('$table',0)";
 $conn->query($sql);
 $sql="INSERT INTO result_stt_all(class_n,result_stt,publish) VALUES ('$table',0,0)";
 $conn->query($sql);
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}




   
	 
	 
	  
 
   }

  

?> 

