<?php
	class Interval
	{	
		private string $_date1;
		private string $_date2;
		
		public function __construct($date1, $date2)
		{
			$this->_date1 = $date1;
			$this->_date2 = $date2;
		}
		
		public function toDays()
		{		
			$diff = abs(strtotime($this->_date2) - strtotime($this->_date1));				
			echo $diff / (86400);
		}
		
		public function toMonths()
		{
			$diff = abs(strtotime($this->_date2) - strtotime($this->_date1));				
			echo $diff / (86400*30);
		}
		
		public function toYears()
		{
			$diff = abs(strtotime($this->_date2) - strtotime($this->_date1));				
			echo $diff / (86400*365);
		}
	}
?>