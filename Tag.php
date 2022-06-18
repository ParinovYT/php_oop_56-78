<?php
	class Tag
	{
		private $name;
		private $attrs;
		
		public function __construct($name)
		{
			$this->name = $name;
		}
		
		public function Open()
		{
			$attrsStr = $this->getAttrsStr($this->attrs); 
			return "<$this->name$attrsStr>";
		}
		
		public function Close()
		{
			return "</$this->name>";
		}
		
		public function setAttr($name, $value)
		{
			$this->attrs[$name] = $value;
			return $this; 
		}
		
		public function removeAttr($name)
		{
			if(array_key_exists($name, $this->attrs))
			{
				unset($this->attrs[$name]);
			}
			return $this;
		}
		
		private function getAttrsStr($attrs)
		{
			if (!empty($attrs)) {
				$result = '';
				
				foreach ($attrs as $name => $value) {
					$result .= " $name=\"$value\"";
				}
				
				return $result;
			} else {
				return '';
			}
		}
	}
?>
