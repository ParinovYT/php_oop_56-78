<?php
	class Date
	{	
		public function __construct($date = null)
		{
			$this->date = $date ? $date : time();
		}
		
		public function getDay()
		{
			return date('d', strtotime($this->date));
		}
		
		public function getMonth($lang = null)
		{		 
		
			$Months = [
			  'ru' => ['', 'Январь' , 'Февраль' , 'Март' , 'Апрель' , 'Май' , 'Июнь' , 'Июль' , 'Август' , 'Сентябрь' , 'Октябрь' , 'Ноябрь' , 'Декабрь'],
			  'en' => ['', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']
			];
		
			$dateMonth = date('n', strtotime($this->date));
		
			switch ($lang)
			{
				case 'ru':
					return $Months['ru'][$dateMonth];					
				case 'en':
					return $Months['en'][$dateMonth];	
				case '':
					return date('m', strtotime($this->date));
				default:
					return 'Был введен неверный параметр $lang - '.$lang;
				break;
			}
		}
		
		public function getYear()
		{
			return date('Y', strtotime($this->date));
		}
		
		public function getWeekDay($lang = null)
		{
		
			$Week = [
			  'ru' => ['', 'Понедельник' , 'Вторник' , 'Среда' , 'Четверг' , 'Пятница' , 'Суббота' , 'Воскресенье'],
			  'en' => ['', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday']
			];
		
			$dateWeek = date('w', strtotime($this->date));
		
			switch ($lang)
			{
				case 'ru':
					return $Week['ru'][$dateWeek];					
				case 'en':
					return $Week['en'][$dateWeek];		
				case '':
					return date('w', strtotime($this->date));
				default:
					return 'Был введен неверный параметр $lang - '.$lang;
				break;
			}
		}
		
		public function addDay($value)
		{
			return date_format(date_modify(date_create($this->date), "+$value days"), 'Y-m-d');
		}
		
		public function subDay($value)
		{
			return date_format(date_modify(date_create($this->date), "-$value days"), 'Y-m-d');
		}
		
		public function addMonth($value)
		{
			return date_format(date_modify(date_create($this->date), "+$value month"), 'Y-m-d');
		}
		
		public function subMonth($value)
		{
			return date_format(date_modify(date_create($this->date), "-$value month"), 'Y-m-d');
		}
		
		public function addYear($value)
		{
			return date_format(date_modify(date_create($this->date), "+$value year"), 'Y-m-d');
		}
		
		public function subYear($value)
		{
			return date_format(date_modify(date_create($this->date), "-$value year"), 'Y-m-d');
		}
		
		public function format($format)
		{
			return date($format, strtotime($this->date));
		}
		
		public function __toString()
		{
			return $this->date;
		}
	}
?>