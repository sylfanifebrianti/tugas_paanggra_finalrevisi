<?php

// Class database (koneksi database)
class Database
{

	// Property
	var $host = "";
	var $uname = "root";
	var $pass = "" ;
	var $db = "learn_smkn4";
	var $connection;
	// Method koneksi kedalam database
	function Connect()
	{
		$this->connection = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
		return $this->connection;
	}
}