<?php
	class first
	{
		public function abc()
		{
			echo "without argument";
		}

	}
	class second extends first
	{
		public function abc()
		{
			echo "class second";
		}
	}
	class third extends second
	{
		public function abc()
		{
			echo "class third";
		}
	}
	 $obj = new third();
	 $obj->abc();
	 $obj = new second();
	 $obj->abc();
	
	
?>