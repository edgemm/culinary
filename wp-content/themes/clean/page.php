<?php get_header(); ?>	
		
		<?php if(!is_front_page()):?>
		<div id="pageHead">
			<h1><?php the_title(); ?></h1>
			<?php $page_description = get_post_meta($post->ID, "_ttrust_page_description_value", true); ?>
			<?php if ($page_description) : ?>
				<p><?php echo $page_description; ?></p>
			<?php endif; ?>				
		</div>
		<?php endif; ?>	
				 
		<div id="content" class="threeFourths clearfix">
			<?php while (have_posts()) : the_post(); ?>			    
			    <div <?php post_class('clearfix'); ?>>
				<div class="inside">						
					<?php the_content(); ?>
				</div>				
				</div>				
							
			<?php endwhile; ?>					    	
		</div>
		
		<?php get_sidebar(); ?>
		
	
<?php get_footer(); ?>