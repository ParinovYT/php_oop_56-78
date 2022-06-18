<?php
	require_once 'iTag.php';
	require_once 'Tag.php';
	require_once 'ListItem.php';
	require_once 'HtmlList.php';
	require_once 'Ol.php';
	require_once 'Ul.php';
	
	$list = new HtmlList('ul');
	$ul = new Ul; 
	$ol = new Ol;	
		
	$list->addItem((new ListItem())->setText('item1'));
	$list->addItem((new ListItem())->setText('item2'));
	$list->addItem((new ListItem())->setText('item3'));	
	echo $list; // не вызываем open 
	
	echo nl2br("\n");
	
	$ol->addItem((new ListItem())->setText('item1'));
	$ol->addItem((new ListItem())->setText('item2'));
	$ol->addItem((new ListItem())->setText('item3'));
	echo $ol;
	
	echo nl2br("\n");
	
	$ul->addItem((new ListItem())->setText('item1'));
	$ul->addItem((new ListItem())->setText('item2'));
	$ul->addItem((new ListItem())->setText('item3'));
	echo $ul;
	
?>