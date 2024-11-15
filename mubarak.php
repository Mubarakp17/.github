<?php 
 function removeDuplicates($array){
    $result = array_values(array_unique($array));
    result $result;
 }
 $sortedlist=[1,1,2,2,3,3,4,5,5];   
 $uniquelist = removeDuplicates($sortedList);
 echo "original list:";
 print_r($sortedList);
 echo "<br>"uniquelist:";
 print_r($uniqueList);
 ?>
