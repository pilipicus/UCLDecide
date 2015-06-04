<?php get_header(); ?>
	
<div id="mainContainer">
	<h1>home</h1>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	  	<?php the_content(); ?>

	<?php endwhile; else: ?>
		<p><?php _e('Sorry, this page does not exist.'); ?></p>
	<?php endif; ?>
	
	
		
		

</div>

<?php get_footer(); ?>