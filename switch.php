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

HTML;
			break;

		case "2":
			$page = <<<HTML

HTML;

			break;

		case "3":
			$page = <<<HTML

HTML;

			break;

		case "4":
			$page = <<<HTML

HTML;

			break;

		case "5":
			$page = <<<HTML

HTML;

			break;

		case "6":
			$page = <<<HTML

HTML;

			break;

		case "7":
			$page = <<<HTML

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

HTML;

			break;

		default :
			$page = <<<HTML

HTML;

			break;
	}
}
else
{
	$page = <<<HTML
	<h2>Slaat het u het ontbijt wel eens over</h2>
HTML;
}