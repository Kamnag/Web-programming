 <?php
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
print_r($cars);

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);
print_r($age);

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);
print_r($age);

?> 
