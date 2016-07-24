<?php

$var= "heihei";
$aa=&$var;
$bb=&$var;

function fn(){
  echo "Inside the function,before global \$var=".$var="123"."<br />";
  global $var;
 
  
  echo "Inside the function,\$var=".$var."<br />";
}
fn();
echo "Outside the function,\$var=".$var."<br />";
?>
