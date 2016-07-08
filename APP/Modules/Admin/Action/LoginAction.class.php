<?php

Class LoginAction extends Action{

	Public function index(){
		$this->display();
	}

	//登录表单操作
	Public function login(){
		dump($_POST);
	}

	Public function verify(){
		import('Class.Image',APP_PATH);
		Image::verify();
	}
}
?>