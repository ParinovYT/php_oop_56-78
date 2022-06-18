<?php
	require_once 'Tag.php';

	echo (new Tag('input'))
		->setAttr('class', 'eee zzz kkk') // добавим 3 класса
		->removeClass('zzz') // удалим класс 'zzz'
		->addClass('test')
		->open(); // выведет <input class="eee kkk">
	
?>