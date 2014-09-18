	</div>	
	<div id="footer">		
		
		<div class="inside clearfix">						
			
			<div class="secondary clearfix">
            
				<?php $footer_left = of_get_option('ttrust_footer_left'); ?>
				<?php $footer_right = of_get_option('ttrust_footer_right'); ?>
                
                <div id="footmenu">
            <p><a href="\">Home</a> | <a href="/privacy-policy/">Privacy  Policy</a> | <a href="http://www.aha.edu/gedtpage/Gedt_culinary/Gedt.html" target="_blank">Gainful Employment</a> | <a href="/contact-us/">Contact Us</a> | <a href="/admissions/">Apply Now</a></p>
            </div>	
				<div class="right"><p>Website by Edge Multimedia, <a target="blank" href="http://www.edgemm.com" title="Advertising Agency Porltand">Advertising Agency Portland</a></p></div>
                
				<div class="left">
                

                <p><?php if($footer_left){echo($footer_left);} else{ ?>&copy; <?php echo date('Y');?> <a href="<?php bloginfo('url'); ?>"><strong><?php bloginfo('name'); ?></strong></a> All Rights Reserved.<?php }; ?><br><em>A Division of International Air and Hospitality Academy</em></p>
                
                </div>
                
			</div><!-- end footer secondary-->
			
		</div><!-- end footer inside-->		
				
	</div><!-- end footer -->	
</div><!-- end container -->
<?php wp_footer(); ?>
</body>
</html>