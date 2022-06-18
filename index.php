<?php
	require_once 'iTag.php';
	require_once 'Tag.php';
	require_once 'Form.php';

	$form = (new Form)->setAttrs([
		'action' => 'test.php',
		'method' => 'POST'
	]);
	
	echo $form->open();
		// здесь потом будут элементы формы
	echo $form->close();
	
	//выводит <form action="test.php" method="POST"></form>
?>