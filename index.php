<?php
	require_once 'Tag.php';

	$tag = new Tag('input');
	
	echo $tag
		->setAttrs(['id' => 'test', 'class' => 'eee'])
		->setAttr('type', 'text')
		->open(); 
		
		// выведет <input id="test" class="eee" type="text">
	
?>