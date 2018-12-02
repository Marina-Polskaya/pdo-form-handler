<?php
class Handler {

	private $connection;
	

	public function __construct(){
		try {
			$this->connection = new PDO('mysql:dbname=db_blog;host=localhost', 'root', '');
			$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch (PDOException $e){
			die('Подключение не удалось: '. $e->getMassage());
		}
	}


	public function getLoginForm($params) {
   		return $params['login'];
	}

	public function getPasswordForm($params) {
   		return $params['password'];
	}
}

?>