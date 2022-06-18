<?php
	class Tag
	{
		private $name;
		
		public function __construct($name)
		{
			$this->name = $name;
		}
		
		public function Open($params = null)
		{
			if($this->name == "img")
			{
				return "<$this->name src='$params'";	
			}
			
			if($params == "header")
			{
				return "<header><$this->name>";
			}
			
			if(empty($params))
			{
				return "<$this->name>";	
			}
		}
		public function Close($params = null)
		{
			if($this->name == "img")
			{
				return ">";	
			}
			
			if($params == "header")
			{
				return "</$this->name></header>";
			}
			
			if(empty($params))
			{
				return "</$this->name>";	
			}
		}		
	}
?>
