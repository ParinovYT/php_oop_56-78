<?php
	require_once 'iTag.php';
	require_once 'Tag.php';
	require_once 'Form.php';
	require_once 'Input.php';
	
	echo nl2br("\n\nПример без ореn\n\n");
	
	$form = (new Form)->setAttrs(['action' => '', 'method' => 'GET']);
	
	echo $form->open();
	echo (new Input)->setAttr('name', 'year');
	echo (new Input)->setAttr('type', 'submit');
	echo $form->close();
?>