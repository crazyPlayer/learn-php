<?php
	class menuModel{

		public $_table = 'eat';
		
		function findAll(){
			$sql='select * from '.$this->_table;
			return DB::findAll($sql);
		}

	}
?>