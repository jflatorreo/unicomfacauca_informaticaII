<?php

date_default_timezone_set('America/Bogota');

class db{

	/**
	 * db
	 *
	 * @var $	public $db;
	 */
	public $db;


	/**
	 * __construct
	 *
	 * @return void
	 */
	function __construct(){
		//$this->db_connect('localhost','id1722893_root','DB_CII_2017','id1722893_asistencia');
		$this->db_connect('localhost','jflatorreo','1234','informaticaII');
		$result=$this->db->query("SELECT * FROM Usuarios");
	}


	/**
	 * db_connect
	 *
	 * Connect with database
	 *
	 * @param mixed $host
	 * @param mixed $user
	 * @param mixed $pass
	 * @param mixed $database
	 * @return void
	 */
	function db_connect($host,$user,$pass,$database){
		$this->db = new mysqli($host, $user, $pass, $database);

		if($this->db->connect_errno > 0){
			die('Unable to connect to database [' . $this->db->connect_error . ']');
		}
	}

	
}
/* End of file db.php */
