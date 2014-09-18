<?php
$lightbox_media = ""; 
$lightbox_img = get_post_meta($post->ID, "_ttrust_lightbox_img_value", true); 
$lightbox_video = get_post_meta($post->ID, "_ttrust_lightbox_video_value", true); 			
if ($lightbox_img || $lightbox_video) : 
	$lightbox_media = ($lightbox_video != "") ? $lightbox_video : $lightbox_img; 
endif;

// categories to show full content instead of excerpt - gfh
$fullContentCats = array( "9" );
?>

<div <?php post_class('stacked catpost'); ?>>				
	<div class="inside clearfix">
		<?php if(has_post_thumbnail()) : ?>		
			<?php if($lightbox_media) : ?>						
		<!--<a class="thumb" href="<?php echo $lightbox_media; ?>" rel="prettyPhoto" title="">-->
			<span class="lbIndicator"><span></span></span>	
			<?php else : ?>
		<!--<a class="thumb" href="<?php the_permalink(); ?>" rel="bookmark" >-->
			<?php endif; ?>													
				<?php the_post_thumbnail('medium', array('class' => 'postThumb alignleft', 'alt' => ''.get_the_title().'', 'title' => ''.get_the_title().'')); ?>
		<!--</a>-->		
		<?php endif; ?>
		<div class="inside-content">
			<h1 class="inside-headline"><!--<a href="<?php the_permalink() ?>" rel="bookmark" >--><?php the_title(); ?><!--</a>--></h1>
			<div class="meta">
				<?php if( get_field( 'title' ) ) echo get_field( 'title' ); ?>
			</div>																			
	
			<p><?php // show full text if in array of class IDs - gfh
			if ( in_category( $fullContentCats ) ) :
				the_content();
				echo "</p>";
			else: 
				echo get_excerpt(275);
				echo "</p>";
				more_link();
			endif;
			?>
		</div>
	</div>																				
</div>