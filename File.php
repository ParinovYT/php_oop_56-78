<?php
	class File implements iFile
	{
		private $_filePath;
		
		public function __construct($filePath)
		{
			$this->_filePath = $filePath;
		}
		
		public function getPath() // путь к файлу
		{
			return realpath($this->_filePath);
		}
		public function getDir()  // папка файла
		{
			return pathinfo($this->getPath())["dirname"];
		}		
		public function getName() // имя файла
		{
			return pathinfo($this->getPath())["filename"];
		}		
		public function getExt()  // расширение файла
		{
			return pathinfo($this->getPath())["extension"];
		}		
		public function getSize() // размер файла
		{
			return filesize($this->getPath());
		}		
		public function getText() // получает текст файла
		{
			return file_get_contents($this->getPath());
		}		
		public function setText($text) // устанавливает текст файла
		{
			file_put_contents($this->getPath(), $text);
		}		
		public function appendText($text) // добавляет текст в конец файла
		{
			file_put_contents($this->getPath(), $this->getText(). $text);
		}		
		public function copy($copyPath) // копирует файл
		{
			copy($this->getPath(), $copyPath);
		}		
		public function delete() // удаляет файл
		{
			unlink($this->getPath());
		}		
		public function rename($newName) // переименовывает файл
		{
			rename($this->getPath(), $newName);
		}		
		public function replace($newPath) // перемещает файл
		{
			rename($this->getPath(), "$newPath/$this->_filePath");
		}		
	}
?>