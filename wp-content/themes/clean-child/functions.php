<?php

/*add_filter( 'excerpt_length', 'td_excerptLength' );
function td_excerptLength( $length ) { return 34; }  
*/

function get_excerpt($count){
  $permalink = get_permalink($post->ID);
  $excerpt = get_the_content();
  $excerpt = strip_tags($excerpt);
  $excerpt = substr($excerpt, 0, $count);
  $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
  $excerpt = $excerpt.'...';
  return $excerpt;
}

function firstname() {
		
	return $_GET["first-name"];
	
}
add_shortcode('firstname', 'firstname');

function lastname() {
		
	return $_GET["last-name"];
	
}
add_shortcode('lastname', 'lastname');

function email() {
		
	return $_GET["email"];
	
}
add_shortcode('email', 'email');



?>