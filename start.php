<?php

	/**
	 * Elgg Moneya Games plugin
	 *
	 * @package Elgg Moneya Games
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author sociabie getdino.com
	 * @URL http://www.miracledesigner.com.br
	 * @copyright (c) Miracle Designer 
	 */

function games_init() {
global $CONFIG;
elgg_register_page_handler('games','games_page_handler');
				
			// Add menu link
$item = new ElggMenuItem('games', elgg_echo('Games'), 'games');
elgg_register_menu_item('site', $item);

if(!elgg_in_context('admin')){
elgg_register_menu_item('page', array(
			'section' => 'games',
			'name' => 'games',
			'text' => elgg_echo('games'),
			'title' => elgg_echo('games'),
			'href' => "/games",
		//	'contexts' => array('activity'),
			'link_class' => 	'elgg-state-selected',
			'priority' => 100,
			));				
	}
}

function games_page_handler($page) {
	$base = elgg_get_plugins_path() . 'moneyagames';

	if (!isset($page[0])) {
		$page[0] = 'tab1';
	}

	$vars = array();
	$vars['page'] = $page[0];


require_once "$base/index.php";
	
return true;
}
	
elgg_register_event_handler('init', 'system', 'games_init');
?>
