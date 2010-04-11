<?php

	/**
	* Userpoints for for manually adding points
	*/

	$action = $vars['url'] . 'action/elggx_userpoints/add';

    // Set default values
    $upperplural    = $plugin->upperplural    ? $plugin->upperplural    : 'Points';
    $lowerplural    = $plugin->lowerplural    ? $plugin->lowerplural    : 'points';
    $lowersingular  = $plugin->lowersingular  ? $plugin->lowersingular  : 'point';


    $form = "<h2>" . elgg_echo('elggx_userpoints:add') . " $upperplural</h2><br>";

    $form .= "<b>" . elgg_echo('elggx_userpoints:add:user') . "</b>";
    $form .= elgg_view('input/text', array('internalname' => "params[username]", 'value' => ''));
    $form .= "<br><br>";

    $form .= "<b>$upperplural:</b>";
    $form .= elgg_view('input/text', array('internalname' => "params[points]", 'value' => ''));
    $form .= "<br><br>";

    $form .= "<b>" . elgg_echo('elggx_userpoints:add:description') . "</b>";
    $form .= elgg_view('input/text', array('internalname' => "params[description]", 'value' => ''));
    $form .= "<br><br>";
    
    $form .= elgg_view("input/securitytoken");

	$form .= "<br><br>" . elgg_view('input/submit', array('value' => elgg_echo("save")));
	echo elgg_view('input/form', array('action' => $action, 'body' => $form));
