<?php

if(isset($argv[1]))
{
   	echo $argv[1]."\n";
	exit();
	$str = str_replace("\\", '/', $argv[1]);
	echo $str."\n";
	exit(0);
}


echo 'param error';
