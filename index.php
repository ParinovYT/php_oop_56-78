<?php
	require_once 'Tag.php';

	$tag = new Tag('input');
	
	echo (new Tag('input'))->setAttr('name', 'name1')->open();
	echo (new Tag('input'))->setAttr('name', 'name2')->open();
	
	//вывод <input name="name1"><input name="name2">
	
?>