<?php
	class NightsWatch implements IFighter
	{
		private $array_recrut;

		public function recruit($some)
		{
			if ($some instanceof IFighter)
			{
				$this->array_recrut[] = $some;
			}
		}

		public function fight()
		{
			foreach ($this->array_recrut as $key => $value) {
				$value->fight();
			}
		}
	}
?>