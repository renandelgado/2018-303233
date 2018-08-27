<?php get_header('main'); ?>
<?php
	while (have_posts()): the_post();
			get_template_part('template-parts/parts-of-template/contents/content', 'main');
	endwhile; 
?>
<?php get_footer('main'); ?>
