<?php

class database{
	private $dbhost = 'localhost';
	private $dbname = 'rental_mobil';
	private $dbpass = '';
	private $dbuser = 'root';
	public $aksi;

	function __construct(){
		$this->connect();
	}

	function connect(){
		$this->aksi = new mysqli($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
		if(!$this->aksi){
			header("location:error.php?err=1");
		}
	}
}

?>