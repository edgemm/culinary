<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	
	<?php $heading_font = of_get_option('ttrust_heading_font'); ?>
	<?php $body_font = of_get_option('ttrust_body_font'); ?>
	<?php $home_message_font = of_get_option('ttrust_home_message_font'); ?>
	<?php if ($heading_font != "") : ?>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo(urlencode($heading_font)); ?>:regular,italic,bold,bolditalic" />
	<?php else : ?>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:regular,bold" />
	<?php endif; ?>
	
	<?php if ($body_font != "" && $body_font != $heading_font) : ?>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo(urlencode($body_font)); ?>:regular,italic,bold,bolditalic" />
	<?php elseif ($heading_font != "") : ?>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:regular,bold" />
	<?php endif; ?>
	
	<?php if ($home_message_font != "") : ?>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo(urlencode($home_message_font)); ?>:regular,italic,bold,bolditalic" />
	<?php else : ?>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif:regular,bold" />
	<?php endif; ?>
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<?php if (of_get_option('ttrust_favicon') ) : ?>
		<link rel="shortcut icon" href="<?php echo of_get_option('ttrust_favicon'); ?>" />
	<?php endif; ?>
	
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	
	<?php wp_head(); ?>	
</head>

<body <?php body_class(); ?> >

<div id="container">	
<div id="header">
	<div class="inside clearfix">
    
   
<table id="social-icons" width="15%" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td width="23%"><a href="https://www.facebook.com/northwestculinary" target="_blank"><img src="/wp-content/themes/clean-child/images/social-icons_01.png" width="100%" height="36" alt=""></a></td>
		<td width="27%"><a href="https://twitter.com/NWCulinary" target="_blank"><img src="/wp-content/themes/clean-child/images/social-icons_02.png" width="100%" height="36" alt=""></a></td>
		<td width="26%"><a href="https://plus.google.com/u/0/102207873383828614306/" target="_blank"><img src="/wp-content/themes/clean-child/images/social-icons_03.png" width="100%" height="36" alt=""></a></td>
		<td width="24%"><a href="http://pinterest.com/nwculinary/activity/" target="_blank"><img src="/wp-content/themes/clean-child/images/social-icons_04.png" width="100%" height="36" alt=""></a></td>
	</tr>
</table>


    
    <div id="phone"><p>Call Now! (800) 868 - 1816</p></div>
							
		<?php $ttrust_logo = of_get_option('logo'); ?>
		<div id="logo">
		<?php if($ttrust_logo) : ?>				
			<h1 class="logo"><a href="<?php bloginfo('url'); ?>"><img src="<?php echo $ttrust_logo; ?>" alt="<?php bloginfo('name'); ?>" /></a></h1>
		<?php else : ?>				
			<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>				
		<?php endif; ?>	
		</div>
        
        
        
		
		<div id="mainNav" class="clearfix">
        
               							
			<?php wp_nav_menu( array('menu_class' => 'sf-menu', 'theme_location' => 'main', 'fallback_cb' => 'default_nav' )); ?>
            
            
            			
		</div>
				
  </div>	
</div>


<div id="main" class="clearfix">
	<?php if(is_front_page()):?>		
		<?php if(of_get_option('ttrust_slideshow_enabled')) include( TEMPLATEPATH . '/includes/slideshow.php'); ?>	
	<?php endif; ?>
	
	<?php $home_message = of_get_option('ttrust_home_message'); ?>
	<?php if($home_message && is_front_page()) : ?>
		<div id="homeMessage" class="withBorder">
        
        
         <p><?php echo $home_message; ?></p>
            <p><a href="/admissions/" class="homebut">Apply Now!</a></p>
          
</div>
	<?php endif; ?>