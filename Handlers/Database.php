<?php

/**
 * author: Joris Rietveld <jorisrietveld@protonmail.com>
 * Created on: 30-6-15 - 18:01
 * File: Database.php
 * Project: K1P11
 * licence: GPLv3 <http://www.gnu.org/licenses/gpl-3.0.html>
 */
class Database
{
	private $connection;
	private $error = "";

	public function __construct( $dsn = "", $username = "root", $password = "toor", Array $pdoSettings = [ ] )
	{
		$defaultSettings = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_EMULATE_PREPARES => FALSE ];

		$dsn = ( empty( $dsn ) ) ? "mysql:host=127.0.0.1;port=3306;charset=utf8;" : $dsn;
		$username = ( empty( $username ) ) ? "root" : $username;
		$password = ( empty( $password ) ) ? "toor" : $password;
		$pdoSettings = ( count( $pdoSettings ) ) ? $defaultSettings : $pdoSettings;

		try
		{
			$this->connection = new PDO( $dsn, $username, $password, $pdoSettings );
		}
		catch ( PDOException $e )
		{
			$this->error = $e->getMessage();
		}
	}

	public function getConnection()
	{
		if(!$this->connection)
		{
			throw new Exception( $this->error );
		}
		return $this->connection;
	}
}