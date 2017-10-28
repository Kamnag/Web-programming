<?php

$file1=fopen("aa.txt","r");
$file2=fopen("bb.txt","a");
while(!(feof($file1)))
{
	$contents=fgets($file1);
	fwrite($file2,$contents);
}
	


?>
