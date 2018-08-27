<?php get_header('pages'); ?>
<?php
	while (have_posts()): the_post(); 
			get_template_part('template-parts/parts-of-template/contents/content', 'singles');
	endwhile; 
?>
<?php get_footer('main'); ?>
