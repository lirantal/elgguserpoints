<?php

	global $CONFIG;
	
	$tab = $vars['tab'];
	$user_guid = $vars['user_guid'];
	
	$settingsselect = ''; 
	$statsselect = '';
	switch($tab) {
		case 'list':
			$listselect = 'class="selected"';
			break;
		case 'detail':
			$listdetail = 'class="selected"';
			break;
		case 'moderate':
			$moderateselect = 'class="selected"';
			break;
		case 'add':
			$addselect = 'class="selected"';
			break;
		case 'settings':
			$settingsselect = 'class="selected"';
			break;
		case 'actions':
			$actionsselect = 'class="selected"';
			break;
	}
	
?>
<div class="contentWrapper">
	<div id="elgg_horizontal_tabbed_nav">
		<ul>
			<li <?php echo $listselect; ?>><a href="<?php echo $CONFIG->wwwroot . 'mod/elggx_userpoints/admin.php?tab=list'; ?>"><?php echo elgg_echo('elggx_userpoints:list'); ?></a></li>
			<li <?php echo $listdetail; ?>><a href="<?php echo $CONFIG->wwwroot . 'mod/elggx_userpoints/admin.php?tab=detail'; ?>"><?php echo elgg_echo('elggx_userpoints:detail'); ?></a></li>
			<li <?php echo $moderateselect; ?>><a href="<?php echo $CONFIG->wwwroot . 'mod/elggx_userpoints/admin.php?tab=moderate'; ?>"><?php echo elgg_echo('elggx_userpoints:moderate'); ?></a></li>
			<li <?php echo $addselect; ?>><a href="<?php echo $CONFIG->wwwroot . 'mod/elggx_userpoints/admin.php?tab=add'; ?>"><?php echo elgg_echo('elggx_userpoints:add'); ?></a></li>
			<li <?php echo $settingsselect; ?>><a href="<?php echo $CONFIG->wwwroot . 'mod/elggx_userpoints/admin.php?tab=settings'; ?>"><?php echo elgg_echo('elggx_userpoints:settings'); ?></a></li>
			<li <?php echo $actionsselect; ?>><a href="<?php echo $CONFIG->wwwroot . 'mod/elggx_userpoints/admin.php?tab=actions'; ?>"><?php echo elgg_echo('elggx_userpoints:actions'); ?></a></li>
		</ul>
	</div>
<?php
	switch($tab) {
		case 'list':
			echo elgg_view("elggx_userpoints/list");
			break;
		case 'detail':
			echo elgg_view("elggx_userpoints/detail");
			break;
		case 'moderate':
			echo elgg_view("elggx_userpoints/moderate");
			break;
		case 'add':
			echo elgg_view("elggx_userpoints/add");
			break;
		case 'settings':
			echo elgg_view("elggx_userpoints/settings");
			break;
		case 'actions':
			echo elgg_view("elggx_userpoints/actions");
			break;
	}
?>
</div>
