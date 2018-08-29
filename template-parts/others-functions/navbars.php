<?php
function header_nav_menu(){
	if (has_nav_menu('primary')):
		wp_nav_menu(array(
			'theme_location'  => 'primary',
			'depth'           => 1,
			'container'       => 'div',
			'container_class' => 'collapse navbar-collapse mr-auto',
			'container_id'    => 'navbar-header',
			'menu_class'      => 'navbar-nav',
			
		));
	endif;
}

function bottom_nav_menu_one(){
	if (has_nav_menu('part_one')):
		wp_nav_menu(array(
			'theme_location'  => 'part_one',
			'depth'           => 1,
			'container'       => 'div',
			'container_class' => '',
		));
	endif;
}
?>
