<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 */
?>
    </div><!-- #main -->
    <footer>
    <div id="footer" class="footer-section">    
		<div class="content_container clearfix">
        
        <div class="footer_col col-sm-12 col_1" >
            <div class="col-sm-8 contact" style="clear:both; text-align:center; font-size: 12px; padding-top: 6px;">
           		<p>
           		<a href="https://www.google.com/maps/search/?api=1&query=<?php echo urlencode(get_theme_mod('to_contactAddress', "Contact Address")); ?>" target="_blank">
           		
           		<?php echo get_theme_mod('to_contactName', "Contact Name"); ?>
           		<i class="fas fa-circle" style="font-size: 8px; "></i>
               	<?php echo get_theme_mod('to_contactAddress', "Contact Address"); ?>
               	<i class="fas fa-circle" style="font-size: 8px; "></i></a>
               	
               	
				<a href="tel:<?php echo get_theme_mod('to_contactNumber', "Contact Number"); ?>">
				<?php echo get_theme_mod('to_contactNumber', "Contact Number"); ?></a></p>
				<p>
				</br>
					<a href="#" target="_blank">Website Feedback</a> <i class="fas fa-circle" style="font-size: 8px; "></i> 
        			<a href="#" target="_blank">Privacy</a> <i class="fas fa-circle" style="font-size: 8px; "></i>
        			<a href="#" target="_blank">Campus Accessibility</a> <i class="fas fa-circle" style="font-size: 8px;"></i>
        			<a href="#">Copyright &copy; <script>date = new Date(); document.write(date.getFullYear());</script></a>
				</p>	
			</div>   
            <div class="col-sm-4 " style="text-align:center; font-size: 36px; ">
                <a href="<?php echo get_theme_mod('to_Facebook', 'https://www.facebook.com/'); ?>" target="_blank"><i class="fab fa-facebook-square"></i></a>
                <a href="<?php echo get_theme_mod('to_Twitter', 'https://twitter.com/'); ?>" target="_blank"><i class="fab fa-twitter-square"></i></a>
                <a href="<?php echo get_theme_mod('to_Insta', 'https://www.instagram.com/'); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="<?php echo get_theme_mod('to_Youtube', 'https://www.youtube.com/'); ?>" target="_blank"><i class="fab fa-youtube-square"></i></a>
				<a href="<?php echo get_theme_mod('to_LinkedIn', 'https://www.linkedin.com'); ?>" target="_blank"><i class="fab fa-linkedin"></i></a>
				<a href="mailto:<?php echo get_theme_mod('to_EAddress', "webmaster@email.com"); ?>"><i class="fas fa-envelope-open-text"></i></a>
			</div>
		</div>
	</div>
	</div>
<?php wp_footer(); ?>
</footer>
</body>
</html>