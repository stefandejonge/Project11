<?php
/**
 * author: Joris Rietveld <jorisrietveld@protonmail.com>
 * Created on: 30-6-15 - 13:42
 * File: form.php
 * Project: K1P11
 * licence: GPLv3 <http://www.gnu.org/licenses/gpl-3.0.html>
 */

try
{
	$pdo = new PDO( "mysql:host=127.0.0.1;port=3306;dbname=k1p11;", "root", "toor", [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_EMULATE_PREPARES => false ] );

	$sql = <<<SQL
	INSERT INTO `answers`
	( question1, question2, question3, question4, question5, question6, question7, question8, question9, question10,  )
	VALUES
	( ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  )
SQL;

	$bindValues = [
		$_POST[ "q1" ],
		$_POST[ "q2" ],
		$_POST[ "q3" ],
		$_POST[ "q4" ],
		$_POST[ "q5" ],
		$_POST[ "q6" ],
		$_POST[ "q7" ],
		$_POST[ "q8" ],
		$_POST[ "q9" ],
		$_POST[ "q10" ]
	];

	$stmt = $pdo->prepare( $sql );

	if(! $stmt->execute( $bindValues ))
	{
		throw new Exception("Error can't execute the prepared statment. (insert answers) ");
	}

	$answerId = $pdo->lastInsertId();

	$sqlInsertResult = <<<SQL
	INSERT INTO `results`
	( user_id, answer_id )
	VALUES
	( ?, ? )
SQL;

	$bindValues = [
		$_SESSION["login_user_id"],
		$answerId
	];


	$stmt = $pdo->prepare( $sqlInsertResult );

	if( !$stmt->execute( $bindValues ) )
	{
		throw new Exception("Error can't execute the prepared statment. (insert results) ");
	}






}
catch ( \PDOException $e )
{
	echo "<pre>";
	var_dump( $e );
	echo "</pre>";
}
catch ( \Exception $e )
{

}