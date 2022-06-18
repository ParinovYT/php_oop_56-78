<?php
	$link1 = (new Link())->setAttr('href', 'menu/1.php')->setText('Page 1');
	$link2 = (new Link())->setAttr('href', 'menu/2.php')->setText('Page 2');
	$link3 = (new Link())->setAttr('href', 'menu/3.php')->setText('Page 3');
	$link4 = (new Link())->setAttr('href', 'menu/4.php')->setText('Page 4');
	$link5 = (new Link())->setAttr('href', 'menu/5.php')->setText('Page 5');
	$link6 = (new Link())->setAttr('href', 'menu/5.php')->setText('Page 5')->show();	
?>