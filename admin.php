<?php

	include_once dirname(dirname(dirname(__FILE__))) . "/engine/start.php";

	global $CONFIG;

	admin_gatekeeper();
	set_context('admin');
	set_page_owner($_SESSION['guid']);
	
	$tab = get_input('tab') ? get_input('tab') : 'list';
    $user_guid = get_input('user_guid');

	$body = elgg_view_title(elgg_echo('elggx_userpoints:admin'));
	
	$body .= elgg_view("admin/elggx_userpoints", array('tab' => $tab, 'user_guid' => $user_guid));
	
	page_draw(elgg_echo('userpoints:admin'), elgg_view_layout("two_column_left_sidebar", '', $body));

?>
