<?php
	class Textarea extends Input
	{
		public function __construct()
		{
			$this->setAttr('type', 'textarea');
			parent::__construct();
		}
	}
?>