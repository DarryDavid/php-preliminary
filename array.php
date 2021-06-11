<?php
$a= array("php","darry","2000");



//for printing array we cannot write echo  as echo only print string
echo "<pre>";
print_r($a); // used by developer to see values and index of arrays

echo $a[2]."<br/>";


/*
//using for
for ($i=0; $i <3 ; $i++) { 
	echo $a[$i]."<br/>";
}
*/

//using for each
 foreach ($a as $key => $value) {
 	echo $key. " ". $value . "<br/>";
 }

foreach ($a as $c ) {
	echo $c;
}
?>