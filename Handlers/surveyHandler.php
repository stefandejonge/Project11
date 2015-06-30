<?php
/**
 * author: Joris Rietveld <jorisrietveld@protonmail.com>
 * Created on: 30-6-15 - 21:52
 * File: surveyHandler.php
 * Project: K1P11
 * licence: GPLv3 <http://www.gnu.org/licenses/gpl-3.0.html>
 */

if( empty( $_POST["question"] ) && empty($_POST["answer"]))
{
	http_response_code(400);
}

/**
 * Database object
 */
$database = new Database();

/**
 * Question handler
 */
if( !empty( $_POST["question"] ))
{
	$questionId = $_POST["question"];

	$survey = new Survey( $database );

	if( $question =  $survey->getQuestion( $questionId ))
	{
		echo json_encode( $question );
	}
	else
	{
		echo "Fout!";
	}
}

/**
 * Answer handler
 */
if( !empty( $_POST["answer"] ))
{
	$answer = $_POST["answer"];
	$questionId = $_POST["questionId"];
	$userId = $_POST["userId"];

	$survey = new Survey( $database );

	if( $question =  $survey->saveAnswer( $userId, $questionId, $question ))
	{
		echo "OK";
	}
	else
	{
		echo "Fout!";
	}
}



