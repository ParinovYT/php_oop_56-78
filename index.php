<?php
	require_once 'iTag.php';
	require_once 'Tag.php';
	require_once 'Link.php';
	require_once 'menu.php';

	print(nl2br($link1."\n"));	
	print(nl2br($link2."\n"));	
	print(nl2br($link3."\n"));	
	print(nl2br($link4."\n"));	
	print(nl2br($link5."\n"));	
	print(nl2br($link6."(show)\n"));	
	
	echo (new Link)
		->setAttr('href', 'menu/5.php')
		->setAttr('class', 'link1 link2') // добавляем ссылке классы
		->setText('index')
		->show();
	
	
?>