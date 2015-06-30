<?php
/**
 * author: Joris Rietveld <jorisrietveld@protonmail.com>
 * Created on: 30-6-15 - 18:32
 * File: Login.php
 * Project: K1P11
 * licence: GPLv3 <http://www.gnu.org/licenses/gpl-3.0.html>
 */

class Login
{
	const FB_USER_NOT_FOUND = "De gebruiker is niet gevonden.";
	const FB_USER_PASSWORD_MISS_MATCH = "Het wachtwoord is incorrect.";

	private $connection;
	private $getUserSql = "SELECT name, password, level FROM users WHERE name = ?";
	private $setUserSql = "INSERT INTO users( name, password, level ) VALUES ( ?, ?, ? )";

	private $feedback = "";

	/**
	 * @param \Database $database
	 */
	public function __construct( Database $database )
	{
		if( $database )
		{
			$this->connection = $database->getConnection();
		}
	}

	/**
	 * @param \Database $database
	 */
	public function setNewConnection( Database $database )
	{
		$this->connection = $database->getConnection();
	}

	/**
	 * @param $name
	 * @param $password
	 *
	 * @return bool
	 * @throws \Exception
	 */
	public function login( $name, $password )
	{
		try
		{
			$preparedStatement = $this->connection->prepare( $this->getUserSql );
			$preparedStatement->execute( [$name] );

			$databaseResultSet = $preparedStatement->fetch( PDO::FETCH_ASSOC );
			if( $databaseResultSet )
			{
				if( password_verify( $password, $databaseResultSet["password"] ))
				{
					// User is authenticated.
					$_SESSION["auth"] = $databaseResultSet;
					return true;
				}
				$this->feedback = self::FB_USER_PASSWORD_MISS_MATCH;
				return false;
			}
			else
			{
				$this->feedback = self::FB_USER_NOT_FOUND;
				return false;
			}

		}
		catch( \PDOException $e )
		{
			throw new \Exception( $e->getMessage(), $e->getCode(), $e->getPrevious() );
		}
	}

	/**
	 * @param $name
	 * @param $level
	 * @param $password
	 *
	 * @return bool
	 * @throws \Exception
	 */
	public function register( $name, $level, $password )
	{
		try
		{
			$preparedStatement = $this->connection->prepare( $this->setUserSql );

			$password = password_hash( $password, PASSWORD_BCRYPT );
			if( $preparedStatement->execute( [ $name, $level, $password ] ))
			{
				return true;
			}
			return false;
		}
		catch( \PDOException $e )
		{
			throw new \Exception( $e->getMessage(), $e->getCode(), $e->getPrevious() );
		}
	}

	/**
	 * @return string
	 */
	public function getFeedback()
	{
		return $this->feedback;
	}
}