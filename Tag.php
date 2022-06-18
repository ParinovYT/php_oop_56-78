<?php
	class Tag
	{
		private $name;
		
		public function __construct($name)
		{
			$this->name = $name;
		}
		
		public function Open()
		{
			return "<$this->name>";
		}
		public function Close()
		{
			return "</$this->name>";
		}		
	}
?>
