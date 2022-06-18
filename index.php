<?php
	require_once 'iTag.php';
	require_once 'Tag.php';
	require_once 'Image.php';
	$img = (new Image())->setAttrs(['src' => 'cat-005.png', 'width' =>'300', 'height'=>'200']);
	echo $img->open();
?>