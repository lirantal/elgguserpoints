<?php

    global $CONFIG;

    admin_gatekeeper();
    action_gatekeeper();

    $params = get_input('params');

    $user = get_user_by_username($params['username']);

    userpoints_add($user->guid, $params['points'], $params['description'], 'admin');

    system_message(sprintf(elgg_echo("userpoints:add:success"), $params['points'], get_plugin_setting('lowerplural', 'elggx_userpoints'), $params['username']));
    forward($_SERVER['HTTP_REFERER']);
?>
