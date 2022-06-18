<?php
	header('Content-Type: text/html; charset=utf-8');
	require_once "date.php";
	require_once "Interval.php";
	
	$date1 = new Date('2025-12-31');
	$date2 = new Date('2026-11-28');
	
	$interval = new Interval($date1, $date2);
	
	echo $interval->toDays();   // выведет разницу в днях
	echo nl2br(" days\n");
	echo $interval->toMonths();   // выведет разницу в месяцах
	echo nl2br(" months\n");
	echo $interval->toYears();   // выведет разницу в годах
	echo nl2br(" years\n");
	
	
?>
