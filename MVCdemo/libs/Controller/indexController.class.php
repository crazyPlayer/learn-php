<?php
	class indexController{
		function index(){
			$arr=M('menu')->findAll();
			
			VIEW::assign(array('arr'=>$arr));
			VIEW::display('test.html');
		
		}
	}
?>