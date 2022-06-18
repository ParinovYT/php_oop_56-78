<?php
	require_once 'Tag.php';
	$tag = new Tag('h3');
	
	echo $tag->Open().'text'.$tag->Close(); // выведет <div>text</div>
	
?>