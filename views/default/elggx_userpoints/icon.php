<?php

    if ($vars['size'] == 'large') { 
	    if (get_plugin_setting('profile_display', 'elggx_userpoints')) {
            $upperplural = get_plugin_setting('upperplural', 'elggx_userpoints');
?>

	        <div class="userpoints_profile">
		        <div><span><?php echo $upperplural . ': ' . $vars['entity']->userpoints_points;?></span></div>
	        </div>

        <?php } ?>
    <?php } ?>
