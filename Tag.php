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
					// Если значение атрибута равно true:
					if ($value === true) {
						$result .= " $name"; // это атрибут без значения
					} else {
						$result .= " $name=\"$value\""; // это атрибут со значением
					}
				}
				
				return $result;
			} else {
				return '';
			}
		}
		
		public function setAttrs($attrs)
		{
			foreach ($attrs as $name => $value) {
				$this->setAttr($name, $value);
			}	
			return $this;
		}
		
		public function addClass($className)
		{
			if (isset($this->attrs['class'])) {
				$classNames = explode(' ', $this->attrs['class']);

				if (!in_array($className, $classNames)) {
					$classNames[] = $className;
					$this->attrs['class'] = implode(' ', $classNames);
				}
			} else {
				$this->attrs['class'] = $className;
			}

			return $this;
		}		
		
		private function removeElem($elem, $arr)
		{
			$key = array_search($elem, $arr); // находим ключ элемента по его тексту
			array_splice($arr, $key, 1); // удаляем элемент
			return $arr; // возвращаем измененный массив
		}
		
		public function removeClass($className)
		{
			if (isset($this->attrs['class'])) {
				$classNames = explode(' ', $this->attrs['class']);
				
				if (in_array($className, $classNames)) {
					$classNames = $this->removeElem($className, $classNames);
					$this->attrs['class'] = implode(' ', $classNames);
				}
			}
			
			return $this;
		}		
	}
?>
