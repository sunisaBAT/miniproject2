<?php
//--MYGPE02.php
$score= "80";
switch($score)
{
 case ($score>=80):
       echo "A";
       break;
 case ($score>=75):
	   echo "B+";
       break;
 case ($score>=70):
	   echo "B";
       break;
 case ($score>=65):
	   echo "C+";
       break;
 case ($score>=60):
	   echo "C";
       break;
 case ($score>=55):
	   echo "D+";
       break;
 case ($score>=50):
	   echo "D";
       break;
 default:
	   echo "F";
}
?>
       