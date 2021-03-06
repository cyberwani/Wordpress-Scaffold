<?php get_header(); ?>

	<div id="content_wrap">
		
		<!-- BEGIN #content -->
		<div id="content">
			
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
				<h2><?php the_title(); ?></h2>
				
				<?php the_content(); ?>
				
			<?php endwhile; endif; ?>
			
		</div>
		<!-- END #content -->
		
		<?php get_sidebar(); ?>
		
	</div>
	
<?php get_footer(); ?>