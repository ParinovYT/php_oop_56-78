<?php
	require_once 'Tag.php';
	
	$tag0 = new Tag('div');
	$tag1 = new Tag('h2');
	$tag2 = new Tag('img');
	
	echo $tag0->Open().'text'.$tag0->Close(); // выведет <div>text</div>
	echo $tag1->Open("header").'text'.$tag1->Close("header"); // выведет <header><h2>text</h2></header>
	echo $tag2->Open("cat-005.png").$tag2->Close(); // выведет <img src="cat-005.png">
	
?>