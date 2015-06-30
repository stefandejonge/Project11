<?php

/**
 * author: Joris Rietveld <jorisrietveld@protonmail.com>
 * Created on: 30-6-15 - 17:52
 * File: Survey.php
 * Project: K1P11
 * licence: GPLv3 <http://www.gnu.org/licenses/gpl-3.0.html>
 */
class Survey
{
	private $connection = NULL;
	private $getQuestionSql = "SELECT id, title, question FROM fix_question WHERE id = ? ";
	private $setAnswerSql = "INSERT INTO fix_answer( user_id, answer, question_id ) VALUES ( ?, ?, ? )";

	/**
	 * @param \Database $database
	 *
	 * @throws \Exception
	 */
	public function __construct( Database $database )
	{
		$this->connection = $database->getConnection();
	}

	/**
	 * @param $id
	 *
	 * @return bool|mixed|string
	 * @throws \Exception
	 */
	public function getQuestion( $id )
	{
		try
		{
			$statement = $this->connection->prepare( $this->getQuestionSql );

			if( $statement->execute( [ $id ] ) )
			{
				$result = $statement->fetch( PDO::FETCH_ASSOC );
				if( $result == false )
				{
					return "No data found!";
				}
				return $result;
			}
		}
		catch( \PDOException $e )
		{
			throw new \Exception( $e->getMessage(), $e->getCode(), $e->getPrevious() );
		}
		finally
		{
			return false;
		}
	}

	/**
	 * @param array $ids
	 *
	 * @throws \Exception
	 */
	public function getQuestions( Array $ids = [] )
	{
		$allQuestions = [];

		foreach( $ids as $id )
		{
			$this->getQuestion( $id );
		}
	}

	/**
	 * @param $userId
	 * @param $questionId
	 * @param $answer
	 *
	 * @return bool
	 * @throws \Exception
	 */
	public function saveAnswer( $userId, $questionId, $answer )
	{
		try
		{
			$statement = $this->connection->prepare( $this->setAnswerSql );

			if( $statement->execute( [ $userId, $questionId, $answer ] ) )
			{
				return true;
			}
			return false;
		}
		catch( \PDOException $e )
		{
			throw new \Exception( $e->getMessage(), $e->getCode(), $e->getPrevious() );
		}
		finally
		{
			return false;
		}
	}
}