<?php
class UserModel extends Model{
	
	/**
	 * 数据库account
	 **/
	protected $dbName='account';
	protected $_validate = array(
   // array('verify','require','验证码必须！'),  // 都有时间都验证
	array('UserName','require',' 用户名不能为空！',1),  // 只在登录时候验证
	array('UserName','/^[a-zA-Z]+[a-zA-Z]*$/','用户名格式不正确！',1,'regex'),	
    array('UserName','checkName',' 用户名已存在！',1,'unique',1),  // 只在登录时候验证
	array('Email','email','Email格式不正确',1),		
	array('Email','checkName','Email已注册',1,'unique',1),		
    //array('Password','checkPwd','密码错误！',1,'function',1), // 只在登录时候验证
// 	array('Password','checkPwdLength','密码长度不正确',0,'callback',1), // 自定丿凼数验证密码格式		
	array('Password','6,20','密码长度不正确',0,'length',1), // 自定丿凼数验证密码格式
	array('ConfirmPassword','Password','密码不一致',0,'confirm'), // 验证确认密码是否和密码一致
  );
	
	protected $_auto=array(
			array('Password','md5',1,'function'),
			array('registerTime','time',2,'function'),
			);
	
	private function checkPwdLength(){
		if(strlen($_POST["Password"])<6){
			return false;
		}
		else{
			return  true;
		}
	}
}