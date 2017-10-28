<?php
$x="teet";
$y="teet";
if(strcmp($x,$y)==0)//string compare
{
echo "yes";
}

if($x==strrev($x))//palin.
{
echo"yes";
}

$string = 'I am happy today.';
$replacement = 'v';

echo substr_replace($string, $replacement, 4, 0);//inserting character
$x=strlen($string);
$i=0;
while($i<$x)
{
if($string[$i]=='a')
{
$string[$i]='b';
}
$i=$i+1;
}
echo $string;//replacing character
?>
