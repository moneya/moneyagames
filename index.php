<?php

    /**
	 * Elgg Moneya Games plugin
	 *
	 * @package Elgg Moneya Games
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Felix Rubens, Moneya Designer
	 * @URL http://www.Moneyadesigner.com.br
	 * @copyright (c) Moneya Designer 
	 */
	 
require_once(dirname(dirname(dirname(__FILE__))) . "/engine/start.php");


switch ($vars['page']) {
	case 'tab1':
	default:
		$content = elgg_view('tab1');	
		break;
}

$title = elgg_echo("Games Moneya");
	
$body = elgg_view_layout('one_column', array(
	'content' => $content,
	'title' => $title,
	'filter_override' => elgg_view('Games/nav', array('selected' => $vars['page'])),
	'sidebar' => elgg_view('Games'),
));

echo elgg_view_page($title, $body);
?>
