<?php
/*
Template Name: Category Page
*/
?>

<?php get_header(); ?>

		<div id="pageHead">
			<h1><?php the_title(); ?></h1>
			<?php $page_description = get_post_meta($post->ID, "_ttrust_page_description_value", true); ?>
			<?php if ($page_description) : ?>
				<p><?php echo $page_description; ?></p>
			<?php endif; ?>	
		</div>
        
       
						 
		<div id="content" class="threeFourths clearfix">
        
        <?php while (have_posts()) : the_post(); ?>
		<?php // display content area if not empty - gfh
		$content = get_the_content();

		if( trim( $content ) != "" ) { // check if content is empty or only whitespace - gfh
		?>
			    <div <?php post_class('clearfix'); ?>>
				<div class="inside">						
					<?php the_content(); ?>
				</div>				
				</div>
		<?php } // end page content area - gfh ?>
	<?php endwhile; ?>					
        
			<div class="posts <?php echo $posts_layout;?>">			
			
			
<?php
$i = 1;

$catid = get_field('display_category');
$posts = get_field('posts_per_page');
$stacked = get_field('category_stacked_posts');
// do something with $variable

// arguments for query - gfh
$cat_args = array(
	'category__and' 	=> $catid,
	'posts_per_page' 	=> $posts
	//'posts_per_page' 	=> $posts,
	//'meta_key'		=> 'post_sort_order',
	//'orderby'		=> 'meta_value_num date'
);
// The Query
$the_query = new WP_Query( $cat_args );

if ($the_query->have_posts()) :

	while ( $the_query->have_posts() ) :
	
		$the_query->the_post();

		// display posts stacked if box checked - gfh
		if ( $stacked ) :
			include('post_stacked_cat.php');
		else :
			include('post_small_cat.php');
		endif;

		$i++;

	endwhile;

else :
	include ('no-results-filter.php');

endif;

wp_reset_postdata();

?>
	
		</div>
				<?php include( TEMPLATEPATH . '/includes/pagination.php'); ?>
					    	
		</div>
        	
		<?php get_sidebar(); ?>	
        
			
			
<?php get_footer(); ?>