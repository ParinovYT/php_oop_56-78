<?php
	require_once 'iTag.php';
	require_once 'Tag.php';
	require_once 'Form.php';
	require_once 'Input.php';
	require_once 'Submit.php';
	require_once 'Password.php';
	require_once 'Hidden.php';
	require_once 'Textarea.php';
	
	$form = (new Form)->setAttrs([
		'action' => 'test.php',
		'method' => 'GET'
	]);
	
	echo $form->open();
		echo (new Hidden)->setAttr('name', 'id')->setAttr('value', '666');;
		echo (new Input)->setAttr('name', 'login');
		echo (new Password)->setAttr('name', 'passw');
		echo (new Textarea)->setAttr('name', 'message')->show();
		echo new Submit;
	echo $form->close();
?>