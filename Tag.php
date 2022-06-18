<?php
	class Tag
	{
		private $name;
		private $attrs;
		
		public function __construct($name, $attrs = [])
		{
			$this->name = $name;
			$this->attrs = $attrs;
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
