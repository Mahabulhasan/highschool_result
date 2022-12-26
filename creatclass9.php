


<?php 
require 'database.php';
$all='_all';
$sci='_sci';
$art='_art';


   if(isset($_POST['submit'])){

    $table=$_POST['class'].$_POST['year'].$sci;

    echo "$table Create Sucessful";

  $sql="CREATE TABLE $table (
    id INT NOT NULL ,
    roll INT,
    foth varchar(15) NOT NULL DEFAULT '0',
   
    phyw int(35) NOT NULL DEFAULT '0',
    phym int(50) NOT NULL DEFAULT '0',
    phyp int(50) NOT NULL DEFAULT '0',
    phyt int(35) NOT NULL DEFAULT '0',
    phyg varchar(35) NOT NULL DEFAULT '0',
    phygp float NOT NULL DEFAULT '0',

    chew int(35) NOT NULL DEFAULT '0',
    chem int(50) NOT NULL DEFAULT '0',
    chep int(50) NOT NULL DEFAULT '0',
    chet int(35) NOT NULL DEFAULT '0',
    cheg varchar(35) NOT NULL DEFAULT '0',
    chegp float NOT NULL DEFAULT '0',

    biow int(35) NOT NULL DEFAULT '0',
    biom int(50) NOT NULL DEFAULT '0',
    biop int(50) NOT NULL DEFAULT '0',
    biot int(35) NOT NULL DEFAULT '0',
    biog varchar(35) NOT NULL DEFAULT '0',
    biogp float NOT NULL DEFAULT '0',

    forthw int(35) NOT NULL DEFAULT '0',
    forthm int(50) NOT NULL DEFAULT '0',
    forthp int(50) NOT NULL DEFAULT '0',
    fortht int(35) NOT NULL DEFAULT '0',
    forthg varchar(35) NOT NULL DEFAULT '0',
    forthgp float NOT NULL DEFAULT '0',

    totalg varchar(35) NOT NULL DEFAULT '0',
    To_gp_with float NOT NULL DEFAULT '0',
    Totalgp float NOT NULL DEFAULT '0'
    
    )";

 
        if ($conn->query($sql) === TRUE) {

 $sql="INSERT INTO result_stt_sci(class_n,result_stt,publish) VALUES ('$table',0,0)";
 $conn->query($sql);
 $sql="INSERT INTO result_stt_all(class_n,result_stt,publish) VALUES ('$table',0,0)";
 $conn->query($sql);
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$table1=$_POST['class'].$_POST['year'].$art;

    echo "$table1 Create Sucessful";

  $sql="CREATE TABLE $table1 (
    id INT NOT NULL ,
    roll INT,
    foth varchar(15) NOT NULL DEFAULT '0',
   

    sciw int(35) NOT NULL DEFAULT '0',
    scim int(50) NOT NULL DEFAULT '0',
    scip int(50) NOT NULL DEFAULT '0',
    scit int(35) NOT NULL DEFAULT '0',
    scig varchar(35) NOT NULL DEFAULT '0',
    scigp float NOT NULL DEFAULT '0',

    pouw int(35) NOT NULL DEFAULT '0',
    poum int(50) NOT NULL DEFAULT '0',
    poup int(50) NOT NULL DEFAULT '0',
    pout int(35) NOT NULL DEFAULT '0',
    poug varchar(35) NOT NULL DEFAULT '0',
    pougp float NOT NULL DEFAULT '0',

    vgolw int(35) NOT NULL DEFAULT '0',
    vgolm int(50) NOT NULL DEFAULT '0',
    vgolp int(50) NOT NULL DEFAULT '0',
    vgolt int(35) NOT NULL DEFAULT '0',
    vgolg varchar(35) NOT NULL DEFAULT '0',
    vgolgp float NOT NULL DEFAULT '0',

    itiw int(35) NOT NULL DEFAULT '0',
    itim int(50) NOT NULL DEFAULT '0',
    itip int(50) NOT NULL DEFAULT '0',
    itit int(35) NOT NULL DEFAULT '0',
    itig varchar(35) NOT NULL DEFAULT '0',
    itigp float NOT NULL DEFAULT '0',

    forthw int(35) NOT NULL DEFAULT '0',
    forthm int(50) NOT NULL DEFAULT '0',
    forthp int(50) NOT NULL DEFAULT '0',
    fortht int(35) NOT NULL DEFAULT '0',
    forthg varchar(35) NOT NULL DEFAULT '0',
    forthgp float NOT NULL DEFAULT '0',

    totalg varchar(35) NOT NULL DEFAULT '0',
    To_gp_with float NOT NULL DEFAULT '0',
    Totalgp float NOT NULL DEFAULT '0'
    
    )";


 
        if ($conn->query($sql) === TRUE) {

 $sql="INSERT INTO result_stt_art(class_n,result_stt,publish) VALUES ('$table1',0,0)";
 $conn->query($sql);
 $sql="INSERT INTO result_stt_all(class_n,result_stt,publish) VALUES ('$table1',0,0)";
 $conn->query($sql);
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$table2=$_POST['class'].$_POST['year'].$all;

    echo "$table2 Create Sucessful";

  $sql="CREATE TABLE $table2 (
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

    isw int(35) NOT NULL DEFAULT '0',
    ism int(50) NOT NULL DEFAULT '0',
    ist int(35) NOT NULL DEFAULT '0',
    isg varchar(35) NOT NULL DEFAULT '0',
    isgp float NOT NULL DEFAULT '0',

    ictw int(35) NOT NULL DEFAULT '0',
    ictm int(50) NOT NULL DEFAULT '0',
    ictp int(50) NOT NULL DEFAULT '0',
    ictt int(35) NOT NULL DEFAULT '0',
    ictg varchar(35) NOT NULL DEFAULT '0',
    ictgp float NOT NULL DEFAULT '0'

    
    )";


 
        if ($conn->query($sql) === TRUE) {

 $conn->query($sql);
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}









   
	 
	 
	  
 
   }

  

?> 

