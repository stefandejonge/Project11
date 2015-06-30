<?php
/**
 * author: Joris Rietveld <jorisrietveld@protonmail.com>
 * Created on: 30-6-15 - 12:41
 * File: switch.php
 * Project: K1P11
 * licence: GPLv3 <http://www.gnu.org/licenses/gpl-3.0.html>
 */

define( "Q_PREFIX", "pages/");

if(!empty($_GET["q"]))
{
	switch( $_GET["q"])
	{
		case "1":
			$page = <<<HTML
<h2>Slaat het u het ontbijt wel eens over</h2>
	<div class="row">
		<form id="question-form">
			<div class="form-group">
				<div class="radio">
				  <label>
					<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
						Nooit
				  </label>
				</div>
				<div class="radio">
				  <label>
					<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
						Bijna nooit
				  </label>
				</div>
				<div class="radio">
				  <label>
					<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
						Soms
				  </label>
				</div>
				<div class="radio">
				  <label>
					<input type="radio" name="optionsRadios" id="optionsRadios3" value="option4">
						Meestal
				  </label>
				</div>
				<div class="radio">
				  <label>
					<input type="radio" name="optionsRadios" id="optionsRadios3" value="option5">
						Altijd
				  </label>
				</div>
			</div>
		</form>
		<a class="btn btn-info col-lg-6 bottom-left">
			Vorige
		</a>
		<a class="btn btn-info col-lg-6 bottom-right" href="?q=2" onclick="getAnswer( q1 )">
			Volgende
		</a>
	</div>
HTML;
			break;

		case "2":
			$page = <<<HTML
<h2>Slaat het u het ontbijt wel eens over</h2>
	<div class="row">
		<form>
			<div class="form-group">
				<div class="radio">
				  <label>
					<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
						Nooit
				  </label>
				</div>
				<div class="radio">
				  <label>
					<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
						Bijna nooit
				  </label>
				</div>
				<div class="radio">
				  <label>
					<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
						Soms
				  </label>
				</div>
				<div class="radio">
				  <label>
					<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
						Meestal
				  </label>
				</div>
				<div class="radio">
				  <label>
					<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
						Altijd
				  </label>
				</div>
			</div>
		</form>
		<a class="btn btn-info col-lg-6 bottom-left">
			Vorige
		</a>
		<a class="btn btn-info col-lg-6 bottom-right" href="?q=2" onclick="getAnswer()">
			Volgende
		</a>
	</div>
HTML;

			break;

		case "3":
			$page = <<<HTML
<h2>Slaat het u het ontbijt wel eens over</h2>
	<div class="row">
		<form>
			<div class="form-group">
				<div class="radio">
				  <label>
					<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
						Nooit
				  </label>
				</div>
				<div class="radio">
				  <label>
					<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
						Bijna nooit
				  </label>
				</div>
				<div class="radio">
				  <label>
					<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
						Soms
				  </label>
				</div>
				<div class="radio">
				  <label>
					<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
						Meestal
				  </label>
				</div>
				<div class="radio">
				  <label>
					<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
						Altijd
				  </label>
				</div>
			</div>
		</form>
		<a class="btn btn-info col-lg-6 bottom-left">
			Vorige
		</a>
		<a class="btn btn-info col-lg-6 bottom-right" href="?q=2" onclick="getAnswer()">
			Volgende
		</a>
	</div>
HTML;

			break;

		case "4":
			$page = <<<HTML
<h2>Slaat het u het ontbijt wel eens over</h2>
	<div class="row">
		<form>
			<div class="form-group">
				<div class="radio">
				  <label>
					<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
						Nooit
				  </label>
				</div>
				<div class="radio">
				  <label>
					<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
						Bijna nooit
				  </label>
				</div>
				<div class="radio">
				  <label>
					<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
						Soms
				  </label>
				</div>
				<div class="radio">
				  <label>
					<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
						Meestal
				  </label>
				</div>
				<div class="radio">
				  <label>
					<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
						Altijd
				  </label>
				</div>
			</div>
		</form>
		<a class="btn btn-info col-lg-6 bottom-left">
			Vorige
		</a>
		<a class="btn btn-info col-lg-6 bottom-right" href="?q=2" onclick="getAnswer()">
			Volgende
		</a>
	</div>
HTML;

			break;

		case "5":
			$page = <<<HTML
<h2>Slaat het u het ontbijt wel eens over</h2>
	<div class="row">
		<form>
			<div class="form-group">
				<div class="radio">
				  <label>
					<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
						Nooit
				  </label>
				</div>
				<div class="radio">
				  <label>
					<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
						Bijna nooit
				  </label>
				</div>
				<div class="radio">
				  <label>
					<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
						Soms
				  </label>
				</div>
				<div class="radio">
				  <label>
					<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
						Meestal
				  </label>
				</div>
				<div class="radio">
				  <label>
					<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
						Altijd
				  </label>
				</div>
			</div>
		</form>
		<a class="btn btn-info col-lg-6 bottom-left">
			Vorige
		</a>
		<a class="btn btn-info col-lg-6 bottom-right" href="?q=2" onclick="getAnswer()">
			Volgende
		</a>
	</div>
HTML;

			break;

		case "6":
			$page = <<<HTML
<h2>Slaat het u het ontbijt wel eens over</h2>
	<div class="row">
		<form>
			<div class="form-group">
				<div class="radio">
				  <label>
					<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
						Nooit
				  </label>
				</div>
				<div class="radio">
				  <label>
					<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
						Bijna nooit
				  </label>
				</div>
				<div class="radio">
				  <label>
					<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
						Soms
				  </label>
				</div>
				<div class="radio">
				  <label>
					<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
						Meestal
				  </label>
				</div>
				<div class="radio">
				  <label>
					<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
						Altijd
				  </label>
				</div>
			</div>
		</form>
		<a class="btn btn-info col-lg-6 bottom-left">
			Vorige
		</a>
		<a class="btn btn-info col-lg-6 bottom-right" href="?q=2" onclick="getAnswer()">
			Volgende
		</a>
	</div>
HTML;

			break;

		case "7":
			$page = <<<HTML
<h2>Slaat het u het ontbijt wel eens over</h2>
	<div class="row">
		<form>
			<div class="form-group">
				<div class="radio">
				  <label>
					<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
						Nooit
				  </label>
				</div>
				<div class="radio">
				  <label>
					<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
						Bijna nooit
				  </label>
				</div>
				<div class="radio">
				  <label>
					<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
						Soms
				  </label>
				</div>
				<div class="radio">
				  <label>
					<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
						Meestal
				  </label>
				</div>
				<div class="radio">
				  <label>
					<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
						Altijd
				  </label>
				</div>
			</div>
		</form>
		<a class="btn btn-info col-lg-6 bottom-left">
			Vorige
		</a>
		<a class="btn btn-info col-lg-6 bottom-right" href="?q=2" onclick="getAnswer()">
			Volgende
		</a>
	</div>
HTML;

			break;

		case "8":
			$page = <<<HTML

HTML;

			break;

		case "9":
			$page = <<<HTML

HTML;

			break;

		case "10":
			$page = <<<HTML
<h2>Slaat het u het ontbijt wel eens over</h2>
	<div class="row">
		<form id="question-form">
			<div class="form-group">
				<div class="radio">
				  <label>
					<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
						Nooit
				  </label>
				</div>
				<div class="radio">
				  <label>
					<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
						Bijna nooit
				  </label>
				</div>
				<div class="radio">
				  <label>
					<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
						Soms
				  </label>
				</div>
				<div class="radio">
				  <label>
					<input type="radio" name="optionsRadios" id="optionsRadios3" value="option4">
						Meestal
				  </label>
				</div>
				<div class="radio">
				  <label>
					<input type="radio" name="optionsRadios" id="optionsRadios3" value="option5">
						Altijd
				  </label>
				</div>
			</div>
		</form>
		<a class="btn btn-info col-lg-6 bottom-left">
			Vorige
		</a>
		<button class="btn btn-info col-lg-6 bottom-right" onclick="send()">
			Verstuuren
		</button>
	</div>
	<script>
	function send() {
				console.log( "submit event ");

				$.ajax({
					"url" : "http://127.0.0.1/Project11/Handlers/form.php",
					"method" : "POST",
					"data" : answer,
					"success" : function( response ){
						alert( response );
					},
					"error" : function( xhrObject, errorMessage, errorThrown ){
						alert( errorMessage + " " + errorThrown );
					}

				});
			}
</script>
HTML;

			break;

		default :
			$page = <<<HTML
<h2>Slaat het u het ontbijt wel eens over</h2>
	<div class="row">
		<a class="btn btn-info col-lg-6 bottom-left">
			Vorige
		</a>
		<a class="btn btn-info col-lg-6 bottom-right" href="?q=2">
			Volgende
		</a>
	</div>
HTML;

			break;
	}
}
else
{
	$page = <<<HTML

HTML;
}