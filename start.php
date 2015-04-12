<?php

	/**
	 * Elgg Miracle Gallery Games plugin
	 *
	 * @package Elgg Moneya Games
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author sociabie gitdino.com
	 * @URL http://www.miracledesigner.com.br
	 * @copyright (c) Miracle Designer 
	 */

function moneyagames_init() {
global $CONFIG;
elgg_register_page_handler('moneyagames','moneyagames_page_handler');
				
			// Add menu link
$item = new ElggMenuItem('moneyagames', elgg_echo('Games'), 'moneyagames');
elgg_register_menu_item('site', $item);

if(!elgg_in_context('admin')){
elgg_register_menu_item('page', array(
			'section' => 'moneyagames',
			'name' => 'moneyagames',
			'text' => elgg_echo('moneyagames'),
			'title' => elgg_echo('moneyagames'),
			'href' => "/moneyagames",
		//	'contexts' => array('activity'),
			'link_class' => 	'elgg-state-selected',
			'priority' => 100,
			));				
	}
}

function moneyagames_page_handler($page) {
	$base = elgg_get_plugins_path() . 'moneyagames';

	if (!isset($page[0])) {
		$page[0] = 'tab1';
	}

	$vars = array();
	$vars['page'] = $page[0];


require_once "$base/index.php";
	
return true;
}
	
elgg_register_event_handler('init', 'system', 'moneyagames_init');
?>