<div id="sidebar" class="clearfix">

<div class="widgetBox sidebarBox oneFourth clearfix">
<div id="enrollement">
	<?php echo do_shortcode( '[contact-form-7 id="306" title="quick start"]' ); ?>	
    </div>			
</div>	
	
	<?php if(is_author()) : ?>	
		<div class="widgetBox sidebarBox oneFourth clearfix">		
			<h3><?php _e('Author Info', 'themetrust'); ?></h3>			
			<?php global $wp_query; $current_author = $wp_query->get_queried_object(); ?>	
	    	<?php echo get_avatar( $current_author->user_email, '60' ); ?>	        	
	    	<p><?php echo $current_author->description; ?></p>	    	
	    </div>	
	<?php endif; ?>
	
    <?php
	    if(is_archive() && is_active_sidebar('sidebar_posts')) : dynamic_sidebar('sidebar_posts');		
	    elseif(is_single() && is_active_sidebar('sidebar_posts')) : dynamic_sidebar('sidebar_posts');
	    elseif(is_page() && is_active_sidebar('sidebar_pages')) : dynamic_sidebar('sidebar_pages');
		elseif(is_search() && is_active_sidebar('sidebar_posts')) : dynamic_sidebar('sidebar_posts');
		elseif(is_home() && is_active_sidebar('sidebar_home')) : dynamic_sidebar('sidebar_home');
	else : ?>

		<?php if (!dynamic_sidebar('sidebar')) : ?>
    
    	<div class = "widgetBox oneFourth sidebarBox">
		</div><!-- end sidebar box -->
		<?php endif; ?>
    
	<?php endif; ?>
</div><!-- end sidebar -->