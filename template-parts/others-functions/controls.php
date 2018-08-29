<?php
function received_logotype(){
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$logo = wp_get_attachment_image_src( $custom_logo_id, 'full' );
	if(has_custom_logo()): ?>
	    <a class="navbar-brand" href="#"><img src="<?php echo esc_url($logo[0]); ?>"/></a>
	<?php else: ?>
	    <h1><?php echo get_bloginfo('name'); ?></h1>
	<?php endif;
}

function framework_styles(){
	wp_enqueue_style('frameworks', get_template_directory_uri(). '/assets/customizer/dist/css/frameworks.min.css');
}

function framework_scripts(){
	wp_enqueue_script('jquery', get_template_directory_uri(). '/includes/jquery/jquery.min.js');
	wp_enqueue_script('popper.js', get_template_directory_uri(). '/includes/popper.js/umd/popper.min.js');
	wp_enqueue_script('bootstrap', get_template_directory_uri(). '/assets/customizer/dist/js/bootstrap/bootstrap.min.js');

}
?>
