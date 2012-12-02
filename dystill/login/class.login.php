<?php

class Login
{
	private $_id;
	private $_username;
	private $_password;
	private $_passmd5;
	
	private $_errors;
	private $_access;
	private $_login;
	private $_token;
	
	public function __construct()
	{
		$this->_errors = array();
		$this->_login = isset($_POST['login'])? 1 : 0;
		$this->_access = 0;
		$this->_token = $_POST['token'];
		
		$this->_id = 0;
		$this->_username = ($this->_login) ? $this->filter($_POST['username']): $_SESSION['username'];
		$this->_password = ($this->_login) ? $this->filter($_POST['password']): $_SESSION['password'];
		$this->_passmd5 = ($this->_login) ? md5($this->_password): $_SESSION['password'];
		
	}
	
	public function isLoggedIn()
	{
		($this->_login)? $this->verifyPost() : $this->verifySession();
		
		return $this->_access;
	}
	
	public function filter($var)
	{
		return preg_replace('/[^a-zA-Z0-9]/','',$var);
	}
	
	public function verifyPost()
	{
		
	}
	
	public function verifySession()
	{}
	
	public function verifyDatabase()
	{}
	
	public function isDataValid()
	{}
	
	public function isTokenValid()
	{}
	
	public function registerSession()
	{}
	
	public function sessionExist()
	{}
	
	public function showErrors()
	{}
	
}

?>