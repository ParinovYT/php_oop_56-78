<?php
	header('Content-Type: text/html; charset=utf-8');
	require_once "date.php";
	
	$date = new Date('2025-12-31');	
	echo $date->getYear().nl2br("\n");  
	echo $date->getMonth('ru').nl2br("\n"); 
	echo $date->getMonth('en').nl2br("\n"); 
	echo $date->getMonth().nl2br("\n"); 
	echo $date->getMonth('haha').nl2br("\n"); 
	echo $date->getDay().nl2br("\n\n");

	echo $date->getWeekDay().nl2br("\n");   
	echo $date->getWeekDay('ru').nl2br("\n"); 
	echo $date->getWeekDay('en').nl2br("\n"); 
	echo $date->getWeekDay('haha').nl2br("\n\n"); 

	echo (new Date('2025-12-31'))->addYear(1).nl2br("\n");
	echo (new Date('2025-12-31'))->addDay(1).nl2br("\n");  
	echo (new Date('2025-12-31'))->subDay(3).nl2br("\n"); 
	echo (new Date('2025-12-31'))->addYear(1).nl2br("\n"); 
?>
